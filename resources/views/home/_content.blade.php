<div class="main">
    <div class="container">
      <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product">
          <h2>New Arrivals</h2>
          <div class="owl-carousel owl-carousel5">
            @foreach ($all as $rs)
            <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{ Storage::url($rs->image) }}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="{{ Storage::url($rs->image) }}" class="btn btn-default fancybox-button">Zoom</a>
                      <a href="{{ route('product', ['id' => $rs->id , 'slug' => $rs->slug] ) }}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">{{ $rs->title }}</a></h3>
                  <div class="pi-price">{{ $rs->title }}</div>
                  <a href="{{ route('addToCart', ['id' => $rs->id]) }}:;" class="btn btn-default add2cart">Add to cart</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!-- END SALE PRODUCT -->
      </div>
      <!-- END SALE PRODUCT & NEW ARRIVALS -->


    </div>
  </div>
