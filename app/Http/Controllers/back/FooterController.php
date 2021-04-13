<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function index()
    {
        $footer_logo = Footer::all()->first();
        return view('back.settings.footer_logo.index', compact('footer_logo'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       //
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
        $footer_logo = $request->except('_method', '_token', 'settings_footer_logo');
        if ($request->hasFile('settings_footer_logo')){
            $footer_logo['settings_footer_logo'] = $request->file('settings_footer_logo')->store('images');
        }
        Footer::where('id', $id)->update($footer_logo);

        toastr()->success('Logonuz Başarıyla Güncellendi.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
