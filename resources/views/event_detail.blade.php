@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/event_detail.css')}}">

@section('title', $event->name)

@section('content')

<div class="d-flex flex-wrap justify-content-center align-items-center" id="home-banner" style="height: 225vh">
    <img src="{{URL::asset('./images/homepage_banner.jpg')}}" alt="" style="width: 100vw; opacity: 0;">
    <div class="card d-flex position-absolute justify-content-center" style="top: 15vh; max-width: 50vw">
        <img src="{{asset('storage/images/'.$event->image)}}" alt="UPCOMING SHOWS" class="card-img-top">
        <div class="card-body text-start d-block align-items-center justify-content-center px-5">
            <h1 class="fw-normal pt-3">{{ $event->name }}</h1>
            <h4 class="fw-lighter">{{ $event->location }}</h4>
            @php
                $date = date('d F Y', strtotime($event->date));
            @endphp
            <h4 class="fw-lighter">{{ $date }}</h4>
            <div class="pt-5">
                <h3 class="fw-normal" style="border-left: solid 8px #26549280; padding-left: 12px">Deskripsi</h3>
                <p class="fw-lighter">{!! str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br/>", $event->description) !!}</p>
            </div>
            <div class="pt-3">
                <div class="background" style="background-color: #BECBDC80">
                    <div class="p-3">
                        <h5 class="px-3 pt-3 fw-normal">Jam Buka</h5>
                        <ul class="fw-lighter">
                            @php
                                $opHour = explode("\n", $event->open_hour)
                            @endphp
                            @foreach ($opHour as $op)
                                <li>{{ $op }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <h3 class="fw-normal" style="border-left: solid 8px #26549280; padding-left: 12px">Section</h3>
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
                                @currency($section->price)
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
                                        method="GET"
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
</div>

@endsection
