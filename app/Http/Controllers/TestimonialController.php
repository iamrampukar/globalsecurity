<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Testimonial::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.testimonials.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
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
        return redirect()->route('testimonial.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Testimonial::where(['delete_flag' => 0])->find($id);
         return view('backends.testimonials.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Testimonial::where(['delete_flag' => 0])->find($id);
        return view('backends.testimonials.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, $id)
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
        return redirect()->route('testimonial.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {

    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Testimonial::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = Testimonial::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('testimonial_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('testimonial_image');
        }
        return $status;
    }
}
