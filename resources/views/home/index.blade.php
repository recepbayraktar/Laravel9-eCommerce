@extends('layouts.home')

@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp

@section('keywords')
    {{ $setting->keywords }}
@endsection

@section('description')
    {{ $setting->description }}
@endsection

@section('company')
    {{ $setting->description }}
@endsection



@section('slider')
    @include('home._slider')
@endsection


@section('content')
    @include('home._content')
@endsection

