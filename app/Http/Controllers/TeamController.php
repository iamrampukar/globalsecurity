<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Team::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.teams.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {

            $this->_storeUpdate($request, $formData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Something error data');
        }
        return redirect()->route('team.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Team::where(['delete_flag' => 0])->find($id);
        return view('backends.teams.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Team::where(['delete_flag' => 0])->find($id);
        return view('backends.teams.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, $id)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $this->_storeUpdate($request, $formData, $id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Save failed success.');
        }
        return redirect()->route('team.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $successStory)
    {
        //
    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Team::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = Team::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('team_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('team_image');
        }
        return $status;
    }
}
