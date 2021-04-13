@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Logonuzu Güncelleyin<br><hr class="bg-danger float-left" style="width: 350px;"></h3>
                    <form action="{{ route('admin.logo.update', $logo->id) }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-5">
                            <img src="{{ url($logo->settings_logo) }}" width="300px" class="mb-3">
                            <input type="file" class="form-control" name="settings_logo" required>
                        </div>
                        <a href="{{ route('admin.logo.index') }}" class="btn btn-danger float-right">İptal Et</a>
                        <button type="submit" class="btn btn-primary mr-2 float-right" onclick="showSwal('success-message')">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
