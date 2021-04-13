<?php

namespace App\Http\Controllers\back;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('back.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('back.pages.create');
    }

    public function store(Request $request)
    {
        $pages = $request->except('_token', 'page_image');
        $pages['page_name_slug']= \Str::slug($request->post('page_name'));
        if ($request->hasFile('page_image')){
            $pages['page_image'] = $request->file('page_image')->store('images');
        }

        $pages = Page::create($pages);
        toastr()->success('Sayfa Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.page.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $page = Page::find($id);
        return view('back.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = $request->except('_token', '_method', 'page_image');

        if ($request->hasFile('page_image')){
            $page['page_image'] = $request->file('page_image')->store('images');
        }
        Page::where('id', $id)->update($page);

        toastr()->success('Güncelleme İşlemi Başarıyla Gerçekleşti.');
        return redirect()->route('admin.page.index');
    }

    public function destroy($id)
    {
        $page = Page::where('id', $id);
        $page->delete();

       toastr()->success('Sayfa Silme İşlemi Başarılı.');
       return redirect()->back();
    }
}
