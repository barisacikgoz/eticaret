@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Banner Güncelleniyor.</h4>
                    <form action="{{ route('admin.banner.update', $banner->id) }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Slider Adı</label>
                            <input type="text" class="form-control" name="banner_name" value="{{ $banner->banner_name }}">
                        </div>

                        <div class="form-group">
                            <label>Slider Link</label>
                            <input type="text" class="form-control" name="banner_link" value="{{ $banner->banner_link }}">
                        </div>

                        <div class="form-group">
                            <label>Slider Görsel</label><br>
                            <img src="{{ url($banner->banner_image) }}" width="180px" class="mb-2">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" name="banner_image"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Durum</label>
                            <select class="form-control" name="banner_status">
                                <option @if($banner->banner_status == 1) selected @endif value="1">Aktif</option>
                                <option @if($banner->banner_status == 2) selected @endif value="2">Pasif</option>
                            </select>
                        </div>
                        <a href="{{ route('admin.banner.index') }}" class="btn btn-light float-right">İptal Et</a>
                        <button type="submit" class="btn btn-primary mr-2 float-right">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
