<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Contact;

class ContactFormTest extends TestCase
{

    public function test_submit_form_with_all_fields_stores_data_and_returns_session_data()
    {
      $response = $this->json( 'POST', route('contact-submit'), [
        '_token'    => csrf_token(),
        'name'      => 'Test User',
        'email'     => 'testuser@example.com',
        'telephone' => '555-555-5555',
        'message'   => 'This is a test message',
      ]);

      $response
        ->assertStatus(302)
        ->assertSessionHas('message', 'success');

      $contact = new Contact();

      $contact = $contact->orderBy('id', 'desc')->first();

      $this->assertEquals($contact->full_name, 'Test User');
      $this->assertEquals($contact->email, 'testuser@example.com');
      $this->assertEquals($contact->telephone, '555-555-5555');
      $this->assertEquals($contact->message, 'This is a test message');

      $contact->delete();
    }

    public function test_submit_form_with_missing_data_returns_unprocessable_entity()
    {
      $response = $this->json( 'POST', route('contact-submit'), [
        '_token'    => csrf_token(),
        'name'      => 'Test User',
        'email'     => null,
        'telephone' => '555-555-5555',
        'message'   => 'This is a test message',
      ]);

      $response
        ->assertStatus(422);

    }

}
