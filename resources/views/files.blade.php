@extends('layouts.app')
@section('title')
FILE SYSTEM
@endsection
@section('content')
    <div class="d-flex justify-content-center mt-5 fix-size">
        <div class="d-inline-block">
            <ul class="list-group list-unstyled align-items-center p-2 files-list" >
                <h1 class="text-align-center mb-2">
                    Downloads
                </h1>
                @foreach($files as $el)
                <li  class="list-group-items mb-1"><a class="fix-size btn btn-light" href="{{ Storage::url($el) }}" download>{{ basename($el) }}</a></li>
                @endforeach
            </ul>
            <a role="button" class="btn btn-secondary d-flex justify-content-center" href="{{ route('uploads') }}">UPLOAD</a>
    </div>
@endsection
