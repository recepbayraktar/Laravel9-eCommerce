 <!-- BEGIN NAVIGATION -->
 <div class="header-navigation">
    <ul>
      @include('home._category')
      <li><a href="{{ route('aboutus') }}">About</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      <li class="dropdown dropdown100 nav-catalogue">
        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
          New

        </a>
        <ul class="dropdown-menu">
          <li>
            <div class="header-navigation-content">
              <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <a href="shop-item.html"><img src="{{ asset('assets') }}/home/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                    </div>
                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                    <div class="pi-price">$29.00</div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <a href="shop-item.html"><img src="{{ asset('assets') }}/home/pages/img/products/model3.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                    </div>
                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                    <div class="pi-price">$29.00</div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <a href="shop-item.html"><img src="{{ asset('assets') }}/home/pages/img/products/model7.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                    </div>
                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                    <div class="pi-price">$29.00</div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <a href="shop-item.html"><img src="{{ asset('assets') }}/home/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                    </div>
                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                    <div class="pi-price">$29.00</div>
                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </li>

      <!-- BEGIN TOP SEARCH -->
      <li class="menu-search">
        <span class="sep"></span>
        <i class="fa fa-search search-btn"></i>
        <div class="search-box">
          <form action="#">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Search</button>
              </span>
            </div>
          </form>
        </div>
      </li>
      <!-- END TOP SEARCH -->
    </ul>
  </div>
  <!-- END NAVIGATION -->
