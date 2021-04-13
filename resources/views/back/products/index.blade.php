@extends('back.layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <div class="btn-group btn-space float-right">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        <a href="#" class="btn btn-light btn-sm float-right">Sil</a>
                    </div>

                    <div class="btn-group btn-space float-right">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                        <a href="{{ route('admin.product.create') }}" class="btn btn-light btn-sm float-right mr-2">Yeni Ekle</a>
                    </div>
                    <h3>Ürünler</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                <tr>
                                    <th>Ürün Kodu</th>
                                    <th>Ürün Adı</th>
                                    <th>Ürün Fiyatı</th>
                                    <th>Stok</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->product_stock_code }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>{{ $product->product_stock }}</td>
                                        <td>
                                            @if($product->product_status == 1)
                                                <span class="badge badge-success">Aktif</span>
                                            @else
                                                <span class="badge badge-danger">Pasif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-primary mr-2 float-left" title="Düzenle"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger delete-btn-alert" title="Sil" onclick="showSwal('success-message')"><i class="fa fa-trash"></i></button>
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
    </div>
@endsection

@section('js')
    <script>
        // function XmlDocument(){
        //     var xhttp = new XMLHttpRequest();
        //     xhttp.onreadystatechange = function (){
        //         if (this.readyState == 4 && this.status == 200){
        //
        //         }
        //     };
        //     xhttp.send();
        // }
    </script>
@endsection
