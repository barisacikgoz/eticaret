<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\back\AuthController;
use App\Http\Controllers\back\MainController;
use App\Http\Controllers\back\ProductController;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\BrandController;
use App\Http\Controllers\back\PageController;
use App\Http\Controllers\back\SliderController;
use App\Http\Controllers\back\BannerController;
use App\Http\Controllers\back\ContactController;
use App\Http\Controllers\back\LogoController;
use App\Http\Controllers\back\FooterController;
use App\Http\Controllers\back\FaviconController;
use App\Http\Controllers\back\ManagerController;
use App\Http\Controllers\back\CustomerController;

// FRONT \\

Route::middleware("front")->group(function () {

    Route::middleware('isNotUser')->group(function () {
        Route::get('profile', [App\Http\Controllers\front\AuthController::class, 'profile'])->name('user.profile');
    });

//    Route::prefix('user')->middleware('isUser')->group(function () {
    Route::get('login', [App\Http\Controllers\front\AuthController::class, 'login'])->name('user.login');
    Route::post('login/post', [App\Http\Controllers\front\AuthController::class, 'loginPost'])->name('user.login.post');
//    });
    Route::get('logout', [App\Http\Controllers\front\AuthController::class, 'logout'])->name('user.logout');

    Route::post('ajax', [App\Http\Controllers\front\BasketController::class, 'deleteCart'])->name('user.delete.cart');
    Route::post('quantity', [App\Http\Controllers\front\BasketController::class, 'quantityData'])->name('user.basket.quantity');
    Route::post('basketDelete', [App\Http\Controllers\front\BasketController::class, 'basketDelete'])->name('user.basket.delete');
    Route::post('addressDelete', [App\Http\Controllers\front\CustomerAddressController::class, 'addressDelete'])->name('user.address.delete');
    Route::get('shop', [App\Http\Controllers\front\MainController::class, 'shop'])->name('user.shop');

    Route::get('sayfalar/{slug}', [App\Http\Controllers\front\PageController::class, 'show'])->name('user.pages.show');

    Route::resource('homepage', App\Http\Controllers\front\MainController::class);
    Route::resource('account', App\Http\Controllers\front\AuthController::class);
    Route::resource('basket', App\Http\Controllers\front\BasketController::class);
    Route::resource('contact', App\Http\Controllers\front\ContactController::class);
    Route::resource('product', App\Http\Controllers\front\ProductController::class);
    Route::resource('wishlist', App\Http\Controllers\front\WishlistController::class);

    Route::middleware('isNotUser')->group(function () {
        Route::resource('order', App\Http\Controllers\front\OrderController::class);
        Route::resource('myOrders', App\Http\Controllers\front\MyOrderControllerController::class);
        Route::resource('address', App\Http\Controllers\front\CustomerAddressController::class);
    });
});


// END-FRONT \\


// BACK \\
Route::prefix('admin')->middleware('isLogin')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login/post', [AuthController::class, 'loginPost'])->name('login.post');
});
//->middleware('isAdmin')
Route::prefix('admin')->name('admin.')->middleware("isAdmin")->group(function () {
    Route::get('dashboard', [MainController::class, 'index'])->name('dashboard');


    // Resource Routes
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('page', PageController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('logo', LogoController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('favicon', FaviconController::class);
    Route::resource('manager', ManagerController::class);
    Route::resource('customer', CustomerController::class);


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
// END-BACK \\
