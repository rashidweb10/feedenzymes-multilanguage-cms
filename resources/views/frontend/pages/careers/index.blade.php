@extends('frontend.layouts.master')
@section('title', 'Career')
@section('content')

@php
    $contents = json_decode($data->contents); // Assuming $page contains the database data
    $page_name = $data->name ?? '';
    $page_description = $contents->page_description ?? '';
@endphp

<x-inner-page-breadcrumb />

<section class="aboutus_section about_sec_right padtop60 padbtm50 marg25 position-relative ">
  <div class="container">
    <h3 class="manufacture-btn button_postion">{{__('messages.tagline')}}</h3>
    <div class="row">
      <div class="col-md-12 order-1 order-md-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
      <h4 class="inner_heading robot_slab fs-4 pb-2 fw-normal">{{$page_name}}</h4>
      <div class="">
            {!! $page_description !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection