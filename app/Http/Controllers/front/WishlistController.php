<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function index()
    {
        $data["products"] = Wishlist::where("customer_id", \Auth::guard("customer")->id())->get();
        return view('front.wishlist.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $id = $request->post('product_id');
        $product = Product::find($id);

        $wishlist = new Wishlist();
        $wishlist->product_id = $id;
        $wishlist->customer_id = \Auth::guard('customer')->id();
        $wishlist->save();

        $wishlist_count = Wishlist::where('customer_id', \Auth::guard('customer')->id())->count();
        return response()->json(['wishlist_count' => $wishlist_count], 200);
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
        $data = Wishlist::find($id);
        $data->delete();

        return redirect()->back();
    }
}
