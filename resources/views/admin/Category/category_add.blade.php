@extends('layouts.admin')

@section('title', 'recep')

@section('content')
<form action="{{ route('adminCategoryCreate') }}" method="POST">
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
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="parent_id" class="form-control" id="exampleFormControlSelect1">
          @foreach ($dataList as $rs)
          <option value="{{ $rs->id }}"> {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
          @endforeach
        </select>
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
