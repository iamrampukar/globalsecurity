<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\NoticeWall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

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
        $model['team'] = Team::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['client'] = Client::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['notice_wall'] = NoticeWall::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->first();
        $model['faq'] = Faq::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['testimonial'] = Testimonial::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        $model['gallery'] = Gallery::where(['delete_flag' => 0, 'visible_status' => 1])->orderBy('id', 'DESC')->get();
        return $model;
    }

    public function aboutUs(Request $request)
    {
        return view('homes.about_us');
    }

    public function ourTeam(Request $request)
    {
        $model = $this->_load();
        return view('homes.our_team', compact('model'));
    }

    public function gallery(Request $request)
    {
         $model = $this->_load();
        return view('homes.gallery',compact('model'));
    }

    public function faq(Request $request)
    {
        $model = $this->_load();
        return view('homes.faq',compact('model'));
    }

    public function services(Request $request)
    {
        return view('homes.service');
    }

    public function outClient(Request $request)
    {
        $model = $this->_load();
        return view('homes.our_client', compact('model'));
    }

    public function contactUs(Request $request)
    {
        return view('homes.contact_us');
    }

    public function send(StoreContactRequest $request)
    {
        $postData = $request->validated();
        DB::beginTransaction();
        try {
            $model = Contact::create($postData);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Save failed success.');
        }
        return redirect()->back()->with('success', 'Save data successfully');
    }
}
