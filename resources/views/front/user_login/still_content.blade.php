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
                <a href="{{ route('user.profile') }}" data-bs-toggle="tab"><i class="fa fa-user"></i> Profil</a>
                <a href="{{ route('myOrders.index') }}" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Siparişlerim</a>
                <a href="{{ route('user.profile') }}" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a>
                <a href="{{ route('address.index') }}" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> Adreslerim</a>
                <a href="{{ route('user.profile') }}" data-bs-toggle="tab"><i class="fa fa-user"></i> Hesap Detayları</a>
                <button type="button" id="accountDetail" data-bs-toggle="tab"><i class="fa fa-user"></i> Hesap Detayları</button>
                <a href="{{ route('user.logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>
    </div>
</div>

