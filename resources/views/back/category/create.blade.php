@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yeni Kategori Ekle</h4>
                    <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Kategori Adı</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="category_name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kategori Açıklaması</label>
                            <textarea class="form-control" rows="20" id="exampleInputEmail3" name="category_description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Meta Title</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="category_meta_title" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Meta Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="category_meta_description" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Meta Keywords</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="category_meta_keywords" required>
                        </div>

                        <div class="form-group">
                            <label>Kategori Resmi</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" name="category_image" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Kategori Tipi</label>
                            <select class="js-example-basic-single w-100 form-control" name="category_type" required>
                                <option value="AL">spor</option>
                                <option value="WY">kayak</option>
                                <option value="AM">yüzme</option>
                                <option value="AM">yüzme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category_status" required>
                                <option value="1">Aktif</option>
                                <option value="2">Pasif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Ekle</button>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-light">İptal Et</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
