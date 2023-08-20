<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'subject' => 'required',
        ], [
            'fullname.required' => "Votre nom complet est requis",
            'email.required' => "Votre adresse e-mail est requise",
            'email.email' => "Votre adresse e-mail n'est pas valide",
            'phone.required' => "Votre numéro mobile est requis",
            'subject.required' => "L'objectif de votre message est requis",
            'message.required' => "Votre message est requis",
        ]);

        $recaptcha = $request->recaptcha;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => "6LdRlHckAAAAADkhD-VjjN25D-YD0unhwCu9Sp3K",
            'response' => $recaptcha,
            'remoteip' => $remoteip
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        if ($resultJson->success == true) {
            if ($credentials->passes()) {
                Mail::to('contact@docu-solutions.com')
                    ->send(new Contact($request->except('_token')));
                return response()->json(['code' => 'SUCCESS', 'message' => "Bien reçu. Nous reviendrons bientôt vers vous."]);
            }
            return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);
        }

        return response()->json(['code' => 'UNKNOWN', 'message' => "Désolé, nous avons reçu une erreur inconnue. Veuillez réessayer !"]);
    }

    public function quote(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
        ], [
            'fullname.required' => "Votre nom complet est requis",
            'email.required' => "Votre adresse e-mail est requise",
            'email.email' => "Votre adresse e-mail n'est pas valide",
            'phone.required' => "Votre numéro mobile est requis",
            'service.required' => "Le choix de services est requis",
        ]);

        $recaptcha = $request->recaptcha;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => "6LdRlHckAAAAADkhD-VjjN25D-YD0unhwCu9Sp3K",
            'response' => $recaptcha,
            'remoteip' => $remoteip
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        if ($resultJson->success == true) {
            if ($credentials->passes()) {
                Mail::to('sales@docu-solutions.com')
                    ->send(new Quote($request->except('_token')));
                return response()->json(['code' => 'SUCCESS', 'message' => "Bien reçu. Nous reviendrons bientôt vers vous."]);
            }
            return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);
        }

        return response()->json(['code' => 'UNKNOWN', 'message' => "Désolé, nous avons reçu une erreur inconnue. Veuillez réessayer !"]);
    }

    public function subscripe(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'email' => 'required|email',
        ], [
            'email.required' => "Votre adresse e-mail est requise",
            'email.email' => "Votre adresse e-mail n'est pas valide",
        ]);

        $email = strtolower($request->email);


        $recaptcha = $request->recaptcha;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => "6LdRlHckAAAAADkhD-VjjN25D-YD0unhwCu9Sp3K",
            'response' => $recaptcha,
            'remoteip' => $remoteip
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        if ($resultJson->success == true) {
            if ($credentials->passes()) {

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://hypercube-marketing.stackstaging.com/api/v1/subscribers?list_uid=63f363345aab4&api_token=fGKMkjvwLfypmNNy7DpTyCsNDJbsR0tgj5KKxWvotW3vmA7wGQxxNAe5xp1T&EMAIL=$email");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'accept: application/json',
                ]);

                curl_exec($ch);
                curl_close($ch);

                return response()->json(['code' => 'SUCCESS', 'message' => "Bien reçu. Votre inscription est confirmée."]);
            }
            return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);
        }
        return response()->json(['code' => 'UNKNOWN', 'message' => "Désolé, nous avons reçu une erreur inconnue. Veuillez réessayer !"]);
    }
}
