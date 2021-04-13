<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $baskets = Basket::where("customer_id", auth()->guard("customer")->id())->get();
        $basket_total_price["subTotal"] = $baskets->sum(function ($item) {
            return $item->product->product_price * $item->quantity;
        });
        $basket_total_price["tax"] = $basket_total_price['subTotal'] * 0.18;
        $basket_total_price["total"] = $basket_total_price['subTotal'] * 1.18;

        $order = new Order();
        $order->customer_id = Auth()->guard('customer')->id();
        $order->total_price = $basket_total_price["total"];
        $order->save();

        $baskets = Basket::where('customer_id', Auth()->guard('customer')->id())->get();
        foreach ($baskets as $basket) {
            $order_product['order_id'] = $order->id;
            $order_product['product_id'] = $basket->product_id;
            $order_product['quantity'] = $basket->quantity;
            $order_product['price'] = $order->total_price;
            OrderProduct::create($order_product);
        }
        $delete = Basket::where('customer_id', Auth()->guard('customer')->id());
        $delete->delete();

        $all_price = Order::where('customer_id', Auth()->guard('customer')->id())->sum('total_price');
        $data = Order::where('customer_id', Auth()->guard('customer')->id())->get();
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
