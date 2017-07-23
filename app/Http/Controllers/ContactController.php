<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use Validator;

use App\Contact;

use Log;

class ContactController extends Controller
{

    public function submit(Request $request)
    {

      $messages = [
        'required' => 'The :attribute field is required.',
        'email'    => 'You must enter a valid email for the :attribute field.',
        'max'      => 'The :attribute field must contain less data',
      ];

      $validator = Validator::make($request->all(), [
          'name'      => 'required|max:120',
          'email'     => 'required|email|max:255',
          'telephone' => 'nullable|max:30',
          'message'   => 'required',
      ], $messages)->validate();

      $this->store($request->all());

      $this->notifyAdmin($request->all());

      return redirect('/')->with([
        'message' => 'success'
      ]);
    }

    private function store( $contactData )
    {
      $contact = new Contact;

      $contact->full_name = $contactData['name'];
      $contact->email     = $contactData['email'];
      $contact->telephone = $contactData['telephone'];
      $contact->message   = $contactData['message'];

      return $contact->save();
    }

    private function notifyAdmin( $contactData )
    {
      return Mail::to('guy-smiley@example.com')
        ->send(new ContactForm($contactData));
    }

}
