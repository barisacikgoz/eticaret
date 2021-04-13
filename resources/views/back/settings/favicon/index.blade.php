@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Favicon<br><hr class="bg-danger float-left" style="width: 200px;"></h3>
                    <form action="{{ route('admin.favicon.update', $favicon->id) }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-5">
                            <img src="{{ url($favicon->settings_favicon) }}" width="300px" class="mb-3">
                            <input type="file" class="form-control" name="settings_favicon" required>
                        </div>
                        <a href="{{ route('admin.footer.index') }}" class="btn btn-danger float-right">İptal Et</a>
                        <button type="submit" class="btn btn-primary mr-2 float-right" onclick="showSwal('success-message')">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
