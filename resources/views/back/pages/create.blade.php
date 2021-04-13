@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yeni Sayfa Ekle</h4>
                    <form action="{{ route('admin.page.store') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label>Sayfa Adı</label>
                            <input type="text" class="form-control" name="page_name">
                        </div>
                        <div class="form-group">
                            <label>Sayfa Açıklaması</label>
                            <textarea class="form-control editor-size" id="pageDescription" name="page_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Meta Title</label>
                            <input type="text" class="form-control" name="page_meta_title">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" class="form-control" name="page_meta_description">
                        </div>
                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" name="page_meta_keywords">
                        </div>

                        <div class="form-group">
                            <label>Sayfa Logosu</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" name="page_image" required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <select class="form-control" name="page_status" required>
                                <option value="1">Aktif</option>
                                <option value="2">Pasif</option>
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
