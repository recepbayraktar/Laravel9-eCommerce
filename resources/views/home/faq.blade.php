@extends('layouts.home')

@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp


@section('javascript')

 <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
 <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
 <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

 <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
 <script type="text/javascript">
     jQuery(document).ready(function() {
         Layout.init();
         Layout.initOWL();
         Layout.initTwitter();
     });
 </script>
 <!-- END PAGE LEVEL JAVASCRIPTS -->
 @endsection


@section('content')


    <div class="container">

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

            @include('home.user_sidebar')

            <div class="col-md-8 col-sm-8">
                <h1>Frequently Asked Questions</h1>
                @foreach ($data as $rs)
                <div class="faq-page">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                              {!! $rs->question !!}
                              </a>
                           </h4>
                        </div>
                        <div id="accordion1_1" class="panel-collapse collapse  in">
                           <div class="panel-body">
                             {!! $rs->answer !!}
                           </div>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
        </div>
    </div>
@endsection

