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
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Image Gallery</th>
                    <th scope="col">Category Id</th>
                    <th scope="col">Id</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($dataList  as $data)
                    <tr>
                      <th scope="row">1</th>
                      <td><li> {{$data->title}} </li></td>
                      <td>{{ $data->slug }}</td>
                      <td> {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</td>
                      <td>{{$data->price}}</td>
                      <td>{{$data->quantity}}</td>
                      <td>{{$data->status}}</td>
                      <td>
                        @if ($data->image)
                          <img src="{{ Storage::url($data->image) }}" height="30" >
                        @endif
                      </td>
                      <td><a href="{{ route('adminImageAdd', ['product_id' => $data->id]) }}">Image Gallery</a></td>
                      <td>{{$data->id}}</td>
                      <td><a href="{{ route('adminProductDestroy',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Delete</button></td></a>
                      <td><a href="{{ route('adminProductEdit',['id' => $data->id]) }}"><button type="button" class="btn btn-warning">Edit</button></td></a>
                    </tr>
                  @endforeach
                </tbody>
              </table>




    </div>

@endsection
