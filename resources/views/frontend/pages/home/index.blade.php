@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
<!-- <h3>Main {{ getCurrentLocale() }}</h3>
<p>{{__('messages.let_us_make_innovative_solutions')}}</p> -->

@php
    //Home page data
    $data = json_decode($data->contents, true);
    
    // Banner section
    $bannerTitle = $data['banner_title'] ?? null;
    $bannerImage = $data['banner_image'] ?? null;
    $bannerDescription = $data['banner_description'] ?? null;

    // General event section
    $geventImage = $data['gevent_image'] ?? null;
    $geventDescription = $data['gevent_description'] ?? null;

    // Upcoming event section
    $ueventDescription = $data['uevent_description'] ?? null;

    // Section 1
    $p1Data = $data['p1_data'] ?? [];

    // Section 2
    $p2Desc = $data['p2_desc'] ?? null;
    $p2Data = $data['p2_data'] ?? [];

    // Section 3
    $p3Desc = $data['p3_desc'] ?? null;
    $p3Data = $data['p3_data'] ?? [];

    // Events
    $events = $events ?? [];
@endphp

<div class="banner_video">
      <video width="100%" height="100%" class="elVideo" loop="loop" autoplay="" playsinline="" muted="" src="{{asset($bannerImage)}}" id="video-slider-1"></video>
    
	  <div class="banner_content">
	     <img src="{{ asset('assets/frontend/images/power-of-lumis.jpg') }}">
         <!-- <h4>{{$bannerTitle}}</h4>-->
		 <p>{!! $bannerDescription !!}</p>

<span class="banner_heading robot_slab">{{ __('messages.tagline') }}</span>
	  </div>
	
	</div>
	
	
	
    <section class="about-us mt-75 pt-4 pt-md-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center pb-3">
            <span class="about_heading robot_slab">{{ __('messages.welcome_message') }}</span>
          </div>
          @if(!empty($p1Data))
          @foreach($p1Data as $key => $row)
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <div class="about_box pt-5">
              <a href="{{localized_route('about')}}?tab={{$key}}"><h4 class="robot_slab fw-normal fs-4 pb-2">{{$row['p1_title']}}</h4>
              <div class="about_img zoom-hover">
                <img class="w-100" src="{{asset($row['p1_image'])}}" alt="img" />
              </div>
            </a>
              <p class="pt-3 pb-0 mb-0">{!! $row['p1_description'] !!}</p>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-bottom1"></div>
    </div>
    <!--what we do section start-->
    @php
        $colors1 = ['org_overlay', 'blue_overlay', 'green_overlay']; 
        $colors2 = ['org_bg', 'blue_bg', 'green_bg']; 
    @endphp    
    <section class="pb-5 pt-4 pt-md-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <h4 class="robot_slab fw-normal fs-5 pb-2">{{ __('messages.customized_enzymes') }}</h4>
            <p class="pb-5">{!! $p2Desc !!}</p>
          </div>
          @if(!empty($p2Data))
          @foreach($p2Data as $index => $row)
                @php
                    $bgColor1 = $colors1[$index % count($colors1)]; // Cycle through colors
                    $bgColor2 = $colors1[$index % count($colors2)]; // Cycle through colors
                @endphp          
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
		   <div class="firstletter_fixed">
                <p class="robot_slab {{$bgColor2}}">{{ substr($row['p2_title'], 0, 1) }}</p>
              </div>
            <div class="customized_box position-relative">
             
              <img class="w-100 " src="{{asset($row['p2_image'])}}" alt="img" />
              <div class="customized_content {{$bgColor1}} text-center">
                <h5 class="robot_slab">{{$row['p2_title']}}</h5>
                <p>{!! $row['p2_description'] !!}</p>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section>
    <section class="bg-gray1 pb-5 pt-4 pt-md-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <h5 class="robot_slab fw-normal fs-5 pb-2">{{ __('messages.individual_enzymes') }}</h5>
            <p>{!! $p3Desc !!}</p>
          </div>
          @if(!empty($p3Data))
          @foreach($p3Data as $index => $row)  
                @php
                    $bgColor1 = $colors1[$index % count($colors1)]; // Cycle through colors
                    $bgColor2 = $colors1[$index % count($colors2)]; // Cycle through colors
                @endphp                   
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <div class="individual_box position-relative">
              <img class="w-100 " src="{{asset($row['p3_image'])}}" alt="img" />
              <div class="individual_content {{$bgColor1}} text-center">
                <h5 class="robot_slab {{$bgColor2}}">{{ $row['p3_title'] }}</h5>
				<p>{!! $row['p3_description'] !!}</p>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section>
    <section class="about-us pt-4 pt-md-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <div class="text-start mb-2">
              <h3 class="robot_slab fw-normal fs-5 pb-2">{{ __('messages.global_events') }}</h3>
            </div>
            <p class="pe-5">{!! $geventDescription !!}</p>
            <div class="read_more">
              <a class="" href="{{localized_route('events', ['type'=> 'global'])}}">{{ __('messages.more_events') }}</a>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
           <div class="gloabl-video ">
                  <video width="100%" height="100%" class="elVideo" loop="loop" autoplay="" playsinline="" muted="" src="{{asset($geventImage)}}" id="video-slider-1"></video>
    
                </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="border-bottom1"></div>
    </div>
    <section class="upcoming_events pb-5 pt-4 pt-md-5">
      <div class="container">
        <div class="row ">
          <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
            <h4 class="robot_slab fw-normal fs-5 pb-2">{{ __('messages.upcoming_events') }}</h4>
            <p class="pe-5">{!! $ueventDescription !!}</p>
          </div>
          @if(!empty($events))
          @foreach($events as $row)
          <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="upcoming_image">
              <img class="hvr-bounce-in w-100 " src="{{asset($row->image)}}" alt="img" />
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section>

@endsection