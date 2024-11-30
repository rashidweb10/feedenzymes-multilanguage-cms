@extends('frontend.layouts.master')
@section('title', 'Events')
@section('content')

@php
    //dd($years);
    //$contents = json_decode($data->contents); // Assuming $page contains the database data
    //$page_name = $data->name ?? '';
    //$page_description = $contents->page_description ?? '';
@endphp

<x-inner-page-breadcrumb />

<section class="aboutus_section about_sec_right padtop60 position-relative ">
  <div class="container">
    <h3 class="manufacture-btn button_postion">Let us make innovative solutions</h3>
    <h4 class="inner_heading robot_slab fs-4 fw-normal">@if(request()->segment(3) == 'global') {{ __('messages.global_events') }} @else {{ __('messages.upcoming_events') }} @endif </h4>
   
  </div>
</section>


<section class="tabs_section padtop30">
  <div class="container">
    <div class="tabs_box">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills flex-column border-end border-3 me-3 align-items-end" id="pills-tab" role="tablist">
            @if(!empty($years))
              @foreach($years as $index => $row)
                <li class="nav-item" role="presentation">
                  <button class="nav-link @if($index == 0) active @endif fw-semibold position-relative robot_slab" id="pills-{{$index}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$index}}" type="button" role="tab" aria-controls="pills-{{$index}}" aria-selected="true">{{$row}}</button>
                </li>
              @endforeach
            @endif            
          </ul>
        </div>
        
        <div class="col-md-10">
          <div class="tab-content" id="pills-tabContent">
            @if(!empty($years))
              @foreach($years as $index => $row)
              <div class="tab-pane fade show @if($index == 0) active @endif" id="pills-{{$index}}" role="tabpanel" aria-labelledby="pills-{{$index}}">
                @php
                  if($type == 'upcoming'){
                    $events = DB::table(getCurrentLocale()."_news")->where('year', $row)->where("created_at", ">=", now())->orderBy("series","asc")->get();
                  }else{
                    $events = DB::table(getCurrentLocale()."_news")->where('year', $row)->orderBy("series","asc")->get();
                  }
                @endphp
                @if(!empty($events))
                <div class="row">
                @foreach($events as $index1 => $row1)
                <div class="col-md-4">
                    <div class="news_box">
                        <img class="w-100" src="{{asset($row1->image)}}">
                        <div class="news_content">
                              <p class="">{{$row1->name}}</p>
                        </div>  
                    </div>
                </div>
                @endforeach
                </div>
                @endif
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