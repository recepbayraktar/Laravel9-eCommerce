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
<form action="{{ route('adminSettingUpdate',['id' => $data->id]) }}" enctype="multipart/form-data" method="post">
    @csrf
    <input value="{{ $data->id }}" type="hidden" class="form-control" name="id">
    <div class="form-group">
      <label for="exampleFormControlInput1">company</label>
      <input value="{{ $data->company }}" type="text" class="form-control" name="company">
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
      <label for="exampleFormControlInput1">address</label>
      <input value="{{ $data->address }}" type="text" class="form-control" name="address"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">phone</label>
      <input value="{{ $data->phone }}" type="number" class="form-control" name="phone"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">fax</label>
      <input value{{ $data->fax }} type="text" class="form-control" name="fax"  >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">email</label>
      <input value="{{ $data->email }}" type="email" class="form-control" name="email"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">references</label>
      <textarea id="references" name="references">{{ $data->references }}</textarea>

      <label for="exampleFormControlInput1">contact</label>
      <textarea id="contact" name="contact">{{ $data->references }}</textarea>
      
      <label for="exampleFormControlInput1">aboutus</label>
      <textarea id="aboutus" name="aboutus">{{ $data->references }}</textarea>
      <script>
        $('#references').summernote();
        $('#aboutus').summernote();
        $('#contact').summernote();
      </script>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">smtpserver</label>
      <input value{{ $data->smtpserver }} type="text" class="form-control" name="smtpserver"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">smtpemail</label>
      <input value{{ $data->smtpemail }} type="email" class="form-control" name="smtpemail"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">smtppassword</label>
      <input value{{ $data->smtppassword }} type="password" class="form-control" name="smtppassword"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">smtpport</label>
      <input value{{ $data->smtpport }} type="number" class="form-control" name="smtpport"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">facebook</label>
      <input value{{ $data->facebook }} type="text" class="form-control" name="facebook"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">twitter</label>
      <input value{{ $data->twitter }} type="text" class="form-control" name="twitter"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">instagram</label>
      <input value{{ $data->instagram }} type="text" class="form-control" name="instagram"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">youtube</label>
      <input value{{ $data->youtube }} type="text" class="form-control" name="youtube"  >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">status</label>
      <input value{{ $data->status }} type="text" class="form-control" name="status"  >
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
