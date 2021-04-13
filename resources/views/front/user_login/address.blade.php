@extends('front.layouts.master')
@section('title')
    <title>Adreslerim</title>
@endsection
@section('front.content')
    <div class="container">
        <div class="main-body">

            <a href="{{ route('user.logout') }}" class="btn btn-sm btn-hover-dark btn-danger" style="float: right;"><i class="fa fa-sign-out">&nbsp<b>Çıkış Yap</b></i></a>
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->first_name. ' ' .$user->last_name}}</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">{{ $user->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3" style="float: left">
                                    <div class="card">
                                        <button type="button" class="btn btn-outline-twitter" id="AddNewAddressBtn">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center" style="margin: 104px 0 104px 0">
                                                    <span>[<i class="fa fa-plus"></i>]</span><br>
                                                    <p>Yeni teslimat adresi ekle</p>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>

                                <div class="row col-8" id="add_address" style="display: none; float: right">
                                    <div class="col-12 col-lg-12 mb-10">
                                        <div class="contact-form-wrapper contact-form">
                                            <form action="{{ route('address.store') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                                                                <div class="input-item mb-4">
                                                                    <input class="input-item" type="text" placeholder="Address Title *" name="title" maxlength="15" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                                                <div class="input-item mb-4">
                                                                    <input class="input-item" type="text" placeholder="City *" name="city" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                                                <div class="input-item mb-4">
                                                                    <input class="input-item" type="text" placeholder="District *" name="district" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                                                <div class="input-item mb-4">
                                                                    <input class="input-item" type="text" placeholder="PostCode *" name="post_code" minlength="5" maxlength="5" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                                                <div class="input-item mb-4">
                                                                    <textarea class="input-item" placeholder="address *" name="address" minlength="40" required></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                                                                <button type="button" class="btn btn-danger btn-hover-dark rounded-0" id="cancelDelete">İptal</button>
                                                                <button type="submit" class="btn btn-dark btn-hover-primary rounded-0">Ekle</button>
                                                            </div>
                                                            <p class="col-8 form-message mb-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                @foreach($addresses as $address)
                                    <div class="col-md-4 mb-3" id="deleteAddressColumn">
                                        <div class="card">
                                            <div class="card-header">
                                                <p style="font-size: 20px">{{ $address->title }}</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="align-items-center text-center">
                                                    <div class="mt-3">
                                                        <p style="float: left">{{ $user->first_name. ' ' .$user->last_name}}</p><br><br>

                                                        <p>{{ substr($address->address, 0, 50) }}</p>
                                                    </div>
                                                    <br>
                                                </div>
                                                <button class="btn btn-sm btn-edit mt-2" style="float: right; background-color: orange">Düzenle</button>
                                                <button class="btn btn-sm btn-hover-danger btn-edit mt-2 delete_address" data-id="{{ $address->id }}" style="float: right; margin-right: 4px">Sil</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
