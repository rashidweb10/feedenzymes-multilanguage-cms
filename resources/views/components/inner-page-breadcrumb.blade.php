@php
    $data = DB::table(getCurrentLocale()."_pages")->where("id", 5)->first();
    $contents = json_decode($data->contents);
    $banner_title = $contents->banner_title ?? '';
    $banner_image = $contents->banner_image ?? '';
    $banner_description = $contents->banner_description ?? '';
@endphp

<section class="internal_section">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-6">
      <div class="internal_content">
        <h3 class="robot_slab fw-normal fs-3 pb-2">{{$banner_title}}</h3>
        <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="aos-init aos-animate">
            {!! $banner_description !!}
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="main_banner_image">
        <img class="w-100 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" src="{{asset($banner_image)}}">
      </div>
    </div>
  </div>
</section>