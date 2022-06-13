 <!-- BEGIN PRE-FOOTER -->

 @php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp

<div class="row">
    <div class="pre-footer">
        <div class="container">
          <div class="row">

            <div class="col-md-4 col-sm-6 pre-footer-col">
              <h2>Information</h2>
              <ul class="list-unstyled">
                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
              </ul>
            </div>
            <!-- END INFO BLOCK -->

            <!-- BEGIN TWITTER BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
              <h2 class="margin-bottom-0">Latest Tweets</h2>
              <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
            </div>
            <!-- END TWITTER BLOCK -->

            <!-- BEGIN BOTTOM CONTACTS -->
            <div class="col-md-4 col-sm-6 pre-footer-col">
              <h2>Our Contacts</h2>
              <address class="margin-bottom-40">
                {{ $setting->address }}
                Email: <a href="mailto:info@metronic.com">{{ $setting->email }}</a><br>
              </address>
            </div>
            <!-- END BOTTOM CONTACTS -->
          </div>
          <hr>
          <div class="row">
            <!-- BEGIN SOCIAL ICONS -->
            <div class="col-md-6 col-sm-6">
              <ul class="social-icons">

                <li><a class="facebook" data-original-title="facebook" href="{{ $setting->facebook  }}"></a></li>
                <li><a class="twitter" data-original-title="twitter" href="{{ $setting->twitter }}"></a></li>
                <li><a class="youtube" data-original-title="youtube" href="{{ $setting->youtube }}"></a></li>
                <li><a class="vimeo" data-original-title="vimeo" href="{{ $setting->instagram }}"></a></li>
              </ul>
            </div>
            <!-- END SOCIAL ICONS -->
            <!-- BEGIN NEWLETTER -->
            <div class="col-md-6 col-sm-6">
              <div class="pre-footer-subscribe-box pull-right">
                <h2>Newsletter</h2>
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="{{ $setting->email }}" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Subscribe</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <!-- END NEWLETTER -->
          </div>
        </div>
    </div>
      <!-- END PRE-FOOTER -->

      <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
          <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-4 col-sm-4 padding-top-10">
                {{ $setting->title }}
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->
            <div class="col-md-4 col-sm-4">
              <ul class="list-unstyled list-inline pull-right">
                <li><img src="{{ asset('assets') }}/home/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
                <li><img src="{{ asset('assets') }}/home/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
                <li><img src="{{ asset('assets') }}/home/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
                <li><img src="{{ asset('assets') }}/home/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
                <li><img src="{{ asset('assets') }}/home/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
              </ul>
            </div>
            <!-- END PAYMENTS -->
            <!-- BEGIN POWERED -->
            <div class="col-md-4 col-sm-4 text-right">
              <p class="powered">Powered by: <a href="">{{ $setting->title }}</a></p>
            </div>
            <!-- END POWERED -->
          </div>
        </div>
    </div>
</div>
  <!-- END FOOTER -->
