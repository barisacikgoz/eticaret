@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yönetici Güncelleniyor</h4>
                    <form action="{{ route('admin.manager.update', $manager->id) }}" method="post" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Ad</label>
                            <input type="text" class="form-control" name="manager_name" value="{{ $manager->manager_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Soyad</label>
                            <input type="text" class="form-control" name="manager_surname" value="{{ $manager->manager_surname }}" required>
                        </div>
                        <div class="form-group">
                            <label>Kullanıcı Adı</label>
                            <input type="text" class="form-control" name="manager_user_name" value="{{ $manager->manager_user_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Şifre</label>
                            <input type="text" class="form-control" name="manager_password" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="manager_authority" required>
                                <option value="">-- Seç --</option>
                                <option @if($manager->manager_authority == 1) selected @endif value="1">Tam Yetkili</option>
                                <option @if($manager->manager_authority == 2) selected @endif value="2">Kısıtlı Kullanıcı</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="manager_status" required>
                                <option value="">-- Seç --</option>
                                <option @if($manager->manager_status == 1) selected @endif value="1">Aktif</option>
                                <option @if($manager->manager_status == 2) selected @endif value="2">Pasif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" onclick="showSwal('success-message')">Güncelle</button>
                        <a href="{{ route('admin.manager.index') }}" class="btn btn-light">İptal Et</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
