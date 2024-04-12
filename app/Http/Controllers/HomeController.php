<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Faq;
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
        return view('homes.index');
    }

    private function _load()
    {
        $model = [];
        $model['banner'] = Banner::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->limit(5)->get();
        $model['page_group'] = PageGroup::where(['delete_flag' => 0, 'visible_status' => 1, 'page_type' => 'study_abroad'])->orderBy('id', 'DESC')->limit(6)->get();
        $model['teams'] = Team::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['testimonial'] = Testimonial::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->limit(3)->get();
        $model['video'] = Video::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->limit(2)->get();
        $model['blog'] = Faq::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['notice_wall'] = NoticeWall::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->first();
        return $model;
    }

    public function aboutUs(Request $request)
    {
        return view('homes.about_us');
    }

    public function ourTeam(Request $request)
    {
        return view('homes.our_team');
    }

    public function gallery(Request $request)
    {
        return view('homes.gallery');
    }

    public function faq(Request $request)
    {
        return view('homes.faq');
    }

    public function services(Request $request)
    {
        return view('homes.service');
    }

    public function outClient(Request $request)
    {
        return view('homes.our_client');
    }


    public function contactUs(Request $request)
    {
        return view('homes.contact_us');
    }
}
