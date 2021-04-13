@extends('front.layouts.master')
@section('title')
    <title>İletişim - Bize Ulaşın</title>
@endsection
@section('front.content')
    <div class="section">

        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Bize Ulaşın</h1>
                    <ul>
                        <li>
                            <a href="{{ route('homepage.index') }}">Ana Sayfa </a>
                        </li>
                        <li class="active"> Bize Ulaşın</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-12 col-lg-8 mb-10">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title pb-3">Get In Touch</h2>
                        <span></span>
                        <div class="title-border-bottom"></div>
                    </div>
                    <div class="contact-form-wrapper contact-form">
                        <form action="https://htmlmail.hasthemes.com/rezaul/destry.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-item mb-4">
                                                <input class="input-item input_clear" type="text" placeholder="Your Name *" id="name_input" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                            <div class="input-item mb-4">
                                                <input class="input-item input_clear" type="email" placeholder="Email *" id="email_input" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-item mb-4">
                                                <input class="input-item input_clear" type="text" placeholder="Subject *" id="subject_input" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                                            <div class="input-item mb-8">
                                                <textarea class="textarea-item input_clear" placeholder="Message" id="message_input" name="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                                            <button type="button" id="contact_submit" class="btn btn-dark btn-hover-primary rounded-0">Send A Message</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-10">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title pb-3">İletişim Bilgileri</h2>
                        <span></span>
                        <div class="title-border-bottom"></div>
                    </div>

                    <div class="row contact-info-wrapper mb-n6">

                        <div class="col-lg-12 col-md-6 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="300">

                            <div class="single-contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>

                            <div class="single-contact-title-content">
                                <h4 class="title">Posta Adresi</h4>
                                <p class="desc-content">{{ contact_data()->settings_address }} <br>Turkey\Istanbul</p>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-6 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="400">

                            <div class="single-contact-icon">
                                <i class="fa fa-mobile"></i>
                            </div>

                            <div class="single-contact-title-content">
                                <h4 class="title">İstediğiniz Zaman Bize Ulaşın</h4>
                                <p class="desc-content">Mobile: {{ contact_data()->settings_phone_1 }} <br>Fax: {{ contact_data()->settings_phone_2 }}</p>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-6 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="500">

                            <div class="single-contact-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>

                            <div class="single-contact-title-content">
                                <h4 class="title">Genel Destek</h4>
                                <p class="desc-content"><a href="#">Support24/7@example.com</a> <br><a href="#">{{ contact_data()->settings_form_mail }}</a></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Map Start -->
    <div class="section" data-aos="fade-up" data-aos-delay="300">
        <!--Google Map Area Start-->
        <div class="google-map-area w-100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.120205916014!2d28.864038315730223!3d41.06636502379659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab006af7da409%3A0x79365617a5736946!2sTekstilkent%20B13%20Blok!5e0!3m2!1str!2str!4v1615275919787!5m2!1str!2str"
                width="2500" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--Google Map Area Start-->
    </div>
@endsection

@section('js')
    <script>
        $(function () {

            // CONTACT \\
            $('#contact_submit').on('click', function () {
                let action = "{{ route('contact.store') }}";
                let name = $('#name_input').val();
                let email = $('#email_input').val();
                let subject = $('#subject_input').val();
                let message = $('#message_input').val();

                $.post(action, {_token: token, name: name, email: email, subject: subject, message: message,}, function (data) {


                    if (data.status === "success") {

                        $('.input_clear').val("");
                        toastr.success("Göndermiş olduğunuz form bize ulaştı. Teşekkürler.", "Yakında dönüş yapacağız.");
                    } else if (data.status === "error") {
                        toastr.error("Lütfen form'un tamamını doldurduğunuzdan emin olun.", "Form Hatalı");
                    }
                });
            });
        });
    </script>
@endsection
