@extends('layouts.admin')

@section('title', 'recep')

@section('content')
<form action="{{ route('adminReviewUpdate', ['id' => $data->id]) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">status</label>
        <input value="{{ $data->status }}" type="text" class="form-control" name="status">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
