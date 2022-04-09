@extends('layouts.admin')

@section('title', 'recep')

@section('content')
<form action="{{ route('adminCategoryUpdate', ['id' => $data->id]) }}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" name="email"  value="{{ $data->slug }}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">keywords</label>
      <input type="text" class="form-control" value="{{ $data->keywords }}" name="keywords"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">description</label>
      <input type="text" class="form-control" value="{{ $data->description }}" name="description"  >
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="parent_id" class="form-control" id="exampleFormControlSelect1">
          @foreach ($dataList as $rs)
          <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif

            > {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
          @endforeach
        </select>
      </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input type="text" class="form-control" value="{{ $data->title }}" name="title"  >
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
