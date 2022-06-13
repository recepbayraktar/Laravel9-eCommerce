<div class="main">
    <div class="container">
      <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product">
          <h2>New Arrivals</h2>
          <div class="owl-carousel owl-carousel5">
            @foreach ($last as $rs)
            <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{ Storage::url($rs->image) }}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="{{ Storage::url($rs->image) }}" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="{{ route('product', ['id' => $rs->id , 'slug' => $rs->slug] ) }}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="{{ route('product', ['id' => $rs->id , 'slug' => $rs->slug] ) }}">{{ $rs->title }}</a></h3>
                  <div class="pi-price">{{ $rs->title }}</div>
                  <a href="{{ route('userShopcartAdd', ['id' => $rs->id]) }}" class="btn btn-default add2cart">Add to cart</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!-- END SALE PRODUCT -->

        <div class="col-md-12 sale-product">
            <h2>Daily</h2>
            <div class="owl-carousel owl-carousel5">
              @foreach ($daily as $rs)
              <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="{{ Storage::url($rs->image) }}" class="img-responsive" alt="Berry Lace Dress">
                      <div>
                        <a href="{{ Storage::url($rs->image) }}" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="{{ route('product', ['id' => $rs->id , 'slug' => $rs->slug] ) }}" class="btn btn-default fancybox-fast-view">View</a>
                      </div>
                    </div>
                    <h3><a href=" {{ route('product', ['id' => $rs->id , 'slug' => $rs->slug] ) }}">{{ $rs->title }}</a></h3>
                    <div class="pi-price">{{ $rs->title }}</div>
                    <a href="{{ route('userShopcartAdd', ['id' => $rs->id]) }}" class="btn btn-default add2cart">Add to cart</a>
                    <div class="sticker sticker-sale"></div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
      </div>
      <!-- END SALE PRODUCT & NEW ARRIVALS -->


    </div>
  </div>
