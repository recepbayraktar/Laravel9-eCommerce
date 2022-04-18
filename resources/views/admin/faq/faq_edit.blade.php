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
<form action="{{ route('adminFaqUpdate', ['id' => $data->id]) }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Position</label>
        <input value="{{ $data->position }}"  type="number" class="form-control" name="position">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Status</label>
        <input value="{{ $data->status }}"  type="text" class="form-control" name="status">
    </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">question</label>
        <textarea id="question" name="question">{{ $data->question }}</textarea>

        <label for="exampleFormControlInput1">answer</label>
        <textarea id="answer" name="answer">{{ $data->answer }}</textarea>
        <script>
          $('#question').summernote();
          $('#answer').summernote();
        </script>
      </div>



    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
