@extends('frontend.layouts.master')
@section('title', 'Indivisual Enzymes')
@section('content')

@php
    $contents = json_decode($data->contents);  // Decode as an object (default behavior)
    $nspEnzymes = $contents->nspEnzymes ?? [];
    $digestiveEnzymes = $contents->digestiveEnzymes ?? [];
    $phytaseEnzymes = $contents->phytaseEnzymes ?? [];   

@endphp

<x-inner-page-breadcrumb />

<section class="aboutus_section about_sec_right padtop60 padbtm50 marg25 position-relative ">
  <div class="container">
    <h3 class="manufacture-btn button_postion">{{__('messages.tagline')}}</h3>
    <div class="row">
      <div class="col-md-12 order-1 order-md-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
        <div class="">
          
          <h4>NSP Enzymes !!!</h4>
          <div class="accordion" id="accordionEnzymeList">
            @foreach($nspEnzymes as $item)
                @if($item->p1_status == 'active')
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEnzyme{{ Str::slug($item->p1_title) }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnzyme{{ Str::slug($item->p1_title) }}" aria-expanded="true" aria-controls="collapseEnzyme{{ Str::slug($item->p1_title) }}">
                                {{ $item->p1_title }}
                            </button>
                        </h2>
                        <div id="collapseEnzyme{{ Str::slug($item->p1_title) }}" class="accordion-collapse collapse" aria-labelledby="headingEnzyme{{ Str::slug($item->p1_title) }}" data-bs-parent="#accordionEnzymeList">
                            <div class="accordion-body">
                                {!! $item->p1_description !!}
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
          </div>

          <h4 class="mt-3">Digestive enzymes !!!</h4>
            <div class="accordion" id="accordionEnzymeList">
              @foreach($digestiveEnzymes as $item)
                  @if($item->p2_status == 'active')
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEnzyme{{ Str::slug($item->p2_title) }}">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnzyme{{ Str::slug($item->p2_title) }}" aria-expanded="true" aria-controls="collapseEnzyme{{ Str::slug($item->p2_title) }}">
                                  {{ $item->p2_title }}
                              </button>
                          </h2>
                          <div id="collapseEnzyme{{ Str::slug($item->p2_title) }}" class="accordion-collapse collapse" aria-labelledby="headingEnzyme{{ Str::slug($item->p2_title) }}" data-bs-parent="#accordionEnzymeList">
                              <div class="accordion-body">
                                  {!! $item->p2_description !!}
                              </div>
                          </div>
                      </div>
                  @endif
              @endforeach
            </div> 
            
            <h4 class="mt-3">Phytase enzymes !!!</h4>
            <div class="accordion" id="accordionEnzymeList">
              @foreach($phytaseEnzymes as $item)
                  @if($item->p3_status == 'active')
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEnzyme{{ Str::slug($item->p3_title) }}">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnzyme{{ Str::slug($item->p3_title) }}" aria-expanded="true" aria-controls="collapseEnzyme{{ Str::slug($item->p3_title) }}">
                                  {{ $item->p3_title }}
                              </button>
                          </h2>
                          <div id="collapseEnzyme{{ Str::slug($item->p3_title) }}" class="accordion-collapse collapse" aria-labelledby="headingEnzyme{{ Str::slug($item->p3_title) }}" data-bs-parent="#accordionEnzymeList">
                              <div class="accordion-body">
                                  {!! $item->p3_description !!}
                              </div>
                          </div>
                      </div>
                  @endif
              @endforeach
          </div>           

        </div>
      </div>
    </div>
  </div>
</section>
@endsection