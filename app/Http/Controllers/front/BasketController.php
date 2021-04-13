<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Wishlist;
use http\Env\Response;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function index()
    {
        $baskets = \Auth::guard('customer')->user()->baskets();
        return view('front.basket.index');
    }

    public function quantityData(Request $request)
    {
        $id = $request->post("basket_id");
        $basket = Basket::find($id);
        $basket->quantity = $request->post('quantity');
        $simple_total_price = $basket->quantity * $request->post('price');
        $basket->update();

        $baskets = Basket::where("customer_id", auth()->guard("customer")->id())->get();

        $basket_total_price["subTotal"] = $baskets->sum(function ($item) {
            return $item->product->product_price * $item->quantity;
        });
        $basket_total_price["tax"] = $basket_total_price['subTotal'] * 0.18;
        $basket_total_price["total"] = $basket_total_price['subTotal'] * 1.18;

        if (empty($quantity) and $basket->quantity == null and $basket->quantity <= 1) {
            return response()->json(["status" => 'error']);
        } else {
            return response()->json(["status" => 'success', 'total_price' => $simple_total_price, 'basket_id' => $basket->id, 'basket_total' => $basket_total_price]);
        }
    }

    public function basketDelete(Request $request)
    {
        $id = $request->post('product_id');
        $basket_column = Basket::find($id);
        $basket_column->delete();

        $baskets = Basket::where("customer_id", auth()->guard("customer")->id())->get();

        $basket_total_price["subTotal"] = $baskets->sum(function ($item) {
            return $item->product->product_price * $item->quantity;
        });
        $basket_total_price["tax"] = $basket_total_price['subTotal'] * 0.18;
        $basket_total_price["total"] = $basket_total_price['subTotal'] * 1.18;

        $basket_count = Basket::where('customer_id', \Auth::guard('customer')->id())->count();
        return response()->json(['basket_total_price' => $basket_total_price, "basket_count" => $basket_count]);
    }

    public function deleteCart(Request $request)
    {
        $id = $request->post('product_id');
        $data = Basket::where('product_id', $id);
        $data->delete();

        $baskets = Basket::where("customer_id", auth()->guard("customer")->id())->get();

        $basket_total_price["subTotal"] = $baskets->sum(function ($item) {
            return $item->product->product_price * $item->quantity;
        });
        $basket_total_price["tax"] = $basket_total_price['subTotal'] * 0.18;
        $basket_total_price["total"] = $basket_total_price['subTotal'] * 1.18;

        $basket_count = Basket::where('customer_id', \Auth::guard('customer')->id())->count();
        return response()->json(["basket_count" => $basket_count, "basket_total_price" => $basket_total_price]);
    }

    public function store(Request $request)
    {
        $id = $request->post("product_id");
        $product = Product::find($id);

        $basket = new Basket();
        $basket->customer_id = \Auth::guard('customer')->id();
        $basket->product_id = $id;
        $basket->save();


        $basket_count = Basket::where('customer_id', \Auth::guard('customer')->id())->count();
        $baskets = Basket::where('customer_id', \Auth::guard('customer')->id())->get();

        $basket_total_price["subTotal"] = $baskets->sum(function ($item) {
            return $item->product->product_price * $item->quantity;
        });
        $basket_total_price["tax"] = $basket_total_price['subTotal'] * 0.18;
        $basket_total_price["total"] = $basket_total_price['subTotal'] * 1.18;

        $basket_view = view('front.components.cart_canvas', ["baskets" => $baskets])->render();

        $product = Product::find($id);

        return response()->json(["basket_count" => $basket_count, "basket_view" => $basket_view, "filter_id" => $basket->product_id, "status" => 'success', "basket_total_price" => $basket_total_price]);
    }

    public function show($id)
    {
        //
    }
}
