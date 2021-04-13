@extends('front.layouts.master')
@section('title')
    <title>Sepetim</title>
@endsection

@section('front.content')

    <div class="section">
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Shopping Cart</h1>
                    <ul>
                        <li>
                            <a href="{{ route('homepage.index') }}">Home </a>
                        </li>
                        <li class="active"> Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('front.basket.basket_component')
@endsection

@section('js')
    <script>
        $(function () {

            // ORDER-BTN \\
            $('#orderBtn').on('click', function (e) {
                e.preventDefault();

                let action = "{{ route('order.store') }}";

                $.post(action, {_token: token,}, function () {
                    $('.deleteColumn').remove();
                    $('#sub_total').html("$" + 0);
                    $('#shipping').html("$" + 0);
                    $('#total_amount').html("$" + 0);

                    $('#alert_input').css("display", "block");

                    toastr.success("Siparişiniz Başarılıyla oluşturuldu.", "Başarılı")
                });
            });

            // BASKET-QUANTITY \\
            $('.quantityBtn').on('change', function (e) {
                e.preventDefault();
                let action = "{{ route('user.basket.quantity') }}";
                let quantity = parseInt($(this).val());
                let id = $(this).attr('data-id');
                let price = $(this).attr('single-price');

                if (quantity > 0) {
                    $.post(action, {_token: token, quantity: quantity, basket_id: id, price: price}, function (data) {

                        $(".total_price_" + data.basket_id).html("$" + data.total_price);

                        $('#sub_total').html("$" + data.basket_total['subTotal']);
                        $('#shipping').html("$" + (data.basket_total['subTotal'] * 0.18).toFixed(2));
                        $('#total_amount').html("$" + (data.basket_total['subTotal'] * 1.18).toFixed(2));
                        $('#cart_price').html("$" + data.basket_total['subTotal']);

                        if (data.status === "success") {
                            toastr.success("Ürün Güncellendi", "BAŞARILI");
                        }
                    });

                } else {
                    toastr.error("Lütfen Miktar Giriniz.", "Miktar boş olamaz!");
                }
            });


            // BASKET-PRODUCT-DELETE \\
            $(document).on('click', '.deleteBasket', function (e) {
                e.preventDefault();
                let action = "{{ route('user.basket.delete') }}";
                let id = $(this).attr('data-id');
                $.post(action, {_token: token, product_id: id,}, function (data) {

                    $(e.target).parents(".deleteColumn").remove();
                    $('#sub_total').html("$" + data.basket_total_price['subTotal']);
                    $('#shipping').html("$" + (data.basket_total_price['subTotal'] * 0.18).toFixed(2));
                    $('#total_amount').html("$" + (data.basket_total_price['subTotal'] * 1.18).toFixed(2));

                    $('#basket_count').html(data.basket_count);
                    toastr.success("Ürün sepetinizden silindi.", "BAŞARILI");
                });
            });

        });

    </script>
@endsection
