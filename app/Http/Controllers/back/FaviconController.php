<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Favicon;
use Illuminate\Http\Request;

class FaviconController extends Controller
{

    public function index()
    {
        $favicon = Favicon::all()->first();
        return view('back.settings.favicon.index', compact('favicon'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Favicon $favicon)
    {
        //
    }

    public function edit(Favicon $favicon)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $favicon = $request->except('_method', '_token', 'settings_favicon');
        if ($request->hasFile('settings_favicon')){
            $favicon['settings_favicon'] = $request->file('settings_favicon')->store('images');
        }
        Favicon::where('id', $id)->update($favicon);

        toastr()->success('Favicon Başarıyla Güncellendi.');
        return redirect()->back();
    }

    public function destroy(Favicon $favicon)
    {
        //
    }
}
