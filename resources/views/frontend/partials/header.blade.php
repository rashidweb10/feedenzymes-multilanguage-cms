@php
$logo = DB::table('settings')->first()->app_logo;
$categories = DB::table('product_categories')->where('is_active', 1)->get();
@endphp
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="mobile-screen-logo">
            <a href="index.html" class="logo"><img src="{{ asset($logo) }}" class="img-fluid" alt=""></a>
        </div>
        <nav id="navbar" class="navbar">
            <ul class="m-auto">
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link scrollto active" href="{{ url('about-us') }}">About Us</a></li>
                <!--<li><a class="nav-link scrollto active" href="{{ url('contact-us') }}">Contact Us</a></li>-->
                <li><a class="nav-link scrollto active" href="{{ url('order') }}">Products</a></li>
                <li class="logo-link">
                    <a href="{{ url('/') }}" class="logo"><img src="{{ asset($logo) }}" class="img-fluid" alt=""></a>
                </li>
                @foreach($categories as $category)
                <li><a @if($category->id == request()->slug) style="border: 1px solid #fff;" @endif class="nav-link
                        scrollto"
                        href="{{ url('category', [$category->id]) }}">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle ms-auto"></i>
        </nav>
    </div>
</header>