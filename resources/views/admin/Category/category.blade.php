@extends('layouts.admin')

@section('title', 'recep')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

          <td><a href="{{ route('adminCategoryAdd') }}"><button type="button" class="btn btn-primary">Add</button></td></a>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">title</th>
                    <th scope="col">slug</th>
                    <th scope="col">description</th>
                    <th scope="col">keywords</th>
                    <th scope="col">id</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dataList  as $data)
                    <tr>

                      <td><li> {{$data->title}} </li></td>
                      <td>{{ $data->slug }}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->keywords}}</td>
                      <td>{{$data->id}}</td>
                      <td>
                          {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}
                      </td>
                      <td><a href="{{ route('adminCategoryDestroy',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>
                      <td><a href="{{ route('adminCategoryEdit',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>




    </div>

@endsection
