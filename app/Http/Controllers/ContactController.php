<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact'); // La vue de ton formulaire
    }

    public function sendForm(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Envoi de l'email
        Mail::to('ayidanielajavon@gmail.com')->send(new ContactFormMail(
            $request->name,
            $request->email,
            $request->subject,
            $request->message
        ));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
