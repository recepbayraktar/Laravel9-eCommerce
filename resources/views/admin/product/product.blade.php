@extends('layouts.admin')

@section('title', 'recep')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
         
          <td><a href="{{ route('adminProductAdd') }}"><button type="button" class="btn btn-primary">Add</button></td></a>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dataList  as $data)
                    <tr>
                      <th scope="row">1</th>
                      <td><li> {{$data->title}} </li></td>
                      <td>{{ $data->slug }}</td>
                      <td>{{$data->price}}</td>
                      <td>{{$data->quantity}}</td>
                      <td>{{$data->status}}</td>
                      <td>{{$data->category_id}}</td>
                      <td>{{$data->id}}</td>
                      <td><a href="{{ route('adminProductDestroy',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>
                      <td><a href="{{ route('adminProductEdit',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              
              
              
          
    </div>

@endsection
