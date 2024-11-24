@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
<h3>Main {{ getCurrentLocale() }}</h3>
<p>{{__('messages.let_us_make_innovative_solutions')}}</p>
@endsection