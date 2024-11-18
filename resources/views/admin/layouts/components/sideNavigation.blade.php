@php
$uri1 = Request::segment(1);
$uri2 = Request::segment(2);
$uri3 = Request::segment(2);
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url(route('admin.dashboard')) }}" class="brand-link">
        <img src="{{ url($SETTING->app_logo) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $SETTING->app_name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="{{__('label.nav_search')}}"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar border-0">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link @if($uri2 == 'dashboard') active @endif">
                        <i class="fa-solid fa-house"></i>
                        <p>{{__('label.dashboard')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.index')}}" class="nav-link @if($uri2 == 'pages') active @endif">
                        <i class="fa-solid fa fa-pencil"></i>
                        <p>{{__('label.pages')}}</p>
                    </a>
                </li>   
                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link @if($uri2 == 'news') active @endif">
                        <i class="fa-solid fa fa-newspaper"></i>
                        <p>{{__('label.news')}}</p>
                    </a>
                </li>                             
                {{--<li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link @if($uri2 == 'products') active @endif">
                        <i class="fa-solid fa-shopping-cart"></i>
                        <p>{{__('label.products')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('product-categories.index')}}"
                        class="nav-link @if($uri2 == 'product-categories') active @endif">
                        <i class="fa-solid fa-list-alt"></i>
                        <p>{{__('label.product_categories')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('enquiries.index')}}" class="nav-link @if($uri2 == 'enquiries') active @endif">
                        <i class="fa-solid fa-envelope"></i>
                        <p>{{__('label.enquiries')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url(route('admin.settings'))}}" class="nav-link @if($uri2 == 'settings') active @endif">
                        <i class="fa-solid fa-gear"></i>
                        <p>{{__('label.settings')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/clear-cache') }}" class="nav-link">
                        <i class="fa-solid fa-eraser"></i>
                        <p>{{__('label.c_cache')}}</p>
                    </a>
                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>