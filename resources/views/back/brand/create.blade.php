@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yeni Marka Ekle</h4>
                    <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Marka Adı</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="brand_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Marka Açıklaması</label>
                            <textarea class="form-control" rows="20" id="exampleInputEmail3" name="brand_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Meta Title</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="brand_meta_title">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Meta Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="brand_meta_description">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Meta Keywords</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="brand_meta_keywords">
                        </div>

                        <div class="form-group">
                            <label>Marka Logosu</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" name="brand_image" required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <select class="form-control" name="brand_status" required>
                                <option value="1">Aktif</option>
                                <option value="2">Pasif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Ekle</button>
                        <a href="{{ route('admin.brand.index') }}" class="btn btn-light">İptal Et</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
