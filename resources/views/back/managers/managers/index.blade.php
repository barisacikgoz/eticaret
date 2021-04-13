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
                        <a href="{{ route('admin.manager.create') }}" class="btn btn-light btn-sm float-right mr-2">Yeni Ekle</a>
                    </div>
                    <h3>Yöneticiler</h3>
                    <p class="card-description">Add class <code>.table-striped</code> for table</p>
                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">
                            <table id="sortable-table-2" class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="sortStyle">Ad<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">Soyad<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">Kullanıcı Adı<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">Yetki<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">Durum<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle">İşlemler<i class="ti-angle-down"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($managers as $manager)
                                    <tr>
                                        <td>{{ $manager->manager_name }}</td>
                                        <td>{{ $manager->manager_surname }}</td>
                                        <td>{{ $manager->manager_user_name }}</td>
                                        <td>
                                            @if($manager->manager_authority == 1)
                                                <span>Tam Yetkili</span>
                                            @else
                                                <span>Kısıtlı</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($loop->first)
                                                <span class="badge badge-outline-danger">Admin</span>
                                            @elseif($manager->manager_status == 1)
                                                <span class="badge badge-success">Aktif</span>
                                            @elseif($manager->manager_status == 2)
                                                <span class="badge badge-danger">Pasif</span>
                                            @endif
                                        </td>
                                        <td>

                                            @if($loop->first)
                                                <span class="badge badge-outline-danger mt-1">Admin Silinemez<br>ve<br>Düzenlenemez</span>
                                            @endif

                                            @if(!$loop->first)
                                                <a href="{{ route('admin.manager.edit', $manager->id) }}" class="btn btn-sm btn-primary mr-2 float-left" title="Düzenle"><i class="fa fa-edit"></i></a>

                                                <form action="{{ route('admin.manager.destroy', $manager->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger delete-btn-alert" title="Sil" onclick="showSwal('success-message')"><i class="fa fa-trash"></i></button>
                                                </form>
                                            @endif

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
