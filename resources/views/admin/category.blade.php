@extends('layouts.admin')

@section('title', 'recep')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
         
          <td><a href="{{ route('adminCategoryAdd') }}"><button type="button" class="btn btn-primary">Add</button></td></a>
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
                      <td><li> Adı {{$data->title}} </li></td>
                      <td>{{ $data->slug }}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->keywords}}</td>
                      <td>{{$data->slug}}</td>
                      <td><a href="{{ route('adminCategoryDestroy',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>
                      <td><a href="{{ route('adminCategoryEdit',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              
              
              
          
    </div>

@endsection
