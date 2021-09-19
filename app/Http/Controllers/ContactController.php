<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {

            $contact = new Contact;

            $contact->name    = $request->name;
            $contact->email   = $request->email;
            $contact->subject = $request->subject;
            $contact->phone   = $request->phone;
            $contact->message = $request->message;

            $contact->save();

            $to = "towhid.foundation@gmail.com";

            $name    = $request->name;
            $email   = $request->email;
            $subject = $request->subject;

            Mail::send('contact.us', ['name' => $request->name, 'phone' => $request->phone, 'email' => $request->email, 'subject' => $request->subject, 'user_message' => $request->message],
                function ($message) use ($to, $email, $name, $subject) {
                    $message->from($email, $name);
                    $message->to($to)->subject($subject);
                });
            return response()->json(['status' => 'success', 'message' => 'Your Query Successfully Sended!']);

        } catch (\Exception $e) {
            // return $e;
            return response()->json(['status' => 'error', 'message' => 'Something Went Wrong !' . $e->errorInfo[2]]);
        }

    }

}
