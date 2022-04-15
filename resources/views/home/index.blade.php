@extends('layouts.home')

{{-- @php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp
 --}}
@section('keywords')
    {{ $setting->keywords }}
@endsection

@section('description')
    {{ $setting->description }}
@endsection

@section('company')
    {{ $setting->description }}
@endsection

@section('preHeader')
    @include('home._preHeader')
@endsection


@section('header')
    @include('home._header')
@endsection

@section('slider')
    @include('home._slider')
@endsection


@section('content')
    @include('home._content')
@endsection

@section('footer')
    @include('home._footer')
@endsection


