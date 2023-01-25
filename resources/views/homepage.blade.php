@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/homepage.css')}}">

@section('title', 'Home')

@section('content')

<div
    class="d-flex flex-wrap justify-content-center align-items-center"
    id="home-banner">
    <img
        src="{{URL::asset('./images/homepage_banner.jpg')}}"
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
                action="#upcomingShow"
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

<div
    class="d-flex flex-wrap justify-content-center"
    style="padding: 3vw"
    id = "upcomingShow">
    <img
        src="{{URL::asset('./images/upcoming_shows.png')}}"
        alt="UPCOMING SHOWS"
        style="width: 30vw">
</div>

<div
    class="d-flex flex-wrap justify-content-center">
    @foreach ($events as $event)
    <a
        href="/event/{{$event->id}}"
        class="card m-4"
        style="width: 30vw; text-decoration: none; color: #000000">
        <img
            class="card-img-top"
            src={{URL::asset('storage/'.$event->image)}}
            alt={{$event->name}}>
        <div
            class="card-body">
            <div
                style="height: 12em">
                <h5
                    class="card-title"
                    style="font-size: 2em; margin: 0em">
                    {{$event->name}}
                </h5>
                <p
                    class="text-font-roboto text-thin"
                    style="font-size: 1.5em; margin: 0em">
                    {{$event->location}}
                </p>

                @php
                    $date = date('d F Y', strtotime($event->date));
                @endphp
                <p
                    class="text-font-roboto text-thin"
                    style="font-size: 1.2em; margin: 0em">
                    {{$date}}
                </p>
            </div>
        </div>
    </a>
    @endforeach
</div>

<div
    class="d-flex justify-content-center"
    style="margin-top: 4em; margin-bottom: 4em">
    {{ $events->withQueryString()->links() }}
</div>

@endsection
