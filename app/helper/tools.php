<?php

use App\Models\Basket;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Wishlist;

function basket_count()
{
    return Basket::where('customer_id', \Auth::guard('customer')->id())->count();
}

function wishlist_count()
{
    return Wishlist::where('customer_id', \Auth::guard('customer')->id())->count();
}

function contact_data()
{
    return Contact::find(1);
}

function pages()
{
    return Page::all();
}

function brands()
{
    return Brand::all();
}

function logo()
{
    return \App\Models\Logo::find(1);
}

function addresses()
{
    return \App\Models\CustomerAddress::where('customer_id', Auth::guard('customer')->id())->get();
}

function myOrders(){
    return \App\Models\Order::where('customer_id', Auth::guard('customer')->id())->get();
}

function order_count()
{
    return \App\Models\Order::where('customer_id', \Auth::guard('customer')->id())->count();
}

function getCategory()
{
    return \App\Models\Category::all();
}
