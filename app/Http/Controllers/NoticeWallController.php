<?php

namespace App\Http\Controllers;

use App\Models\NoticeWall;
use App\Http\Requests\StoreNoticeWallRequest;
use App\Http\Requests\UpdateNoticeWallRequest;
use Illuminate\Support\Facades\DB;

class NoticeWallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = NoticeWall::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.notice_walls.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.notice_walls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticeWallRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $this->_storeUpdate($request, $formData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something error data');
        }
        return redirect()->route('notice_wall.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = NoticeWall::where(['delete_flag' => 0])->find($id);
        return view('backends.notice_walls.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = NoticeWall::where(['delete_flag' => 0])->find($id);
        return view('backends.notice_walls.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticeWallRequest $request, $id)
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
        return redirect()->route('notice_wall.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoticeWall $testimonial)
    {

    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = NoticeWall::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = NoticeWall::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('notice_wall_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('notice_wall_image');
        }
        return $status;
    }
}
