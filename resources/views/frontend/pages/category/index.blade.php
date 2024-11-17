@extends('frontend.layouts.master')
@section('title', 'About')
@section('content')
@php
$category = DB::table('product_categories')->where('id', request()->slug)->first();
$products = DB::table('products')->where('category_id', request()->slug)->where('is_active', 1)->get();
@endphp
<style>
    header #navbar ul li:nth-child(5) a.active {
        border: 1px solid #fff;
    }

    .footer-link:nth-child(5) a.active {
        border: 1px solid #000;
    }
    
@media (max-width: 425px) {
      header #navbar ul li:nth-child(5) a.active {
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
    
    #cagegories #page{
        padding:3px 10px;
    }
</style>

<section class="page-banner" id="page-banner">
    <img src="{{ asset('assets/frontend/images/c-bg (1).jpg') }}" class="img-fluid" alt="Page Banner">
</section>

<main class="cagegories" id="cagegories">
    <section id="page">
        <div class="container py-5 ">
            <div class="section-header">
                <span>{{$category->name}}</span>
                <h2>{{$category->name}}</h2>
            </div>
            <div class="row gx-5 gy-4">


                <style>
                    figure.snip1384 {
                        position: relative;
                        overflow: hidden;
                        width: 100%;
                        color: #ffffff;
                        text-align: left;
                        font-size: 16px;
                        background-color: transparent;
                        border: 1px solid #ddd;
                        padding: 5px;
                    }

                    figure.snip1384:hover {
                        transform: translateY(-15px) !important;
                        /*box-shadow: 0px 12px 12px rgba(0, 0, 0, 0.4);*/
                    }

                    figure.snip1384 * {
                        -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                        -webkit-transition: all 0.35s ease;
                        transition: all 0.35s ease;
                    }

                    figure.snip1384 img {
                        max-width: 100%;
                        backface-visibility: hidden;
                        vertical-align: top;
                    }

                    figure.snip1384:after,
                    figure.snip1384 figcaption {
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                    }

                    figure.snip1384:after {
                        content: '';
                        background-color: #ef682e5c;
                        -webkit-transition: all 0.35s ease;
                        transition: all 0.35s ease;
                        opacity: 0;
                    }

                    figure.snip1384 figcaption {
                        z-index: 1;
                        padding: 20px;
                    }

                    figure.snip1384 h3,
                    figure.snip1384 .links {
                        width: 100%;
                        margin: 5px 0;
                        padding: 0;
                    }

                    figure.snip1384 h3 {
                        line-height: 1.1em;
                        font-weight: 19px;
                        font-size: 1.4em;
                        text-transform: uppercase;
                        opacity: 0;
                        text-align: center;
                    }

                    figure.snip1384 .bnt {
                        font-size: 14px;
                        font-weight: 500;
                        letter-spacing: normal;
                        opacity: 0;
                        top: 50%;
                        -webkit-transform: translateY(40px);
                        transform: translateY(40px);
                        color: #444;
                        line-height: 22px;
                        font-size: 15px;
                        text-align: center;
                        padding: 3px 10px;
                        background-color: #fff;
                        border-radius: 4px;
                        margin-top: 10px;
                    }


                    figure.snip1384 .bnt:hover {
                        background-color: var(--color-primary);
                        box-shadow: 0px 0.1px 5px #fff;
                        color: #fff;
                    }

                    figure.snip1384 i {
                        position: absolute;
                        bottom: 10px;
                        right: 10px;
                        padding: 20px 25px;
                        font-size: 34px;
                        opacity: 0;
                        -webkit-transform: translateX(-10px);
                        transform: translateX(-10px);
                    }

                    figure.snip1384 a {
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        z-index: 1;
                    }

                    figure.snip1384:hover img,
                    figure.snip1384.hover img {
                        zoom: 1;
                        filter: alpha(opacity=90);
                        -webkit-opacity: 0.9;
                        opacity: 0.9;
                    }

                    figure.snip1384:hover:after,
                    figure.snip1384.hover:after {
                        opacity: 1;
                        position: absolute;
                        top: 10px;
                        bottom: 10px;
                        left: 10px;
                        right: 10px;
                    }

                    figure.snip1384:hover h3,
                    figure.snip1384.hover h3,
                    figure.snip1384:hover .bnt,
                    figure.snip1384.hover .bnt,
                    figure.snip1384:hover i,
                    figure.snip1384.hover i {
                        -webkit-transform: translate(0px, 0px);
                        transform: translate(0px, 0px);
                        opacity: 1;
                    }


                    .fname {
                        position: absolute;
                        bottom: 30px;
                        transform: translateX(35%);
                        font-size: 24px;
                    }


                    .fname {
                        position: absolute;
                        bottom: 30px;
                        transform: translateX(35%);
                        font-size: 24px;
                    }

                    figure.snip1384:hover .fname {
                        opacity: 0;
                    }



                    @media (min-width: 425px) {
                        .section-header h2 {
                            font-size: 21px !important;
                        }

                        .section-header span {
                            font-size: 44px;
                        }

                        figure.snip1384 h3 {
                            line-height: 1em;
                            font-weight: 18px;
                            font-size: 14px;

                        }

                        #cagegories #page .gy-4 {
                            --bs-gutter-y: 0.5rem !important;
                        }

                        #cagegories #page .gx-5 {
                            --bs-gutter-x: 1.4rem !important;
                        }
                        
                        .gx-5 {
    --bs-gutter-x: 1.4rem !important;
}

  


                    }
                    
                    
                    
                    
                      @media (min-width: 425px) {
                            #cagegories .gx-5 {
--bs-gutter-y: 0.5rem !important;  
}

    #cagegories .gy-4 {
--bs-gutter-y: 1.5rem !important;  
}
                      }
                      
                       @media (min-width: 325px) {
                            #cagegories .gx-5 {
--bs-gutter-y: 0.5rem !important;  
}

    #cagegories .gy-4 {
--bs-gutter-y: 1.5rem !important;  
}
                      }
                      
                       @media (min-width: 375px) {
                             .gx-5 {
--bs-gutter-y: 0.5rem !important;  
}

  .gy-4 {
--bs-gutter-y: 1.5rem !important;  
}
                      }
                    
                    
                    
                </style>
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <figure class="snip1384" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset($product->image) }}" class="img-fluid" alt="Masale">

                        <figcaption>
                            <h3>{{$product->name}}</h3>
                            <div class="bnt text-center"><a href="{{url('order') . '?product_id='.$product->id.'&category_id='.$product->category_id}}" class=""></a>Order Now</div>
                        </figcaption>
                    </figure>
                </div>
                @endforeach


            </div>

        </div>
    </section>
</main>

<style>
    .img-responsive {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .card {
        box-shadow: 0 2px 3px -1px #DCDCDC;
        overflow: hidden;
    }

    .card-wraped {
        padding-right: 15px;
        padding-left: 15px;
    }

    .card {
        box-sizing: border-box;
        margin-bottom: 30px;
        background-color: #fff;
        background-clip: padding-box;
        -webkit-transition: all .5s;
        transition: all .5s;
    }




    .card .card-image {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid #ddd;
        -webkit-transition: all .5s;
        transition: all .5s;
    }


    .card .card-image img {
        position: initial;
        z-index: -1;
        border-radius: 2px 2px 0 0;
        background-clip: padding-box;
        opacity: .9;
        -webkit-transition: all .5s;
        transition: all .5s;
        transform: scale(0.9);
    }


    .card:hover .card-image {
        background-color: rgba(210, 210, 210, 0.2);
    }

    .card:hover img {
        transform: scale(0.94);

    }


    .card .card-content {
        position: relative;
        box-sizing: border-box;
        padding: 10px;
        border-radius: 0 0 2px 2px;
        background-clip: padding-box;
    }

    .card .card-content p {
        margin: 0 0 10px;
    }

    .card .card-price {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 2px 5px;
        background-color: #fff;
        box-shadow: 1px 2px 1px rgba(94, 93, 99, .08), 0 1px 2px rgba(61, 60, 66, .12);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 500;
        font-size: 11px;
    }

    .card .card-action {
        padding: 5px 10px;
        border-top: 1px solid rgba(160, 160, 160, .2);
        background: #f9f9f9;
    }

    .card .card-action a {
        margin-right: 5px;
        color: #3b3b3b;
        font-size: 12px;
        -webkit-transition: color .3s ease;
        transition: color .3s ease;
    }

    .card .card-action a i {
        margin-right: 2px;
    }

    .card-action a.save i {
        color: #da2a66;
    }



    .card .card-action a span {
        color: #333f48;
    }

    .listingInfo {
        position: relative;
    }

    .listingInfo {
        clear: both;
        padding: 0;
    }



    .listingInfo .propertyStats {
        margin-top: 3px;
        margin-bottom: 0;
        min-height: 25px;
    }

    /* .product_name {
        margin-right: 130px;
    } */

    .vcard {
        min-height: 45px;
    }

    .vcard h2 {
        margin: 0 0 7px;
        font-weight: 500;
        font-size: 16px;
        color: #777;
    }

    .quantity_tag {
        font-size: 16px;
    }

    .quantity_tag i {
        padding-right: 8px;
    }

    .card.card-horizontal .card-image {
        display: block;
        height: 230px;
    }

    .card.card-horizontal .card-content {
        width: 100%;
        height: 230px;
    }

    .card.card-horizontal .card-content .card-action {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .card.card-horizontal .card-content .listingInfo {
        display: table-cell;
        height: 155px;
        vertical-align: middle;
    }

    .card.card-horizontal .card-content .product_name {
        margin-bottom: 0;
        color: #000;
        font-weight: 700;
        font-size: 18px;
        text-transform: uppercase !important;
    }

    .card.card-horizontal .card-content .vcard h2 {
        margin: 8px 0 15px;
        font-size: 20px;
    }


    .order-btn {
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        height: 100%;
        width: 100%;
        border: 1px solid #ddd;
        color: #000;
    }


    .order-btn:hover {
        background-color: var(--color-primary);
        color: #fff;
        border: 1px solid var(--color-primary);
    }

    .order-btn:hover a {
        color: #fff;
    }
</style>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection