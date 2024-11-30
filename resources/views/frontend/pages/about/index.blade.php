@extends('frontend.layouts.master')
@section('title', 'About')

@section('content')
@php
    $contents = json_decode($data->contents); // Assuming $page contains the database data

    // About Section
    $about_title = $contents->about_title ?? '';
    $about_image = $contents->about_image ?? '';
    $about_description = $contents->about_description ?? '';

    // Tabs Data
    $tabs_data = $contents->tabs_data ?? [];
@endphp

<x-inner-page-breadcrumb />

<section class="aboutus_section about_sec_right padtop60 padbtm50 marg25 position-relative ">
  <div class="container">
    <h3 class="manufacture-btn button_postion">{{__('messages.tagline')}}</h3>
    <h4 class="inner_heading robot_slab fs-4 pb-3 fw-normal">{{$about_title}}</h4>
    <div class="row">
      <div class="col-md-4 order-2 order-md-1 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
        <div class="aboutus_image relative">
          <img class="w-100" src="{{asset($about_image)}}">
        </div>
      </div>
      <div class="col-md-8 order-1 order-md-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
        <div class="about_content ps-md-4">
          {!! $about_description !!}
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
            
          @if(!empty($tabs_data))
            @foreach($tabs_data as $index => $row)
              <li class="nav-item" role="presentation">
                <button class="nav-link fw-semibold @if($index == request()->input('tab')) active @elseif($index == 0 && empty(request()->input('tab'))) active @endif position-relative robot_slab " id="pills-{{$index}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$index}}" type="button" role="tab" aria-controls="pills-{{$index}}" aria-selected="true">{{$row->tab_alias}}</button>
              </li>
            @endforeach
          @endif
          </ul>
        </div>
        
        <div class="col-md-9">

          <div class="tab-content" id="pills-tabContent">
          @if(!empty($tabs_data))
            @foreach($tabs_data as $index => $row)
            <div class="tab-pane fade show @if($index == request()->input('tab')) active @elseif($index == 0 && empty(request()->input('tab'))) active @endif" id="pills-{{$index}}" role="tabpanel" aria-labelledby="pills-{{$index}}">
              <h4 class="pb-2 robot_slab fw-normal fs-4 pb-2 orangetex">{{$row->tab_title}}</h4>
              <img class="w-100 mb-4" src="{{asset($row->tab_image)}}">
              {!! $row->tab_description !!}
            </div>
            @endforeach
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection