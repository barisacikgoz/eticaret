<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        $products = \App\Models\Product::all();
        $sliders = \App\Models\Slider::all();
        $banners = \App\Models\Banner::all();
        $baskets = \App\Models\Basket::all();
        return view('front.index', compact('products', 'sliders', 'banners', 'baskets'));
    }

    public function shop(Request $request)
    {
        $query = Product::query();

        if ($request->filled("search")){
            $search = $request->input("search");
            $query->where(function (Builder $builder) use ($search){
                $builder->where("product_name","like","%$search%")
                    ->orWhere("product_description","like","%$search%")
                    ->orWhere("product_brand","like","%$search%")
                    ->orWhere("product_stock_code","like","%$search%");
            });
        }
        if ($request->filled("min_price")){
            $query->where("price" ,"<=",$request->input("min_price"));
        }
        $products = $query->get();
        return view('front.shop.index', compact('products'));
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
