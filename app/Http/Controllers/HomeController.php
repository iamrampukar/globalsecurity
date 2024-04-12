<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\PageGroup;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Feedback;
use App\Models\Video;
use App\Models\NoticeWall;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $model = $this->_load();
        return view('homes.index', compact('model'));
    }

    private function _load()
    {
        $model = [];
        $model['banner'] = Banner::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->limit(5)->get();
        $model['page_group'] = PageGroup::where(['delete_flag' => 0, 'visible_status' => 1, 'page_type' => 'study_abroad'])->orderBy('id', 'DESC')->limit(6)->get();
        $model['teams'] = Team::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['testimonial'] = Testimonial::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->limit(3)->get();
        $model['video'] = Video::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->limit(2)->get();
        $model['blog'] = Blog::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['notice_wall'] = NoticeWall::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->first();
        return $model;
    }

    public function aboutUs(Request $request)
    {
        $model = $this->_load();
        return view('homes.about_us', compact('model'));
    }

    public function services(Request $request)
    {
        $model = $this->_load();
        return view('homes.services', compact('model'));
    }

    public function faq(Request $request)
    {
        $model = $this->_load();
        return view('homes.faq', compact('model'));
    }

    public function contactUs(Request $request)
    {
        $model = $this->_load();
        return view('homes.contact_us', compact('model'));
    }

    public function blog(Request $request)
    {
        $model = $this->_load();
        return view('homes.blog', compact('model'));
    }

    public function blogDetail(Request $request, $slug)
    {
        $blogModel = Blog::where('slug', $slug)->first();
        $model = $this->_load();
        return view('homes.blog_detail', compact('blogModel', 'model'));
    }

    public function country(Request $request)
    {
        $model = $this->_load();
        return view('homes.country', compact('model'));
    }

    public function applyNow(Request $request)
    {
        $model = $this->_load();
        return view('homes.apply_now', compact('model'));
    }

    public function successStory(Request $request)
    {
        $model = $this->_load();
        return view('homes.teams', compact('model'));
    }

    public function visitorFeedback(Request $request)
    {
        $model = $this->_load();
        return view('homes.visitor_feedback', compact('model'));
    }

    public function sendFeedback(StoreFeedbackRequest $request)
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
        return redirect()->back()->with('success', 'Save data successfully');
    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Feedback::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = Feedback::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('feedback_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('feedback_image');
        }
        return $status;
    }
}
