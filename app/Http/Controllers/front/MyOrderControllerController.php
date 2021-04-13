<?php

namespace App\Http\Controllers\front;

use App\Models\front\MyOrderController;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyOrderControllerController extends Controller
{

    public function index()
    {
        $orders =  Order::where('customer_id', \Auth::guard('customer')->id())->get();
        return view('front.orders.my_orders', compact('orders'));
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
