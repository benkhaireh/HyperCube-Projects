<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(Request $request)

    {
        $credentials = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'fullname.required' => "Votre nom complet est requis.",
            'email.required' => "Votre adresse e-mail est requise.",
            'email.email' => "Votre adresse e-mail n'est pas valide.",
            'phone.required' => "Votre numéro mobile est requis.",
            'subject.required' => "Quel est l'objectif de votre mail?",
            'message.required' => "Veuillez nous écrire.",
        ]);

        if ($credentials->passes()) {
            Mail::to('benkhaireh@gmail.com')
                ->send(new contact($request->except('_token')));
            return response()->json(['code' => 'SUCCESS', 'message' => "Bien reçu. Nous reviendrons vers vous dans les plus brefs délais."]);
        }
        return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);

    }
}
