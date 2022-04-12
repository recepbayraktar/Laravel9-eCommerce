
@php
$setting = App\Http\Controllers\HomeController::getSetting();
@endphp
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="useful_main border_right0">
                    <h2 class="useful_text">Menus</h2>
                    <ul >
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About </a></li>
                        <li><a href="company.html">Company</a></li>
                        <li><a href="furnitures.html">Furnitures</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 ">
               <h2 class="useful_text">Address</h2>
                 <ul class="location">
                        <li><img src="{{ asset('assets') }}/home/images/map-icon.png">{{ $setting->adress }}</li>

                        <li><img src="{{ asset('assets') }}/home/images/call-icon.png"><a href="company.html">{{ $setting->phone }}</a></li>
                        <li><img src="{{ asset('assets') }}/home/images/email-icon.png"><a href="furnitures.html">{{ $setting->email }}</a></li>

                    </ul>


            </div>
             <div class="col-lg-6 col-md-6 col-sm-6 ">
                <h2 class="useful_text">Newsletter</h2>
                <div class="form-group">
                    <input type="text" class="address_send" placeholder="Address" name="Email">
                <button class="subscribe_bt">Subscribe</button>
                 </div>


            </div>

            <div class="container">

                    <hr />
                        <div class="text-center center-block">
                            @if ($setting->facebook != null)
                                <a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                            @endif
                            @if ($setting->twitter != null)
                                 <a href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></i></a>
                            @endif
                            @if ($setting->instagram != null)
                                <a href="{{ $setting->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                            @endif


                </div>
                    <hr />
                </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright">
    <div class="container">
        <p class="copyright_text">Copyright 2019 All Right Reserved By.<a
    </div>
</div>
<!-- copyright section end -->
