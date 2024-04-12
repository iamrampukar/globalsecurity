<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Gallery::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.gallerys.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.gallerys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
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
        return redirect()->route('gallery.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Gallery::where(['delete_flag' => 0])->find($id);
        return view('backends.gallerys.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Gallery::where(['delete_flag' => 0])->find($id);
        return view('backends.gallerys.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, $id)
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
        return redirect()->route('gallery.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $successStory)
    {
        //
    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Gallery::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = Gallery::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('gallery_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('gallery_image');
        }
        return $status;
    }
}
