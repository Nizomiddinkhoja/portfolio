<?php

namespace App\Http\Controllers;

use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::orderby( 'id','desc')->first();
//        dd($contact);
        return view('pages.contact', ['contact' => $contact]);
    }
}
