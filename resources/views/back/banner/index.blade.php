@extends('back.layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="btn-group btn-space float-right">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        <a href="#" class="btn btn-light btn-sm float-right">Sil</a>
                    </div>

                    <div class="btn-group btn-space float-right">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
                        <a href="{{ route('admin.banner.create') }}" class="btn btn-light btn-sm float-right mr-2">Yeni Ekle</a>
                    </div>
                    <h3>Banner Yönetimi</h3>
                    <p class="card-description">Add class <code>.table-striped</code> for table</p>
                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">
                            <table id="sortable-table-2" class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="sortStyle">Banner Adı<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">Banner Resmi<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">Durum<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">İşlemler<i class="ti-angle-down"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banners as $banner)
                                    <tr>
                                        <td>{{ $banner->banner_name }}</td>
                                        <td>
                                            <img src="{{ url( $banner->banner_image) }}" width="120px">
                                        </td>
                                        <td>
                                            @if($banner->banner_status == 1)
                                                <span class="badge badge-success">Aktif</span>
                                            @else
                                                <span class="badge badge-danger">Pasif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn btn-sm btn-primary mr-2 float-left" title="Düzenle"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('admin.banner.destroy', $banner->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger delete-btn-alert" title="Sil"  onclick="showSwal('success-message')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
