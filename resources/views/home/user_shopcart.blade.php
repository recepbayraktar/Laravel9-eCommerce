@extends('layouts.home')




@section('content')

<div class="main">
    <div class="container">
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
          <h1>Shopping cart</h1>
          <div class="goods-page">
            <div class="goods-data clearfix">
              <div class="table-wrapper-responsive">
              <table summary="Shopping cart">
                <tr>
                  <th class="goods-page-image">Image</th>
                  <th class="goods-page-description">Description</th>
                  <th class="goods-page-ref-no">Ref No</th>
                  <th class="goods-page-quantity">Quantity</th>
                  <th class="goods-page-price">Unit price</th>
                  <th class="goods-page-total" colspan="2">Total</th>
                </tr>
                @foreach ($dataList as $rs)
                <tr>
                    <td class="goods-page-image">
                      <a href="javascript:;"><img src="{{ Storage::url( $rs->product->image)}}" alt="Berry Lace Dress"></a>
                    </td>
                    <td class="goods-page-description">
                      <h3><a href="{{ route('product', ['id' => $rs->product->id , 'slug' => $rs->product->slug] ) }}">{{ $rs->product->title }}</a></h3>
                      <p><strong>{{ $rs->product->description }}</strong></p>
                      <em>{{!! $rs->product->detail !!}}</em>
                    </td>
                    <td class="goods-page-ref-no">
                      javc2133
                    </td>
                    <td class="goods-page-quantity">
                      <div class="product-quantity">
                          <input id="product-quantity" type="text" value="{{ $rs->quantity }}" max="{{ $rs->product->quantity }}" readonly class="form-control input-sm">
                      </div>
                    </td>
                    <td class="goods-page-price">
                      <strong><span>$</span>{{ $rs->product->price }}</strong>
                    </td>
                    <td class="goods-page-total">
                      <strong><span>$</span>{{ $rs->product->price * $rs->quantity }}</strong>
                    </td>
                    <td class="del-goods-col">
                      <a class="del-goods" href="{{ route('userShopcartDestroy', ['id' => $rs->id]) }}">&nbsp;</a>
                    </td>
                  </tr>
                @endforeach

              </table>
              </div>

              <div class="shopping-total">
                <ul>
                  <li>
                    <em>Sub total</em>
                    <strong class="price"><span>$</span></strong>
                  </li>
                  <li>
                    <em>Shipping cost</em>
                    <strong class="price"><span>$</span>3.00</strong>
                  </li>
                  <li class="shopping-total-price">
                    <em>Total</em>
                    <strong class="price"><span>$</span>50.00</strong>
                  </li>
                </ul>
              </div>
            </div>
            <a class="btn btn-default" href="{{ route('home') }}" role="button">Continue shopping <i class="fa fa-shopping-cart"></i></a>
            <button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->
    </div>
  </div>


@endsection
