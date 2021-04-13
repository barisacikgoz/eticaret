<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{

    public function index()
    {
        $logo = Logo::all()->first();
        return view('back.settings.logo.index', compact('logo'));
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
        $logo = $request->except('_method', '_token', 'settings_logo');
        if ($request->hasFile('settings_logo')){
            $logo['settings_logo'] = $request->file('settings_logo')->store('images');
        }
        Logo::where('id', $id)->update($logo);

        toastr()->success('Logonuz Başarıyla Güncellendi.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
