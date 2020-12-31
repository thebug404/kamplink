<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
    public function create() {
        return view("mails.contactme");
    }

    public function store() {
        // Validate form
        $data = request()->validate([
            "email" => "required|string|email",
            "subject" => "required|string",
            "message" => "required|string"
        ]);
        
        // Send mail
        Mail::to("ivanz@gmail.com")->send(new SendContact($data));

        return back()->with([
            "message" => "Gracias por tus comentarios.",
            "status" => "primary"
        ]);
    }
}
