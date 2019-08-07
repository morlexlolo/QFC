<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use SEOMeta;

class ContactController extends Controller
{
    //
    public function index()
    {
        //
        SEOMeta::setTitle('Contact-QFC');
        SEOMeta::setDescription('Contact Quntum financial corp');
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
        Mail::send(
            'contacts.mail',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->from('kmarcelus92@gmail.com');
                $message->to('kmarcelus92@gmail.com', 'Admin')->subject('Contact information from your website');
            }
        );

        Session::flash('success', 'thanks for contacting us, we will return to you within the 24 hours of the work');
        return redirect()->back();
    }
}