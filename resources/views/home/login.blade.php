@extends('layouts.home')

@section('title', 'recep')

@section('preHeader')
    @include('home._preHeader')
@endsection


@section('header')
    @include('home._header')
@endsection


@section('content')

<form action="{{ route('loginCheck') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-sm-4 col-sm-offset-4">

            <form role="form" action="#">
            <div class="form-group">
              <label for="email-login">E-Mail</label>
              <input name="email" type="text" id="email-login" class="form-control">
            </div>
            <div class="form-group">
              <label for="password-login">Password</label>
              <input name="password" type="password" id="password-login" class="form-control">
            </div>
            <a href="javascript:;">Forgotten Password?</a>
            <div class="padding-top-20">
              <button class="btn btn-primary" type="submit">Login</button>
            </div>
            <hr>
            <div class="login-socio">
              <p class="text-muted">or login using:</p>
              <ul class="social-icons">
                <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
              </ul>
            </div>
          </form>
        </div>
    </div>
</form>

@endsection


@section('footer')
    @include('home._footer')
@endsection



