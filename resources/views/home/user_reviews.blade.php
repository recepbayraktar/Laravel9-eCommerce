@extends('layouts.home')

@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp



@include('home.user_sidebar')


@section('content')
<div class="row">
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

              <td><a href="{{ route('adminReviewDelete',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>

            </tr>
          @endforeach
        </tbody>
      </table>

</div>

@endsection
