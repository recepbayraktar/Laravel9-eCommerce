@extends('layouts.home')

@section('title', 'recep')


@section('content')
    <h2>{{ $data->title }}</h2>
    <form action="{{ route('userImageStore', ['place_id' => $data->id]) }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">image</label>
      <input type="file" class="form-control" name="image"  >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($images as $rs )
        <tr>
            <th scope="row">1</th>
            <td>{{ $rs->title }}</td>
            <td>
            @if ($rs->image)
                <img
                    src="{{ Storage::url($rs->image) }}"
                    class="card-img-top"
                    alt=""
                />
            @endif</td>
            <td><a href="{{ route('userImageDestroy', ['id' => $rs->id, 'place_id' => $data->id]) }}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection


@section('content')

<div class="row">

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="container">
        <div class="row margin-bottom-40 ">

            @include('home.user_sidebar')

        <h2>{{ $data->title }}</h2>

        <form action="{{ route('userImageStore', ['place_id' => $data->id]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">title</label>
              <input type="text" class="form-control" name="title"  >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">image</label>
              <input type="file" class="form-control" name="image"  >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table table-bordered">
            <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
            </thead>
            <tbody>
            @foreach ($images as $rs )
            <tr>
                <th scope="row">1</th>
                <td>{{ $rs->title }}</td>
                <td>
                @if ($rs->image)
                    <img
                        src="{{ Storage::url($rs->image) }}"
                        class="card-img-top"
                        alt=""
                    />
                @endif</td>
                <td><a href="{{ route('userImageDestroy', ['id' => $rs->id, 'place_id' => $data->id]) }}">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>



@endsection
