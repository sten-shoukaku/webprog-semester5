@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/homepage.css')}}">

@section('title', 'Home')

@section('content')

<div
    class="d-flex flex-wrap justify-content-center align-items-center"
    id="home-banner">
    <img
        src="./images/homepage_banner.jpg"
        alt=""
        style="width: 100vw">
    <p
        class="position-absolute"
        id="ontick-logo">
        O N T I C K
    </p>
</div>

@endsection
