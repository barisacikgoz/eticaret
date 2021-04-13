@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data" class="form-sample">
                        @csrf
                        <p class="card-description">
                            Personal info
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ürün Adı</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="product_name" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ürün Açıklaması</label>
                                    <div class="col-sm-9">
                                        <textarea name="product_description" class="form-control" cols="30" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Stok Kodu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="product_stock_code" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Stok Miktarı</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" min="1" name="product_stock" value="1" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Durum</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="product_status" required>
                                            <option value="">-- Seç --</option>
                                            <option value="1">Aktif</option>
                                            <option value="2">Pasif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Marka</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100 form-control" name="product_brand">
                                            <option value="">-- Seç --</option>
                                        @foreach($brands as $brand)
                                                <option value="{{ $brand->brand_name }}">{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kapak Resmi</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="product_image" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100 form-control" name="product_category" multiple="multiple">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Yeni Fiyatı</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="00.00" name="product_price" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Eski Fiyat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="00.00" name="product_old_price" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KDV Oranı</label>
                                    <div class="col-sm-9">
                                        <select name="product_kdv" class="form-control" required>
                                            <option value="">-- Seç --</option>
                                            <option value="%18">%18</option>
                                            <option value="%10">%10</option>
                                            <option value="%8">%8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger float-right">Sil</a>
                        <button type="submit" class="btn btn-primary float-right mr-2">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
