<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @param Contact $contact
     * @return Response
     */

    public function create(Contact $contact)
    {
        return view('contact.create', compact('contact'));
    }
}
