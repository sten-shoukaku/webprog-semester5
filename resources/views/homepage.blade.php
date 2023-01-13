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
    <div
        class="d-flex position-absolute justify-content-center"
        style="flex-direction: column">
            <p
                id="ontick-logo">
                O N T I C K
            </p>
            <form
                action=""
                class="align-self-center"
                method="GET">
                <button
                    type="submit"
                    class="btn rounded-pill text-font-andika text-color-white"
                    id="btn-view-upcoming">
                    VIEW UPCOMING
                </button>
            </form>
    </div>
</div>

@endsection
