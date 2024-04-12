<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Blog::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.blogs.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $this->_storeUpdate($request, $formData);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back() - with('error', 'Something error data');
        }
        return redirect()->route('blog.list')->with('success', 'Save data successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Blog::where(['delete_flag' => 0])->find($id);
        return view('backends.blogs.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Blog::where(['delete_flag' => 0])->find($id);
        return view('backends.blogs.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $this->_storeUpdate($request, $formData, $id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back() - with('error', 'Something error data');
        }
        return redirect()->route('blog.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $pageGroup)
    {
        //
    }


    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Blog::where(['delete_flag' => 0])->find($id);
            $formData['slug'] = Str::slug($formData['slug'], '-');
            $model->fill($formData)->save();
            $status = true;
        } else {
            $formData['slug'] = Str::slug($formData['slug'], '-');
            $model = Blog::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('blog_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('blog_image');
        }
        return $status;
    }
}
