@php
$logo = DB::table('settings')->first()->app_logo;
$whatsappPhone = DB::table('settings')->first()->whatsapp_phone;
$categories = DB::table('product_categories')->where('is_active', 1)->get();
@endphp

<style>
.footer-top {
    background-color: #fff6ed;
}

.footer-logo {
    width: fit-content;
    transform: translateY(-55px);
}

.footer-logo img {
    width: 135px;
}

.footer-links {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.footer-link {
    width: fit-content;
    padding: 2px 20px;
    padding: 0px;
    width: 10%;
    display: flex;
    margin-bottom: 27px;
    justify-content: center;
}

.footer-link-logo img {
    margin-left: 19px;
    transform: translateY(-40px);
}

.footer-link-logo-425 {
    display: none;
    width: 140px;
    transform: translateY(-40px);
}

.footer-link a {
    text-transform: capitalize;
    color: #000;
    font-size: 17px;
}

.footer-link .f-link:hover {
    border: 1px solid #000;
}

.footer-floting-icon-1 {
    top: 30%;
    left: 7%;
}

.footer-floting-icon-2 {
    top: 5%;
    left: 35%;
}

.footer-floting-icon-3 {
    top: 60%;
    left: 15%;
}

.footer-floting-icon-4 {
    top: 50%;
    left: 62%;
}

.footer-floting-icon-5 {
    top: 5%;
    left: 85%;
}

.footer-floting-icon-6 {
    top: 70%;
    left: 83%;
}

.footer-link .f-link {
    border: 1px solid transparent;
    padding: 3px 10px;
    border-radius: 20px;
}

.copyright p {
    font-size: 13px;
}

.copyright a {
    font-size: 13px;
    color: #fff;
    font-weight: 600;
}

.maptek-link {
    display: flex;
    justify-content: end;
}

@media (max-width:1024px) {}

@media (max-width:1024px) {}

@media (max-width:768px) {}

@media (max-width:425px) {
    .footer-link a {
  font-size: 15px !important;
}


 .footer-floting-icon-5 {
    top: 20% !important;
    left: 85% !important;
  }

  .footer-floting-icon-3 {
    top: 20% !important;
    left: 19% !important;
  }
  .footer-floting-icon-1 {
    top: 7% !important;
    left: 0% !important;
  }
  
  .footer-floting-icon-2 {
  top: 5% !important;
  left: 25% !important;
}
    
    .footer-floting-icon-4 {
    top: 20% !important;
    left: 61% !important;
  }
    
    .footer-link {
        width: fit-content;
        padding: 1px 15px;
        margin: 0px 0px 20px 0px;
        padding: 0px;
        width: 32%;
        display: flex;
        justify-content: center;
    }

    .footer-link a {
        text-align: center;
    }

    .footer-floting-icon-1 {
        top: 7%;
        left: 7%;
    }

    .footer-floting-icon-3 {
        top: 29%;
        left: 15%;
    }

    .footer-floting-icon-5 {
        top: 41%;
        left: 85%;
    }

    .footer-floting-icon-4 {
        top: 28%;
        left: 62%;
    }

    .footer-floting-icon-6 {
        top: 4%;
        left: 83%;
    }

    .copyright p {
        font-size: 13px;
        display: flex;
        justify-content: center;
        padding: 5px 10px 0px 10px;
    }

    .maptek-link {
        display: flex;
        justify-content: center;
    }

    .footer-link {
        width: fit-content;
        padding: 2px 20px;
        padding: 0px;
        width: 30%;
    }

    .footer-link-logo {
        display: none;
    }
}
</style>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row footer-links">
                <div class="footer-link footer-link-logo-425" style="margin-bottom: 0px !important;">
                    <img src="{{ asset($logo) }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-link footer-link-1"><a class="active f-link" href="{{ url('/') }}">Home</a></div>
                <div class="footer-link footer-link-1"><a class="active f-link" href="{{ url('about-us') }}">About
                        Us</a></div>
                <div class="footer-link footer-link-1"><a class="active f-link" href="{{ url('contact-us') }}">Contact
                        Us</a></div>
                <div class="footer-link footer-link-logo" style="margin-bottom: 0px !important;">
                    <img src="{{ asset($logo) }}" class="img-fluid" alt="">
                </div>
                @foreach($categories as $category)
                <div class="footer-link footer-link-1"><a @if($category->id == request()->slug) style="border: 1px solid
                        #000;" @endif class="f-link"
                        href="{{ url('category', [$category->id]) }}">{{$category->name}}</a></div>
                @endforeach
            </div>
        </div>
        <div class="footer-floting-icon-1 floting-icon floting-icon-a animate__animated animate__bounceInLeft">
            <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid p-2" alt="">
        </div>
        <div class="footer-floting-icon-2 floting-icon floting-icon-b animate__animated animate__bounceInDown">
            <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid p-2" alt="">
        </div>
        <div class="footer-floting-icon-3 floting-icon floting-icon-c animate__animated animate__rotateIn">
            <img src="{{ asset('assets/frontend/images/icon-leaf.png') }}" class="img-fluid p-2" alt="">
        </div>
        <div class="footer-floting-icon-4 floting-icon floting-icon-a animate__animated animate__fadeInUp">
            <img src="{{ asset('assets/frontend/images/icon-star.png') }}" class="img-fluid p-2" alt="">
        </div>
        <div class="footer-floting-icon-5 floting-icon floting-icon-b animate__animated animate__bounceInUp">
            <img src="{{ asset('assets/frontend/images/icon-clove.png') }}" class="img-fluid p-2" alt="">
        </div>
        <div class="footer-floting-icon-6 floting-icon floting-icon-c animate__animated animate__zoomInDown">
            <img src="{{ asset('assets/frontend/images/icon-jaifal.png') }}" class="img-fluid p-2" alt="">
        </div>
    </div>

    <div class="container">
        <div class="copyright row">
            <div class="col-md-6 col-sm-12">
                <p class="text-white">© 2024 Parijat Foods. All Rights Reserved</p>
            </div>
            <div class="col-md-6 col-sm-12 maptek-link">
                <p class="text-align-left text-white"> Powered by <a href="https://maptek.in/">Maptek</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="{{ asset('assets/frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script>
function startWhatsAppChat() {
    var phoneNumber = "{{$whatsappPhone}}";
    var message = encodeURIComponent(" How can i help you");
    var whatsappLink = "https://wa.me/" + phoneNumber + "?text=" + message;
    window.open(whatsappLink);
}
</script>
<script>
AOS.init({
    once: true,
});
</script>