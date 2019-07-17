<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        //
        return view('contacts.index');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'      => 'required|max:100|min:1',
            'email'         => 'required|email',
            'message'       => 'required|min:5',
        ]);
        Contact::create($request->all());
       
        Session::flash('success','thanks for contacting us, we will return to you within the 24 hours of the work');
        return redirect()->back();

    }
}