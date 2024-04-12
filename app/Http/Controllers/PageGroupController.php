<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageGroupRequest;
use App\Http\Requests\StoreSingleDetailRequest;
use App\Http\Requests\UpdatePageGroupRequest;
use App\Models\PageGroup;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PageGroupController extends Controller
{
    private array $pageType = [];

    public function __construct()
    {
        $this->pageType = [
            'study_abroad' => 'Study Abroad',
//            'services' => 'Services',
//            'scholarship' => 'Scholarship',
            'test_preparation' => 'Test Preparation',
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = PageGroup::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.page_groups.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageType = $this->pageType;
        return view('backends.page_groups.create', compact('pageType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageGroupRequest $request)
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
        return redirect()->route('page_group.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = PageGroup::where(['delete_flag' => 0])->find($id);
        return view('backends.page_groups.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = PageGroup::where(['delete_flag' => 0])->find($id);
        $pageType = $this->pageType;
        return view('backends.page_groups.edit', compact('model', 'pageType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageGroupRequest $request, $id)
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
        return redirect()->route('page_group.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageGroup $pageGroup)
    {
        //
    }


    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = PageGroup::where(['delete_flag' => 0])->find($id);
            $formData['slug'] = Str::slug($formData['slug'], '-');
            $model->fill($formData)->save();
            $status = true;
        } else {
            $formData['slug'] = Str::slug($formData['slug'], '-');
            $model = PageGroup::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('page_group_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('page_group_image');
        }
        return $status;
    }

    public function singleDetail($slug)
    {
        $model = PageGroup::where('slug', $slug)->first();
        return view('backends.single_details.create', compact('model'));
    }

    public function singleDetailUpdate(StoreSingleDetailRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $slug = $formData['slug'];
            $model = PageGroup::where('slug', $slug)->first();
            $model->fill($formData)->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back() - with('error', 'Something error data');
        }
        return redirect()->route('page_group.list')->with('success', 'Save data successfully');

    }
}
