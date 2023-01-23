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
            src="{{URL::asset('images/'.$event->image)}}"
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
            @foreach ($sections as $section)
                <div
                    class="card d-flex flex-wrap"
                    style="margin-bottom: 1em; padding: 1em 1em 1em 2em; flex-direction: row; filter: drop-shadow(0em 0.1em 0.1em rgba(0, 0, 0, 0.25))">
                    <div
                        class="container-fluid"
                        style="padding: 0em; width: 50%">
                        <h5
                            class="card-title text-font-roboto"
                            style="font-size: 1em; margin-bottom: 1em">
                            {{$section->name}}
                        </h5>
                        <h5
                            class="card-title text-font-roboto"
                            style="font-size: 1.2em; margin: auto">
                            IDR {{number_format($section->price, 0, ',', '.')}}
                        </h5>
                    </div>
                    <div
                        class="container-fluid d-flex flex-wrap"
                        style="padding: 0em; width: 50%; align-content: flex-end; justify-content: flex-end">
                        <div
                            style="display: flex; flex-wrap: wrap; flex-direction: row">
                            @if ($section->stock == 0)
                                <p
                                    class="card-text text-font-roboto text-thin"
                                    style="font-size: 0.8em; color: #555353; margin: auto">
                                    Habis dipesan
                                </p>
                                <button
                                    class="rounded-pill disabled btn-section-disabled text-font-roboto"
                                    style="margin-left: 1em">
                                    PILIH
                                </button>
                            @else
                                @if ($section->stock < 10)
                                    <p
                                        class="card-text text-font-roboto text-thin"
                                        style="font-size: 0.8em; color: #FF0000; margin: auto">
                                        Tersisa {{$section->stock}} tiket
                                    </p>
                                @endif
                                <form
                                    action="/event/{{$event->id}}/order/{{$section->id}}"
                                    method="POST"
                                    style="margin: auto">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$section->id}}">
                                    <button
                                        class="rounded-pill btn-section text-font-roboto"
                                        type="submit"
                                        style="margin-left: 1em">
                                        PILIH
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
