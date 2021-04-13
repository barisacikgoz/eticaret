<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('back.category.index', compact('categories'));
    }

    public function create()
    {
        return view('back.category.create');
    }

    public function store(Request $request)
    {
        $categories = $request->except('_token', 'category_image');

        if ($request->hasFile('category_image')){
            $categories['category_image'] = $request->file("category_image")->store("images");
        }

        $categories = Category::create($categories);

        toastr()->success('Kategori Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.category.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('back.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = $request->except('_method', '_token', 'category_image');
        if ($request->hasFile('category_image')){
            $category["category_image"] = $request->file("category_image")->store("images");
        }
        Category::where('id', $id)->update($category);

        toastr()->success('Ürün Güncelleme İşlemi Başarılı.');
        return redirect()->route('admin.category.index');
    }

    public function destroy($id)
    {
        $category = Category::where('id', $id);
        $category->delete();

        toastr()->success('Kategori Silme İşlemi Başarıyla Gerçekleşti.');
        return redirect()->back();
    }
}
