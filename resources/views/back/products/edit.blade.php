@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data" class="form-sample">
                        @csrf
                        @method('PUT')
                        <p class="card-description">
                            Personal info
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ürün Adı</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ürün Açıklaması</label>
                                    <div class="col-sm-9">
                                        <textarea name="product_description" class="form-control" cols="30" rows="5">{{ $product->product_description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Stok Kodu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="product_stock_code" value="{{ $product->product_stock_code }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Stok Miktarı</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="product_stock" value="{{ $product->product_stock }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Durum</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="product_status">
                                            <option value="1" @if($product->product_status == 1) selected @endif>Aktif</option>
                                            <option value="2" @if($product->product_status == 2) selected @endif>Pasif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Marka</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $product->product_brand }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kapak Resmi</label>
                                    <div class="col-sm-9">
                                        <img src="{{ url($product->product_image) }}" class="img- mb-2" width="180px">
                                        <input type="file" class="form-control" name="product_image"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $product->product_category }}"/>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Yeni Fiyatı</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="product_price" value="{{ $product->product_price }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Eski Fiyat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="00.00" name="product_old_price" value="{{ $product->product_old_price }}" required/>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KDV Oranı</label>
                                    <div class="col-sm-9">
                                        <select name="product_kdv" class="form-control">
                                            <option @if($product->product_kdv == '%18') selected @endif value="%18">%18</option>
                                            <option @if($product->product_kdv == '%10') selected @endif value="%10">%10</option>
                                            <option @if($product->product_kdv == '%8') selected @endif value="%8">%8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger float-right">Sil</a>
                        <button type="submit" class="btn btn-primary float-right mr-2">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
