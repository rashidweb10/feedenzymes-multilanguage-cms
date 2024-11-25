@extends('frontend.layouts.master')
@section('title', 'About')

@section('content')
<section class="internal_section">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-6">
      <div class="internal_content">
        <h3 class="robot_slab fw-normal fs-3 pb-2">Power of Lumis Enzymes</h3>
        <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="aos-init aos-animate">Our foundation is built on maintaining high standards of excellence in printing, utilizing in-house facilities to provide color printing services for various items.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="main_banner_image">
        <img class="w-100 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" src="img/home-mfr.jpg">
      </div>
    </div>
  </div>
</section>

<section class="aboutus_section about_sec_right padtop60 padbtm50 marg25 position-relative ">
  <div class="container">
    <h3 class="manufacture-btn button_postion">Let us make innovative solutions</h3>
    <h4 class="inner_heading robot_slab fs-4 pb-3 fw-normal">About Lumis Enzymes</h4>
    <div class="row">
      <div class="col-md-4 order-2 order-md-1 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
        <div class="aboutus_image relative">
          <img class="w-100" src="img/home-about-img.jpg">
        </div>
      </div>
      <div class="col-md-8 order-1 order-md-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
        <div class="about_content ps-md-4">
          <p>Lumis, with its own culture bank of industrially potent strains (fungal and bacterial), focuses on producing robust enzymes...</p>
          <p>Lumis, with its own culture bank of industrially potent strains (fungal and bacterial), focuses on producing robust enzymes...</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <hr>
  </div>
</section> 

<section class="tabs_section padtop30">
  <div class="container">
    <div class="tabs_box">
      <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills flex-column border-end border-3 me-3 align-items-end" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-semibold active position-relative robot_slab " id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About Us</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-semibold position-relative robot_slab " id="pills-mfr-tab" data-bs-toggle="pill" data-bs-target="#pills-mfr" type="button" role="tab" aria-controls="pills-mfr" aria-selected="false">MFR</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-semibold position-relative robot_slab " id="pills-rd-tab" data-bs-toggle="pill" data-bs-target="#pills-rd" type="button" role="tab" aria-controls="pills-rd" aria-selected="false">R&D</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-semibold position-relative robot_slab " id="pills-support-tab" data-bs-toggle="pill" data-bs-target="#pills-support" type="button" role="tab" aria-controls="pills-support" aria-selected="false">Technical Support</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-semibold position-relative robot_slab " id="pills-sustainability-tab" data-bs-toggle="pill" data-bs-target="#pills-sustainability" type="button" role="tab" aria-controls="pills-sustainability" aria-selected="false">Sustainability</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-semibold position-relative robot_slab " id="pills-quality-tab" data-bs-toggle="pill" data-bs-target="#pills-quality" type="button" role="tab" aria-controls="pills-quality" aria-selected="false">Quality</button>
            </li>
          </ul>
        </div>
        
        <div class="col-md-9">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">About Us</h4>
              <img class="w-100 mb-4" src="img/home-about-img.jpg">
              <p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.</p>
              <p class="pb-5">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.</p>
            </div>
            <div class="tab-pane fade" id="pills-mfr" role="tabpanel" aria-labelledby="pills-mfr-tab">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">MFR</h4>
              <img class="w-100 mb-4" src="img/home-about-img.jpg">
              <p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.</p>
              <p class="pb-5">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.</p>
            </div>
            <div class="tab-pane fade" id="pills-rd" role="tabpanel" aria-labelledby="pills-rd-tab">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">R&D</h4>
             <img class="w-100 mb-4" src="img/home-about-img.jpg">
              <p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.</p>
              <p class="pb-5">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.</p>
             </div>
            <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">Technical Support</h4>
               <img class="w-100 mb-4" src="img/home-about-img.jpg">
              <p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.</p>
              <p class="pb-5">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.</p>
            </div>
            <div class="tab-pane fade" id="pills-sustainability" role="tabpanel" aria-labelledby="pills-sustainability-tab">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">Sustainability</h4>
               <img class="w-100 mb-4" src="img/home-about-img.jpg">
              <p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.</p>
              <p class="pb-5">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.</p>
             </div>
            <div class="tab-pane fade" id="pills-quality" role="tabpanel" aria-labelledby="pills-quality-tab">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">Quality</h4>
               <img class="w-100 mb-4" src="img/home-about-img.jpg">
              <p>Synergistic efforts of innovation, customization and continuous progress in the field of enzyme technology have driven Lumis to develop novel application-oriented enzymes.</p>
              <p class="pb-5">Lumis remains committed to similar endeavors to bring about unique enzyme innovations. By staying on the cusp of market changes and maintaining the best-in-class standards, we aim to revolutionize enzyme applications.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection