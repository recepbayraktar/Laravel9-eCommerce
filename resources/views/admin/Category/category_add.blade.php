@extends('layouts.admin')

@section('title', 'recep')

@section('content')
<form action="{{ route('adminCategoryCreate') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" name="email"  placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">keywords</label>
      <input type="text" class="form-control" name="keywords"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description</label>
      <input type="text" class="form-control" name="description"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
