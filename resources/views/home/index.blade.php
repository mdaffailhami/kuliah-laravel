@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <center>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-2">
                <img src="{{ asset('img/adidas.png') }}" class="img-fluid rounded" width="150">
            </div>
            <div class="col-md-6 col-lg-4 mb-2">
                <img src="{{ asset('img/nike.png') }}" class="img-fluid rounded">
            </div>
            <div class="col-md-6 col-lg-4 mb-2">
                <img src="{{ asset('img/puma.png') }}" class="img-fluid rounded">
            </div>

        </div>
    </center>
@endsection
