<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('back.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('back.products.create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        $data = $request->except("_token","product_image");
        if ($request->hasFile('product_image')) {
            $data["product_image"] = $request->file("product_image")->store("images");
        }
        $product = Product::create($data);

        toastr()->success('Ürün Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('back.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $update = $request->except('_method', '_token', 'product_image');
        if ($request->hasFile('product_image')){
            $update["product_image"] = $request->file("product_image")->store("images");
        }
        Product::where('id', $id)->update($update);

        toastr()->success('Ürün Güncelleme İşlemi Başarılı.');
        return redirect()->route('admin.product.index');
    }

    public function destroy($id)
    {
        $product_delete = Product::find($id);
        $product_delete->delete();

        toastr()->success('Ürün Silme İşlemi Başarılı.');
        return redirect()->back();
    }
}
