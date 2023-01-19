@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/event_detail.css')}}">

@section('title', $event->name)

@section('content')

<div
    class="d-flex flex-wrap justify-content-center"
    style="margin-top: 10em; width: 100vw">
    <div
        class="card"
        style="width: 50vw; min-width: 50em">
        <img
            src="{{URL::asset($event->image)}}"
            alt=""
            class="card-image-top">
        <div
            class="card-body"
            style="padding: 2em 5em 2em 5em">
            <h1
                class="card-title text-font-roboto">
                {{$event->name}}
            </h1>
            <p
                class="card-title text-font-roboto text-thin"
                style="font-size: 1.5em">
                {{$event->location}}
            </p>
            <div
                class="d-flex flex-wrap flex-direction-row"
                style="margin-top: 4em; margin-bottom: 1em">
                <div class="section-rectangle">
                </div>
                <h2
                    class="card-title text-font-roboto"
                    style="margin: initial">
                    Deskripsi
                </h2>
            </div>
            <p
                class="card-text text-font-roboto text-thin">
                {{$event->description}}
            </p>
            <div
                class="d-flex flex-wrap jam-buka-rectangle"
                style="margin-top: 2em">
                <h4
                    class="card-title text-font-roboto"
                    style="margin-left: 1.5em">
                    Jam Buka
                </h3>
                <ul>
                    <li
                        class="card-text text-font-roboto text-thin">
                        Jadwal konser: {{$event->date}} ({{$event->time}} WIB)
                    </li>
                    <li
                        class="card-text text-font-roboto text-thin">
                        Open gate: {{$event->open_gate}} WIB
                    </li>
                    <li
                        class="card-text text-font-roboto text-thin">
                        Durasi: {{$event->duration}} Jam
                    </li>
                    <li
                        class="card-text text-font-roboto text-thin">
                        Venue: {{$event->venue}}, {{$event->location}}
                    </li>
                </ul>
            </div>
            <div
                class="d-flex flex-wrap flex-direction-row"
                style="margin-top: 3em; margin-bottom: 1em">
                <div class="section-rectangle">
                </div>
                <h2
                    class="card-title text-font-roboto"
                    style="margin: initial">
                    Section
                </h2>
            </div>
        </div>
    </div>
</div>

@endsection
