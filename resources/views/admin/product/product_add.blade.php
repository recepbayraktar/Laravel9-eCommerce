@extends('layouts.admin')

@section('title', 'recep')

@section('content')
<form action="{{ route('adminProductCreate') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">slug</label>
      <input type="text" class="form-control" name="slug">
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
    <div class="form-group">
      <label for="exampleFormControlInput1">image</label>
      <input type="image" class="form-control" name="image"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">price</label>
      <input type="text" class="form-control" name="price"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">quantity</label>
      <input type="text" class="form-control" name="quantity"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">minquantity</label>
      <input type="text" class="form-control" name="minquantity"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">tax</label>
      <input type="text" class="form-control" name="tax"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">detail</label>
      <input type="text" class="form-control" name="detail"  >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
