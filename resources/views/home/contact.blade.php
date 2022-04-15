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

@section('content')
   <!-- BEGIN CONTENT -->
   <div class="row">
    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
        <h1>About us</h1>
        <div class="content-page">
            {{!! $setting->aboutus !!}}
        </div>
    </div> <!-- END CONTENT -->
</div>
@endsection
