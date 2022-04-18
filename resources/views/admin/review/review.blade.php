@extends('layouts.admin')

@section('title', 'recep')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">status</th>
                    <th scope="col">user</th>
                    <th scope="col">review</th>
                    <th scope="col">subject</th>
                    <th scope="col">rate</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dataList  as $data)
                    <tr>

                      <td><li> {{$data->status}} </li></td>
                      <td>{{ $data->user->name }}</td>
                      <td>{{$data->review}}</td>
                      <td>{{$data->subject}}</td>
                      <td>{{$data->rate}}</td>

                      <td><a href="{{ route('adminReviewEdit', ['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>

    </div>

@endsection
