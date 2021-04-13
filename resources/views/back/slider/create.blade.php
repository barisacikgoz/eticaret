@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yeni Slider Ekle</h4>
                    <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label>Slider Adı</label>
                            <input type="text" class="form-control" name="slider_name" required>
                        </div>

                        <div class="form-group">
                            <label>Slider Link</label>
                            <input type="text" class="form-control" name="slider_link" required>
                        </div>

                        <div class="form-group">
                            <label>Slider Görsel</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" name="slider_image" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Durum</label>
                            <select class="form-control" name="slider_status" required>
                                <option value="1">Aktif</option>
                                <option value="2">Pasif</option>
                            </select>
                        </div>
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-light float-right">İptal Et</a>
                        <button type="submit" class="btn btn-primary mr-2 float-right">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
