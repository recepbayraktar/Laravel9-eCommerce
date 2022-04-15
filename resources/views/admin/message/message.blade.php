@extends('layouts.admin')

@section('title', 'recep')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Price</th>
                    <th scope="col">subject</th>
                    <th scope="col">note</th>
                    <th scope="col">message</th>

                  </tr>
                </thead>
                <tbody>

                  @foreach($dataList  as $data)
                    <tr>
                      <td><li> {{$data->name}} </li></td>
                      <td>{{ $data->email }}</td>
                      <td>{{$data->phone}}</td>
                      <td>{{$data->subject}}</td>
                      <td>{{$data->note}}</td>
                      <td>{{$data->message}}</td>
                      <td><a href="{{ route('adminMessageDestroy',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>
                      <td><a href="{{ route('adminMessageEdit',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>




    </div>

@endsection
