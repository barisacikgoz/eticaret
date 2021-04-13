<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::all();
        return view('back.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('back.brand.create');
    }

    public function store(Request $request)
    {
        $brand = $request->except('_token','brand_image');

        if ($request->hasFile('brand_image')){
            $brand['brand_image'] = $request->file("brand_image")->store("images");
        }
        $brand = Brand::create($brand);

        toastr()->success('Marka Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.brand.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('back.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = $request->except('_method', '_token', 'brand_image');
        if ($request->hasFile('brand_image')){
            $brand["brand_image"] = $request->file("brand_image")->store("images");
        }
        Brand::where('id', $id)->update($brand);

        toastr()->success('Marka Güncelleme İşlemi Başarılı.');
        return redirect()->route('admin.brand.index');
    }

    public function destroy($id)
    {
        $brand = Brand::where('id', $id);
        $brand->delete();

        toastr()->success('Marka Silme İşlemi Başarıyla Gerçekleşti.');
        return redirect()->back();
    }
}
