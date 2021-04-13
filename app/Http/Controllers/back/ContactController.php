<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('back.settings.contact.index', compact('contacts'));
    }

    public function create()
    {
        //
    }

    public function store($id)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update(Request $request, $id)
    {
        $contact = $request->except('_method', '_token');
        Contact::where('id', $id)->update($contact);

        toastr()->success('Ayarlarınız Başarıyla Güncellendi');
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
