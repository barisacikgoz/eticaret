@extends('front.layouts.master')
@section('front.content')
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Wishlist</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Wishlist Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="wishlist-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-stock">Stock Status</th>
                                <th class="pro-cart">Add to Cart</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ url($product->product->product_image) }}" width="100" height="100" alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">{{ $product->product->product_name }}</a></td>
                                    <td class="pro-price"><span>$ {{ $product->product->product_price }}</span></td>
                                    <td class="pro-stock"><span>{{ $product->product->product_stock > 0 ? "In Stock" :  "Stok Yok" }}</span></td>
                                    <td class="pro-cart">
                                        <a href="{{ route('basket.store') }}" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a>
                                    </td>
                                    <td class="pro-remove">
                                        <form action="{{ route('wishlist.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-hover-danger" onclick="showSwal('success-message')"><i class="fa fa-2x fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
