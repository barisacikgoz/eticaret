@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sayfa Güncelleniyor.</h4>
                    <form action="{{ route('admin.page.update', $page->id) }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Sayfa Adı</label>
                            <input type="text" class="form-control" name="page_name" value="{{ $page->page_name }}">
                        </div>
                        <div class="form-group">
                            <label>Sayfa Açıklaması</label>
                            <textarea class="form-control" rows="20"  name="page_description" id="pageDescription">{{ $page->page_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" name="page_meta_title" value="{{ $page->page_meta_title }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" class="form-control" name="page_meta_description" value="{{ $page->page_meta_description }}">
                        </div>
                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" name="page_meta_keywords" value="{{ $page->page_meta_keywords }}">
                        </div>

                        <div class="form-group">
                            <label>Sayfa Logosu</label><br>
                            <img src="{{url($page->page_image)}}" width="180px" class="mb-2">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" name="page_image" required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <select class="form-control" name="page_status" required>
                                <option @if($page->page_status == 1) selected @endif value="1">Aktif</option>
                                <option @if($page->page_status == 2) selected @endif value="2">Pasif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Ekle</button>
                        <a href="{{ route('admin.page.index') }}" class="btn btn-light">İptal Et</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace( 'pageDescription' );
        })
    </script>
@endsection
