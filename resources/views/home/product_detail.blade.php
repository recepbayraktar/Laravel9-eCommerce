@extends('layouts.home')

@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp

@section('content')
<div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="">Store</a></li>
          <li class="active">Cool green dress with red bell</li>
      </ul>
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar col-md-3 col-sm-5">
          <ul class="list-group margin-bottom-25 sidebar-menu">
            <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
            <li class="list-group-item clearfix dropdown active">
              <a href="shop-product-list.html" class="collapsed">
                <i class="fa fa-angle-right"></i>
                Mens
              </a>
              <ul class="dropdown-menu" style="display:block;">
                <li class="list-group-item dropdown clearfix active">
                  <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                    <ul class="dropdown-menu" style="display:block;">
                      <li class="list-group-item dropdown clearfix">
                        <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                        <ul class="dropdown-menu">
                          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                        </ul>
                      </li>
                      <li class="list-group-item dropdown clearfix active">
                        <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                        <ul class="dropdown-menu" style="display:block;">
                          <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                        </ul>
                      </li>
                    </ul>
                </li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
              </ul>
            </li>

          </ul>


        </div>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-7">
          <div class="product-page">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="product-main-image">
                  <img src="{{ Storage::url($data->image) }}" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="{{ Storage::url($data->image) }}">
                </div>
                <div class="product-other-images">
                    @foreach ($dataList as $rs)
                        <a href="{{ Storage::url($rs->image) }}" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="{{ Storage::url($rs->image) }}"></a>
                    @endforeach


                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                  @php
                      $avgrev = \App\Http\Controllers\HomeController::avgreview($data->id);

                      $countReview = \App\Http\Controllers\HomeController::countReview($data->id);
                  @endphp
                <h1>{{ $data->title }}</h1>
                <div class="price-availability-block clearfix">
                  <div class="price">
                    <strong><span>$</span>{{ $data->price }}</strong>
                    <em>$<span>{{ $data->price * 2}}</span></em>
                  </div>
                  <div class="availability">
                    Availability:@if($data->status != 'false') <strong>Insaddas Stock</strong> @else <strong>Not In Stock</strong> @endif
                  </div>
                </div>
                <div class="description">
                    {{ $data->description }}</p>
                </div>
                <div class="product-page-options">
                  <div class="pull-left">
                    <label class="control-label">Size:</label>
                    <select class="form-control input-sm">
                      <option>L</option>
                      <option>M</option>
                      <option>XL</option>
                    </select>
                  </div>
                  <div class="pull-left">
                    <label class="control-label">Color:</label>
                    <select class="form-control input-sm">
                      <option>Red</option>
                      <option>Blue</option>
                      <option>Black</option>
                    </select>
                  </div>
                </div>
                <div class="product-page-cart">
                 <form action="{{ route('userShopcartAdd', ['id' => $data->id]) }}">
                    <div class="product-quantity">
                        <input id="product-quantity" name="quantity" type="text" value="1" max="{{ $data->quantity }}" readonly class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                 </form>
                </div>
                <div class="review">
                  <input type="range" value="4" step="0.25" id="backing4">
                  <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                  </div>
                  <a href="javascript:;">{{ $countReview }} reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;">Write a review</a>
                </div>
                <ul class="social-icons">
                  <li><a class="facebook" data-original-title="facebook" href="{{ $setting->facebook }}"></a></li>
                  <li><a class="twitter" data-original-title="twitter" href="{{ $setting->twitter }}"></a></li>
                  <li><a class="youtube" data-original-title="youtube" href="{{ $setting->youtube }}"></a></li>
                  <li><a class="instagram" data-original-title="instagram" href="{{ $setting->instagram }}"></a></li>
                </ul>
              </div>

              <div class="product-page-content">
                <ul id="myTab" class="nav nav-tabs">
                  <li><a href="#Description" data-toggle="tab">Description</a></li>
                  <li><a href="#Information" data-toggle="tab">Information</a></li>
                  <li class="active"><a href="#Reviews" data-toggle="tab">Reviews {{ $countReview }}</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade" id="Description">
                    <p>{{ $data->description }}</p>
                  </div>
                  <div class="tab-pane fade" id="Information">
                    <table class="datasheet">
                      <tr>
                        <th colspan="2">Additional features</th>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 1</td>
                        <td>21 cm</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 2</td>
                        <td>700 gr.</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 3</td>
                        <td>10 person</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 4</td>
                        <td>14 cm</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 5</td>
                        <td>plastic</td>
                      </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade in active" id="Reviews">
                    @foreach ($reviews as $rs)
                    <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>{{ $rs->user->name }}</strong>
                          <em>{{ $rs->created_at }}</em>
                          <div class="review-rating">
                            <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>
                          </div>
                        </div>
                        <div class="review-item-content">
                            <strong>{{ $rs->subject }}</strong>
                            <p>{{ $rs->review }}</p>
                        </div>
                      </div>
                    @endforeach


                    <!-- BEGIN FORM-->
                    <!-- END FORM-->

                    @livewire('review', ['id' => $data->id])
                  </div>
                </div>



            </div>

              <div class="sticker sticker-sale"></div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->

      <!-- BEGIN SIMILAR PRODUCTS -->
      <div class="row margin-bottom-40">
        <div class="col-md-12 col-sm-12">
          <h2>Most popular products</h2>
          <div class="owl-carousel owl-carousel4">
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                <div class="pi-price">$29.00</div>
                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">$29.00</div>
                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                <div class="pi-price">$29.00</div>
                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                <div class="pi-price">$29.00</div>
                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                <div class="sticker sticker-sale"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                <div class="pi-price">$29.00</div>
                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                <div class="pi-price">$29.00</div>
                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END SIMILAR PRODUCTS -->
    </div>
  </div>
@endsection


@section('javascript')
<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
<script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>

<script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
@endsection
