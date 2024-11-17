<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Parijat Foods - The Maharashtrian Test</title>
    <!--<link rel="icon" href="./assets/frontend/images/logo.png">-->
    <link rel="icon" href="{{ asset('assets/frontend/images/logo.png') }}">
    
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/variables.css') }}">
    <link href="{{ asset('assets/frontend/css/style.scss') }}" rel="stylesheet">
</head>
<style>
#navbar {
    width: 100%;
}

.mobile-screen-logo {
    display: none;
}

@media (max-width: 992px) {
    .mobile-screen-logo {
        display: block;
        width: 85px !important;
    }
}

.logo-link {
    position: relative;
    width: 200px;
    display: flex;
    justify-content: center;
    transition: all 1.5s;
}

.logo-link .logo {
    position: absolute;
    top: 50px;
    width: 100%;
    height: 100%;
    transition: all 1.5s;
}

#header.header-scrolled .logo-link {
    width: 130px;
}

#header.header-scrolled .logo-link .logo {
    top: 25px;
}

header #navbar ul li a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2px 10px 2px 10px;
    font-size: 18px;
    color: #fff;
    white-space: nowrap;
    transition: 0.3s;
    margin: 0px 5px;
    border-radius: 15px;
    border: 1px solid transparent;
}

header #navbar ul li a:hover {
    border: 1px solid #fff;
}

header #navbar ul li .logo {
    border: 0px !important;
}

@media (max-width:425px) {
    #header {
        background: #111;
        padding: 9px 10px;
    }

    .mobile-screen-logo {
        width: 77px !important;
    }

    .mobile-nav-toggle {
        color: #fff !important;
        font-size: 45px;
    }

    #page-banner {
        margin-top: 82px;
        ;
    }

    #page-banner img {
        width: 100% !important;
        height: 160px;
        object-fit: cover;
        object-position: center;
    }

    header #navbar ul li a {
        display: flex;
        align-items: center;
        justify-content: left;
        padding: 2px 10px 2px 10px;
        font-size: 18px;
        padding-top: 10px;
        color: #000 !important;
        text-align:left;
    }

    .logo-link {
        display: none !important;
    }
}

@media (max-width:425px) {


        header #navbar ul li a {
        display: flex;
        align-items: center;
        justify-content: left;
        padding: 10px 10px 10px 10px;
        font-size: 18px;
        margin-top: 5px;
        color: #fff !important;
        text-align: left;
        border-radius: 0px;
        line-height: 20px;
        width: 80%;
        border-bottom: 1px solid #fff;
    }
    
        header #navbar ul li:last-child a {
        border: 0px solid #000;
        background-color:#ef682e !important;
        color:#fff !important;
        border-bottom: 0px;
    }
    
}

#whatsapp-btn {
    position: fixed;
    bottom: 60px;
    right: 14px;
    width: 45px;
    height: 45px;
    z-index: 55555555555555;
    animation-name: wp;
    animation-timing-function: inherit;
    animation-iteration-count: infinite;
    animation-duration: 1.5s;
}

@keyframes wp {
    1% {
        filter: grayscale(100%);
        transform: scale(1.06);
    }

    50% {
        filter: grayscale(0%);
        transform: scale(1);
    }

    100% {
        filter: grayscale(100%);
        transform: scale(1.06);
    }
}

#whatsapp-btn img {
    width: 100%;
}

._9vd5 {
    text-align: center !important;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 20px  !imprtant;
  /*background: url(../images/panner-masala.jpg);*/
  background-color:#ef682e !important;
  overflow-y: auto;
  transition: 0.3s;
  
  height: fit-content;
  margin-top: 1px !important;
    border-radius: 12px 0px 0px 12px;
    padding:30px 0px 35px 30px !important;
 width: 70%;
    margin-right: 10px !important;
}

 /*header #navbar ul li  {*/
 /*   list-style-type: disc;*/

 /*   }*/

 header #navbar ul li a:hover {
        border: 0px solid #fff;
        background-color:#fff !important;
        color:#000 !important;
    }

</style>

<body>
    @include('frontend.partials.header')
    <div id="whatsapp-btn">
        <a class="profits-btn" onclick="startWhatsAppChat()">
            <img src="{{ asset('assets/frontend/images/whatsapp.png') }}" alt="">
        </a>
    </div>
    @yield('content')
    @include('frontend.partials.footer')
    @yield('scripts')
</body>

</html>