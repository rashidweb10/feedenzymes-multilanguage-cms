@extends('frontend.layouts.master')
@section('title', 'About')
@section('content')
@php
$contact = DB::table('settings')->first();
@endphp
<style>
header #navbar ul li:nth-child(3) a.active {
    border: 1px solid #fff;
}

.footer-link:nth-child(3) a.active {
    border: 1px solid #000;
}

@media (max-width: 425px) {
      header #navbar ul li:nth-child(3) a.active {
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

<section class="page-banner" id="page-banner">
    <img src="{{ asset('assets/frontend/images/c-bg (1).jpg') }}" class="img-fluid" alt="Page Banner">
</section>


<style>
.contact_us {
    padding-bottom: 50px;
}

.contact .info-item {
    background-color: var(--surface-color);
    padding: 10px 0 15px 0;
    border: 1px solid var(--color-primary);
}

.contact .info-item i {
    font-size: 20px;
    color: var(--accent-color);
    width: 56px;
    height: 56px;
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    transition: all 0.3s ease-in-out;
    border-radius: 50%;
    border: 2px dotted color-mix(in srgb, var(--accent-color), transparent 40%);
}

.contact .info-item h3 {
    font-size: 20px;
    font-size: 18px;
    font-weight: 700;
    margin: 10px 0;
}

.contact .info-item p {
    padding: 0;
    margin-bottom: 0;
    font-size: 14px;
}

.contact .php-email-form {
    background-color: var(--surface-color);
    height: 100%;
    padding: 30px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

@media (max-width: 575px) {
    .contact .php-email-form {
        padding: 20px;
    }
    
    .section-header h2 {
  font-size: 21px !importanr;
        margin-bottom:0px !important;
    }
    .section-header span {
  font-size: 43px;}
  
  #contact p{
      text-align:center;
  }
  
  .info-item{
      padding:5px 16px;
  }
  
}

@media (max-width: 425px) {
#contact_us #page{
   padding:5px 16px;
}
}

</style>

<main class="contact_us" id="contact_us">
    <section id="page">
        <div class="container py-5 ">
            <div class="section-header">
                <span>Contact Us</span>
                <h2>Contact Us</h2>
            </div>
        </div>
        <div id="contact" class="contact ">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center px-3"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>{{$contact->address}}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center px-3"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{{$contact->phone}}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center px-3"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{$contact->email}}</p>
                        </div>
                    </div>

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                        <iframe src="{{$contact->google_map}}" frameborder="0"
                            style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

            </div>

        </div>
    </section>


</main>
@endsection