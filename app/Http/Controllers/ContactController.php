<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Contact::orderBy('id', 'DESC')->get();
        return view('backends.contacts.list', compact('model'));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model  = Contact::find($id);
        return view('backends.contacts.show', compact('model'));
    }
}
