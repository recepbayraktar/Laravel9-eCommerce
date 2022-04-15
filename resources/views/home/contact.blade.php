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
    <div class="container">
        <div class="row">
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-3 col-sm-3">
                  <ul class="list-group margin-bottom-25 sidebar-menu">
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Login/Register</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Restore Password</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> My account</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Address book</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Wish list</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Returns</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
                  </ul>

                  <h2>Our Contacts</h2>
                  <address>
                    35, Lorem Lis Street, Park Ave<br>
                    California, US<br>
                    <abbr title="Phone">P:</abbr> 300 323 3456<br>
                  </address>
                  <address>
                    <strong>Email</strong><br>
                    <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                    <a href="mailto:support@metronic.com">support@metronic.com</a>
                  </address>
                  <ul class="social-icons margin-bottom-10">
                    <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
                    <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
                    <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
                    <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
                    <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
                  </ul>
                </div>
                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-9">
                  <h1>Contact</h1>
                  <div class="content-page">
                    <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>

                    <h2>Contact Form</h2>
                    <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

                    <!-- BEGIN FORM-->
                    <form action="{{ route('sendMessage') }}" method="POST" class="default-form" role="form">
                        @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email <span class="require">*</span></label>
                        <input name="email" type="text" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input name="subject" type="text" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="8" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">phone</label>
                        <input name="phone" type="number" class="form-control" id="name">
                      </div>
                      <div class="padding-top-20">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                    <!-- END FORM-->
                  </div>
                </div>
                <!-- END CONTENT -->
              </div>
        </div>
    </div>
@endsection
