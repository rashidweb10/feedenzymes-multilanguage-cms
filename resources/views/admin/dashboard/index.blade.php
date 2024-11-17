@extends('admin.layouts.app')
<!--, [$pageInfo]-->

@section('meta.title', __('label.dashboard'))
@section('meta.desc', __('label.dashboard'))
{{-- @section('page.name', __('label.dashboard')) --}}


@section('main.content')
<div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-success">
            <i class="fa-solid fa-shopping-cart"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text">{{__('label.products')}}</span>
            <span class="info-box-number">{{$productCount}}</span>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-info">
            <i class="fa-solid fa-list-alt"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text">{{__('label.product_categories')}}</span>
            <span class="info-box-number">{{$productCategoryCount}}</span>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-secondary">
            <i class="fa-solid fa-envelope"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text">{{__('label.enquiries')}}</span>
            <span class="info-box-number">{{$enquiryCount}}</span>
        </div>
    </div>
</div>
@endsection

@section('main.script')

@endsection