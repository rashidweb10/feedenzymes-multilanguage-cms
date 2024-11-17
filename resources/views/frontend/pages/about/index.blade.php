@extends('frontend.layouts.master')
@section('title', 'About')
@section('content')

@php
$aboutUs = DB::table('settings')->first()->about;
@endphp

<style>
    header #navbar ul li:nth-child(2) a.active {
        border: 1px solid #fff;
    }

    .footer-link:nth-child(1) a.active {
        border: 1px solid #000;
    }
    
    @media (max-width: 425px) {
      header #navbar ul li:nth-child(2) a.active {
        border: 0px solid #000;
        background-color:#fff !important;
        color:#000 !important;
    }
    }
</style>

<style>
    #page-banner {
        margin-top: 75px;
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    #page-banner img {
        width: 100% !important;
    }
</style>

<style>
    #about_us .sub_heading {
        font-size: 24px;
        margin-bottom: 15px;

    }

    #about_us .sub_heading_b {
        font-size: 20px;
        margin-bottom: 15px;
        color: #000;
        font-weight: 500;
    }

    #about_us .bout-intro p {
        font-size: 17px;
        text-align: justify;
    }

    #about_us .delights-img {
        width: 100%;
        height: 100%;
        padding-left: 30px;
    }

    #about_us .delights-img .delightsBox {
        padding: 5px;
        border: 2px solid #ddd;
        overflow: hidden;
    }

    #about_us .delights-img .delightsBox:hover img {
        transform: scale(1.1);
    }

    #about_us .delights-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    #about_us  ul  {
    padding-left: 20px !important;
    }

    #about_us .delights ul li {
        font-size: 17px;
        margin-bottom: 10px;
        text-align: justify;
        list-style-type: disc;
    }

    #about_us .delights ul li span {
        margin-right: 6px;
    }

    .Community_secion {
        padding: 50px 0px;
    }

    .fes-2 {
        padding-left: 0px !important;
        padding-right: 30px !important;
    }

    .fes_delights {
        padding: 45px 0px;
    }

    .more-food {
        padding: 40px 0px 50px 0px;
    }
    
    @media (max-width: 425px) {
        
        #about_us section{
            padding:30px 13px;
        }
        
        .fes_delights {
        padding: 25px 0px;
    }

    .more-food {
        padding: 30px 0px;
    }
        
        #about_us .sub_heading_b {
    font-size: 17px !important;
    margin-bottom: 7px;

}

 #about_us .sub_heading_b p{
    font-size: 15px !important;
    margin-bottom: 4px;
text-align: justify !importanr;
}
        #about_us .delights-img {
    width: 100%;
    height: 100%;
    padding:0px !important;
    
    margin-top:17px;
}

#about_us .sub_heading {
    font-size: 18px !important;
    margin-bottom: 15px;
}



    }
</style>

<section class="page-banner" id="page-banner">
    <img src="{{ asset('assets/frontend/images/c-bg (1).jpg') }}" class="img-fluid" alt="Page Banner">
</section>

<!--<main class="contact_us" id="contact_us">-->
<!--    <section id="page">-->
<!--        <div class="container py-5 ">-->
<!--            <div class="section-header">-->
<!--                <span>About Us</span>-->
<!--                <h2>About Us</h2>-->
<!--            </div>-->
<!--            <div class="row justify-content-center mb-5">-->
<!--                <div class="col-12">-->
<!--                    {!! $aboutUs !!}-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</main>-->

<main class="about_us" id="about_us">
    <section id="page">
        <div class="container pt-5 pb-2 ">
            <div class="section-header">
                <span>About Us</span>
                <h2>About Us</h2>
            </div>
            <h4 class="sub_heading mb-4">Parijat Foods: The Flavours of Maharashtra, Delivered at Your Doorstep!</h4>

            <div class="row justify-content-center mb-5 about-intro">
                <div class="col-md-6">
                    <h4 class="sub_heading_b">A Passion for Maharashtrian Cuisine</h4>
                    <p>Maharashtrian cuisine, bursting with flavour and tradition, deserves a place on the global culinary map. At Parijat Foods, we share this passion and believe that everyone should have access to authentic Maharashtrian ingredients.</p>
                    <p>That's why we source and create a wide range of products that brings out the flavours of Maharashtra directly at your doorstep.</p>
                </div>

                <!--<div class="col-md-5 delights-img ">-->
                <!--   <div class="delightsBox">-->

                <div class="col-md-6">
                    <div class="delights-img">
                        <!--<img src="./assets/images/abaut-fes.jpg" class="img-fluid" alt="">-->
                        <img src="{{ asset('assets/frontend/images/abaut-fes.jpg') }}" class="img-fluid" alt="">

                    </div>
                </div>
            </div>





        </div>
    </section>




    <section class="bg-light fes_delights">
        <div class="container">
            <div class="row delights">
                <h4 class="sub_heading_b">From Everyday Staples to Festive Delights</h4>
                <p>Our extensive selection caters to every need:</p>
                <ul>
                    <li class="mt-2"> Essential Flours: Discover our unique textures and flavours of flours like Thalipeeth Bhajani, Amboli flour, and Chakali Bhajani, and many more which are perfect for creating classic Maharashtrian dishes.</li>

                    <li> Masala Magic: Elevate your cooking with our exquisite masalas, from goda masala , Garam Masala for rich curries to Malvani masala, Khandeshi masala for a robust flavour.</li>

                    <li>Kheer and Porridge Mixes: Start your day right with nutritious and delicious options like Nachani kheer mix and healthy porridge mix.</li>

                    <li> Delectable Chutneys and Pickles: Add a burst of tang and spice to your meals with our traditional chutneys and pickles.</li>

                    <li> Sweet Treats:Indulge in a taste of Maharashtra with our Ladoo’s, Chiwda’s, Ukadiche Modak, Puran Poli, and Gul Poli.</li>

                    <li>Festive Feasts:Celebrate Diwali with our ready-made Faral or prepare for Ganesh Chaturthi with our delicious Ukadiche Modak.</li>
                </ul>
            </div>
        </div>
    </section>



    <section class="more-food">
        <div class="container">

            <div class="row delights mt-5">

                <div class="col-md-6">
                    <h4 class="sub_heading_b">More Than Just Food</h4>
                    <p>We understand the importance of creating an authentic Maharashtrian experience. In addition to food, we offer a range of festive decorations, including:</p>
                    <ul class="fes-2">
                        <li class="mt-2">Ganpati Decorations: Find everything you need to create a beautiful Makhar for Ganesh Chaturthi.</li>

                        <li> Festive Feasts:Celebrate Diwali with our ready-made Faral or prepare for Ganesh Chaturthi with our delicious Ukadiche Modak.</li>
                    </ul>
                    <p class="fw-bold">100% Satisfaction Guaranteed</p>
                    <p>We are confident you'll love the flavours of Maharashtra with Parijat Foods. </p>
                </div>

                <div class="col-md-6">
                    <div class="delights-img">
                        <!--<img src="./assets/images/modak.jpg" class="img-fluid" alt="">-->
                        <img src="{{ asset('assets/frontend/images/modak.jpg') }}" class="img-fluid" alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="bg-light Community_secion">
        <div class="container">
            <div class="row">
                <h4 class="sub_heading_b">Join the Marathi Community</h4>
                <p>Parijat Foods is your one-stop shop for all things Maharashtrian. Explore our website, discover the magic of Marathi cuisine, and embark on a culinary journey to Maharashtra. We invite you to try our products and experience the taste of tradition delivered straight to your doorstep.</p>
                
            </div>
        </div>

    </section>
</main>


@endsection