<?php

namespace App\Http\Controllers;

use App\Models\SuccessStory;
use App\Http\Requests\StoreSuccessStoryRequest;
use App\Http\Requests\UpdateSuccessStoryRequest;
use Illuminate\Support\Facades\DB;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = SuccessStory::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.success_story.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.success_story.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSuccessStoryRequest $request)
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
        return redirect()->route('success_story.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = SuccessStory::where(['delete_flag' => 0])->find($id);
        return view('backends.success_story.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = SuccessStory::where(['delete_flag' => 0])->find($id);
        return view('backends.success_story.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuccessStoryRequest $request, $id)
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
        return redirect()->route('success_story.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuccessStory $successStory)
    {
        //
    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = SuccessStory::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = SuccessStory::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('success_story');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('success_story');
        }
        return $status;
    }
}
