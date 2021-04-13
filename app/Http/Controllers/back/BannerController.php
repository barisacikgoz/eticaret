<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $banners = Banner::all();
        return view('back.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('back.banner.create');
    }

    public function store(Request $request)
    {
        $banners = $request->except('_token', 'banner_image');

        if ($request->hasFile('banner_image')){
            $banners['banner_image'] = $request->file('banner_image')->store('images');
        }
        Banner::create($banners);

        toastr()->success('Banner Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.banner.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('back.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = $request->except('_method', '_token', 'banner_image');
        if ($request->hasFile('banner_image')){
            $banner["banner_image"] = $request->file("banner_image")->store("images");
        }
        Banner::where('id', $id)->update($banner);

        toastr()->success('Banner Güncelleme İşlemi Başarılı.');
        return redirect()->route('admin.banner.index');
    }

    public function destroy($id)
    {
        $banner = Banner::where('id', $id);
        $banner->delete();

        toastr()->success('Banner Silme İşlemi Başarıyla Gerçekleşti.');
        return redirect()->back();
    }
}
