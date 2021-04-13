<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Giriş</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-palette menu-icon"></i>
                <span class="menu-title">Satışlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sales">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Siparişler</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">İadeler</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Sepette Kalanlar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.customer.index') }}">Müşteriler</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product_catalog" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-palette menu-icon"></i>
                <span class="menu-title">Ürün Katalog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product_catalog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.index') }}">Ürünler</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.index') }}">Kategoriler</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.index') }}">Markalar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sale_statistic" aria-expanded="false" aria-controls="ui-advanced">
                <i class="ti-view-list menu-icon"></i>
                <span class="menu-title">Satış İstatistikleri</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sale_statistic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Satışlar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="ti-view-list menu-icon"></i>
                <span class="menu-title">İçerik Yönetimi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.page.index') }}">Sayfalar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Bloglar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#seo" aria-expanded="false" aria-controls="ui-advanced">
                <i class="ti-view-list menu-icon"></i>
                <span class="menu-title">Seo Ayarları</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="seo">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Anasayfa SEO Ayarları</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Sayfa SEO Ayarları</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu_design" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Görsel Yönetim</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu_design">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.slider.index') }}">Sliderlar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.banner.index') }}">Bannerler</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#special_zone" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Tema Paneli</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="special_zone">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Özel Alanlar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu_setting" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Ayarlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu_setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.contact.index') }}">İletişim & Firma Bilgileri</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.logo.index') }}">Logo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.footer.index') }}">Footer Logo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.favicon.index') }}">Favicon</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#integrations" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Entegrasyonlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="integrations">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Kredi Kartı Ayarları</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">SMS Ayarları</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mail Ayarları</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#payment_system" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Ödeme Sistemleri</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payment_system">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Bankalar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ödeme Türleri</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#menu_admins" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Yöneticiler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu_admins">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.manager.index') }}">Yöneticiler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kullanıcı Yetki Grupları</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
