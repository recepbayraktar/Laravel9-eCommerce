@extends('layouts.admin')

@section('title', 'recep')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

          <td><a href="{{ route('adminFaqAdd') }}"><button type="button" class="btn btn-primary">Add</button></td></a>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Position</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($dataList  as $data)
                    <tr>
                      <td><li> {{$data->position}} </li></td>
                      <td>{{ $data->question }}</td>
                      <td>{{$data->answer}}</td>
                      <td>{{$data->status}}</td>

                      <td><a href="{{ route('adminFaqDestroy',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>
                      <td><a href="{{ route('adminFaqEdit',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>




    </div>

@endsection
