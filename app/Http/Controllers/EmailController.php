<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailNotification;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            // 'message' => "Ola parceiro webgenie" // nao precisamos disso
        ];

        
        Mail::to($request->email)->cc('contato@webgenie.com.br')->send(new EmailNotification($details));

        // TODO: Fazer flash
        return response()->json(['message' => 'Email enviado com sucesso!'], 200);
    }
}
