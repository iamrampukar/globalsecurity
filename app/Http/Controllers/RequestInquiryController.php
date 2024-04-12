<?php

namespace App\Http\Controllers;

use App\Models\RequestInquiry;
use App\Http\Requests\StoreRequestInquiryRequest;
use App\Http\Requests\UpdateRequestInquiryRequest;
use Illuminate\Support\Facades\DB;

class RequestInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = RequestInquiry::where(['delete_flag'=>0,'visible_status' => 1])->orderBy('id','DESC')->get();
        return view('backends.request_inqury.list',compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestInquiryRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
        $model = RequestInquiry::create($formData);
        DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'Send failed.');
        }
        return redirect()->back()->with('success', 'Send successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $model = RequestInquiry::where(['delete_flag' => 0])->find($id);
        return view('backends.request_inqury.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestInquiry $requestInquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestInquiryRequest $request, RequestInquiry $requestInquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestInquiry $requestInquiry)
    {
        //
    }
}
