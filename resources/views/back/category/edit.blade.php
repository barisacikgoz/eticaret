@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kategoriyi Güncelle</h4>
                    <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">Kategori Adı</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="category_name" value="{{ $category->category_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kategori Açıklaması</label>
                            <textarea class="form-control" rows="20" id="exampleInputEmail3" name="category_description">{{ $category->category_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Meta Title</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="category_meta_title" value="{{ $category->category_meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Meta Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="category_meta_description" value="{{ $category->category_meta_description }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Meta Keywords</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="category_meta_keywords" value="{{ $category->category_meta_keywords }}">
                        </div>

                        <div class="form-group">
                            <label>Kategori Resmi</label><br>
                            <img src="{{ url($category->category_image) }}" width="180px" class="mb-2">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" name="category_image" value="{{ $category->category_image }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <select class="js-example-basic-single w-100 form-control" name="category_type">
                                <option value="AL">spor</option>
                                <option value="WY">kayak</option>
                                <option value="AM">yüzme</option>
                                <option value="AM">yüzme</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category_status" required>
                                <option @if($category->category_status == 1) selected @endif value="1">Aktif</option>
                                <option @if($category->category_status == 2) selected @endif value="2">Pasif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Güncelle</button>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-light">İptal Et</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
