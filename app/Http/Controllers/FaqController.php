<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Faq::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.faqs.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
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
        return redirect()->route('faq.list')->with('success', 'Save data successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Faq::where(['delete_flag' => 0])->find($id);
        return view('backends.faqs.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Faq::where(['delete_flag' => 0])->find($id);
        return view('backends.faqs.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, $id)
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
        return redirect()->route('faq.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $pageGroup)
    {
        //
    }


    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Faq::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = Faq::create($formData);
            $status = true;
        }
        return $status;
    }
}
