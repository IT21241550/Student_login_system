@extends('layouts\app')

@section('content')

<div class="container" style="background-image: url('/image/Student.jpg'); background-size: cover;">

<div class="container">
    <div class="row">
        <div class="col-lg-18 text-center">
<h1 class="page-title">Home Page</h1>
        </div>
    </div>
</div>


@endsection

@push('css')
<style>
    .page-title{
         font-size: 5rem;
        color: blue
        padding-top: 7%;
    }
</style>
@endpush




