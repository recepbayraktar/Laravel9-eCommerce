@extends('layouts.admin')

@section('title', 'recep')

@section('content')
<form action="{{ route('adminProductUpdate', ['id' => $data->id]) }}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Slug</label>
      <input value="{{ $data->slug }}" type="text" class="form-control" name="slug">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">keywords</label>
      <input value="{{ $data->keywords }}" type="text" class="form-control" name="keywords"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description</label>
      <input value="{{ $data->description }}" type="text" class="form-control" name="description"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input value="{{ $data->title }}" type="text" class="form-control" name="title"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">image</label>
      <input value="{{ $data->slug }}" type="image" class="form-control" name="image"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        @foreach ($dataList as $rs)
        <option value="{{ $rs->title }}" @if ($rs->id == $data->id) slected="selected" @endif> {{ $rs->title }}</option>
        @endforeach
        
        
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">price</label>
      <input value="{{ $data->price }}" type="text" class="form-control" name="price"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">quantity</label>
      <input value="{{ $data->quantity }}" type="text" class="form-control" name="quantity"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">minquantity</label>
      <input value{{ $data->minquantity }} type="text" class="form-control" name="minquantity"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">tax</label>
      <input value="{{ $data->tax }}" type="text" class="form-control" name="tax"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">detail</label>
      <input value="" type="text" class="form-control" name="detail"  >
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
