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
<form action="{{ route('adminMessageUpdate', ['id' => $data->id]) }}" method="post">
    @csrf

    <div class="form-group">
      <label for="exampleFormControlInput1">name</label>
      <input value="{{ $data->name }}" type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">phone</label>
      <input value="{{ $data->phone }}" type="text" class="form-control" name="phone"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">email</label>
      <input value="{{ $data->email }}" type="email" class="form-control" name="email"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">message</label>
      <input value="{{ $data->message }}" type="text" class="form-control" name="message"  >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">subject</label>
        <input value="{{ $data->subject }}" type="text" class="form-control" name="subject"  >
      </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
