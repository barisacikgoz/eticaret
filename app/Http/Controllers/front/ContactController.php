<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactFront;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class ContactController extends Controller
{

    public function index()
    {
        return view('front.contact.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $contact = new ContactFront();
        $contact->name = $request->post('name');
        $contact->email = $request->post('email');
        $contact->subject = $request->post('subject');
        $contact->message = $request->post('message');

        if (empty($contact->name) or empty($contact->email) or empty($contact->subject)) {
            return response()->json(["status" => 'error']);
        } else {
            $contact->save();
            return response()->json(["status" => 'success',]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
