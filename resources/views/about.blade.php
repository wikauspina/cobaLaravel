@extends('layout/main')
@section('title', 'about')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
            <h1 class="mt-2">Hello, nama saya <?= $nama; ?></h1>
            </div>
        </div>
    </div>
@endsection