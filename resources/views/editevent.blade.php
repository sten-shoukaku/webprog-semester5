@extends('layout.master_admin')

<link rel="stylesheet" href="{{URL::asset('css/homepage.css')}}">

@section('title', 'Edit Event')

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
                @foreach ($eventSection as $section)
                    <div class="pt-3">
                        <div class="background" style="border: solid 1.5px #181818">
                            <div class="p-3 pb-2">
                                <div class="row px-3">
                                    <div class="col">
                                        <h5 class="fw-normal">{{ $section->name }}</h5>
                                        <h4 class="pt-3 fw-normal">@currency($section->price) </h4>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-end pt-4">
                                        <p class="px-4" style="color: black; font-size: 20px">{{ $section->stock }} tiket</p>
                                        <div class="button-field signin-text py-2 pb-2">
                                            <form action="/admin/event/remove/section/{{ $event->id }}/{{ $section->id }}" method="POST">
                                                @csrf
                                                <button class="btn" type="submit" id="" name="" style="background-color: #DF3599; border-radius: 50px; color: #fff; width: 170px">REMOVE SECTION</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="py-5 d-flex justify-content-center">
                <div class="button-field signin-text py-2 pb-2 px-3">
                    <form action="/admin/event/remove/event/{{ $event->id }}" method="POST">
                        @csrf
                        <button class="btn" type="submit" id="" name="" style="border: solid 1.5px #181818; border-radius: 50px; color: #181818; width: 250px">REMOVE EVENT</button>
                    </form>
                </div>
                <div class="button-field signin-text py-2 pb-2 px-3">
                    <form action="/admin/event/add/section/{{ $event->id }}">
                        <button class="btn" type="submit" id="" name="" style="background-color: #DF3599; border-radius: 50px; color: #fff; width: 250px">ADD SECTION</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
