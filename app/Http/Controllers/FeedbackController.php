<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        dd('ramr');
        $model = Feedback::orderBy('id', 'DESC')->get();
        return view('backends.feedbacks.list', compact('model'));
    }

    public function store(StoreFeedbackRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $model = Feedback::create($formData);
            DB::commit();
        } catch (\Exception $e) {
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
        $model = Feedback::find($id);
        return view('backends.feedbacks.show', compact('model'));
    }
}
