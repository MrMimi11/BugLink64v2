<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

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

    public function store(ContactRequest $request)
    {
        //dd(config('discord.contact.webhookUrl'));
        Http::post(config('discord.contact.webhookUrl'), [
            'embeds' => [
                [
                    'title' => 'Titre: ' . $request->input('object'),
                    'description' => 'Contenu: ' . $request->input('content'),
                    'color' => '1030145',
                    'author' => [
                        'name' => 'Auteur: ' . $request->input('nickname') . ' - ' . $request->input('email')
                    ]
                ]
            ]
        ]);
        return redirect()->route('contact.create')->with('success', 'votre demande a été envoyé');
    }
}
