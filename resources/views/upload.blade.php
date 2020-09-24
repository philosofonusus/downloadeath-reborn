@extends('layouts.app')
@section('title')
    UPLOADS
@endsection
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <form action="{{route('upload')}}" method="post" class="form-group upload p-2" enctype="multipart/form-data">
            @csrf
            <input name="file" class="form-controll" type="file">
            <button type="submit" class="upload-rs btn btn-secondary">Upload</button>
        </form>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <a href="{{ url('/') }}"><button class="btn btn-secondary">Go Back</button></a>
    </div>
@endsection
