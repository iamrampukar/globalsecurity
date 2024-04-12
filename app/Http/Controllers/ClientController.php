<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Client::where(['delete_flag' => 0])->orderBy('id', 'DESC')->get();
        return view('backends.clients.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
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
        return redirect()->route('client.list')->with('success', 'Save data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Client::where(['delete_flag' => 0])->find($id);
         return view('backends.clients.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Client::where(['delete_flag' => 0])->find($id);
        return view('backends.clients.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, $id)
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
        return redirect()->route('client.list')->with('success', 'Save data successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {

    }

    private function _storeUpdate($request, $formData = [], $id = null): bool
    {
        $model = NULL;
        $status = false;
        if (!empty($id)) {
            $model = Client::where(['delete_flag' => 0])->find($id);
            $model->fill($formData)->save();
            $status = true;
        } else {
            $model = Client::create($formData);
            $status = true;
        }
        if ($request->hasFile('image_name')) {
            $model->clearMediaCollection('client_image');
            $model->addMedia($request->file('image_name'))
                ->toMediaCollection('client_image');
        }
        return $status;
    }
}
