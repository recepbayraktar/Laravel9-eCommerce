@extends('layouts.admin')

@section('title', 'recep')

@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')
<form action="{{ route('adminProductCreate') }}" enctype="multipart/form-data" method="POST">
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
      <label for="exampleFormControlSelect1">Example select</label>
      <select name="category_id" class="form-control" id="exampleFormControlSelect1">
        @foreach ($dataList as $rs)
        <option value="{{ $rs->id }}">  {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">image</label>
      <input type="file" class="form-control" name="image"  >
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
      <textarea id="summernote" name="detail"></textarea>
      <script>
        $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
      </script>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
