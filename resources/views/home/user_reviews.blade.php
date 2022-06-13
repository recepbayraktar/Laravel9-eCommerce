@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">

        @include('home.user_sidebar')
        <div class="col-md-8 col-sm-8">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">status</th>
                    <th scope="col">review</th>
                    <th scope="col">Date</th>
                    <th scope="col">Rate</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dataList  as $data)
                    <tr>

                      <td><li> {{$data->product->title}} </li></td>
                      <td>{{ $data->status }}</td>
                      <td>{{$data->review}}</td>
                      <td>{{$data->created_at}}</td>
                      <td>{{$data->rate}}</td>

                      <td><a href="{{ route('destroyReview',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>

                    </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection
