@extends('front.layouts.master')
@section('title')
    <title>Profil</title>
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
                    <div class="col-lg-12 col-md-4">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#myProfile" data-bs-toggle="tab"><i class="fa fa-user"></i> Profil</a>
                            <a href="#myOrders" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Siparişlerim</a>
                            <a href="#myAddress" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> Adreslerim</a>
                            <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Ödeme Yöntemlerim</a>
                            <a href="#myAccountDetail" data-bs-toggle="tab"><i class="fa fa-user"></i> Hesap Detayları</a>
                            <a href="{{ route('user.logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8" style="float: right">
                    <div class="tab-content" id="myaccountContent">

                        <!-- PROFİLİM -->
                        <div class="tab-pane fade show active" id="myProfile" role="tabpanel">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"><b>İsim</b></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->first_name. ' ' .$user->last_name}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"><b>Email</b></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"><b>Telefon</b></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->phone }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"><b>Telefon 2</b></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->phone }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"><b>Adres</b></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->address }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3">Project Status</h6>
                                            <small>Toplam Sipariş Oranı</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Website Markup</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>One Page</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Mobile Template</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Backend API</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3">Project Status</h6>
                                            <small>Web Design</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Website Markup</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>One Page</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Mobile Template</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small>Backend API</small>
                                            <div class="progress mb-3" style="height: 5px">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SİPARİŞLERİM -->
                        <div class="tab-pane fade" id="myOrders" role="tabpanel">
                            <div class="myaccount-content">
                                <h3 class="title">Siparişler</h3>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Sipariş No</th>
                                            <th>Tarih</th>
                                            <th>Toplam Fiyat</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(myOrders() as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>${{ $order->total_price }}</td>
                                                <td>
                                                    <button type="button" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0" data-toggle="modal" data-target=".bd-example-modal-lg">Görüntüle</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @if(order_count() < 1)
                                        <p class="saved-message">Siparişiniz Bulunmamakta.</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- ÖDEME METHODLARIM -->
                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                            <div class="myaccount-content">
                                <h3 class="title">Payment Method</h3>
                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                            </div>
                        </div>

                        <!-- ADRESLERİM -->
                        <div class="tab-pane fade" id="myAddress" role="tabpanel">
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
                                                                            <textarea class="input-item" placeholder="address *" name="address" minlength="40" style="height: 131px !important;" required></textarea>
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

                                        @foreach(addresses() as $address)
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

                        <!-- HESAP DETAYI -->
                        <div class="tab-pane fade" id="myAccountDetail" role="tabpanel">
                            <div class="myaccount-content">
                                <h3 class="title">Hesap Detayları</h3>
                                <div class="account-details-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-input-item mb-3">
                                                    <label for="first-name" class="required mb-1">İsim</label>
                                                    <input type="text" id="first-name" placeholder="İsim" value="{{ Auth::guard('customer')->user()->first_name }}"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-input-item mb-3">
                                                    <label for="last-name" class="required mb-1">Soyisim</label>
                                                    <input type="text" id="last-name" placeholder="Soyisim" value="{{ Auth::guard('customer')->user()->last_name }}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-input-item mb-3">
                                            <label for="email" class="required mb-1">Email</label>
                                            <input type="email" id="email" placeholder="Email Adresi" value="{{ Auth::guard('customer')->user()->email }}"/>
                                        </div>
                                        <fieldset>
                                            <legend>Şifre Değişikliği</legend>
                                            <div class="single-input-item mb-3">
                                                <label for="current-pwd" class="required mb-1">Mevcut Şifre</label>
                                                <input type="password" id="current-pwd" placeholder="Mevcut Şifre"/>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item mb-3">
                                                        <label for="new-pwd" class="required mb-1">Yeni Şifre</label>
                                                        <input type="password" id="new-pwd" placeholder="Yeni Şifre"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item mb-3">
                                                        <label for="confirm-pwd" class="required mb-1">Şifre Doğrulama</label>
                                                        <input type="password" id="confirm-pwd" placeholder="Şifre Doğrulama"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="single-input-item single-item-button">
                                            <button class="btn btn btn-dark btn-hover-primary rounded-0">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="hideOrders" style="display: block" role="tabpanel">
                    <div class="myaccount-content">
                        <h3 class="title">Orders</h3>
                        <div class="myaccount-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aug 22, 2018</td>
                                    <td>Pending</td>
                                    <td>$3000</td>
                                    <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>July 22, 2018</td>
                                    <td>Approved</td>
                                    <td>$200</td>
                                    <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>June 12, 2019</td>
                                    <td>On Hold</td>
                                    <td>$990</td>
                                    <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- MODAL -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            ...
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function () {
            $('#AddNewAddressBtn').on('click', function (e) {
                e.preventDefault();
                $('#add_address').css("display", "block");

            });

            $('#cancelDelete').on('click', function (e) {
                e.preventDefault();
                $('#add_address').css("display", "none");
            });

            $(document).on('click', '.delete_address', function (e) {
                e.preventDefault();
                let action = "{{ route('user.address.delete') }}";
                let id = $(this).attr('data-id');
                $.post(action, {_token: token, address_id: id,}, function (data) {

                    $(e.target).parents("#deleteAddressColumn").remove();
                    toastr.success("Teslimat adresiniz silindi.", "BAŞARILI");
                });
            });

        });
    </script>
@endsection

