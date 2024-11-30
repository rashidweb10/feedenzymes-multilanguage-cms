@extends('admin.layouts.app')
<!--, [$pageInfo]-->

@section('meta.title', __('label.dashboard'))
@section('meta.desc', __('label.dashboard'))
{{-- @section('page.name', __('label.dashboard')) --}}


@section('main.content')
<x-info-box 
    :bg="'bg-success'" 
    :icon="'fa-pencil'" 
    :label="'Pages'" 
    :url="route('pages.index')" 
    :count="$pageCount"
/>

<x-info-box 
    :bg="'bg-primary'" 
    :icon="'fa-calendar'" 
    :label="'Events'" 
    :url="route('news.index')" 
    :count="$newsCount"
/>
<x-info-box 
    :bg="'bg-warning'" 
    :icon="'fa-wrench'" 
    :label="'Products'" 
    :url="route('the-products.index')" 
    :count="$productionCount"
/>
@endsection

@section('main.script')

@endsection