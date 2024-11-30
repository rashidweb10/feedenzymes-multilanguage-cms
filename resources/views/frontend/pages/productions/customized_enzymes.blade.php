@extends('frontend.layouts.master')
@section('title', 'Career')
@section('content')

@php
    $contents = json_decode($data->contents); // Assuming $page contains the database data
    $whyTitle = $contents->why_title ?? null;
    $whyImage = $contents->why_image ?? null;
    $whyDescription = $contents->why_description ?? null;
    $rawTitle = $contents->raw_title ?? null;
    $rawImage = $contents->raw_image ?? null;
    $howTitle = $contents->how_title ?? null;
    $howDescription = $contents->how_description ?? null;
    $you_title = $contents->you_title ?? null;
    $you_description = $contents->you_description ?? null;    
@endphp

<x-inner-page-breadcrumb />

<section class="aboutus_section about_sec_right padtop60 padbtm50 marg25 position-relative ">
  <div class="container">
    <h3 class="manufacture-btn button_postion">{{__('messages.tagline')}}</h3>
    <div class="row">
      <div class="col-md-12 order-1 order-md-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
        
      <div class="row">
        <div class="col-md-4">
          <img style="width:100%" src="{{asset($whyImage)}}">
        </div>        
        <div class="col-md-8">
           <h4>{{$whyTitle}}</h4>
           <div>
              {!! $whyDescription !!}
           </div>
        </div>
        <div class="col-md-12 mt-4">
        <h4>{{$rawTitle}}</h4>
         <img style="width:100%" src="{{asset($rawImage)}}">
        </div>
        <div class="col-md-12 mt-4">
        <h4>{{$howTitle}}</h4>
           <div>
              {!! $howDescription !!}
           </div>          
        </div> 
        <div class="col-md-12 mt-4">
           <h4>{{$you_title}}</h4>
           <div>
              {!! $you_description !!}
           </div>
        </div>       
      </div>
    </div>
  </div>
</section>
@endsection