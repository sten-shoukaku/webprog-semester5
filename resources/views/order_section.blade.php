@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/event_detail.css')}}">
<script type="text/javascript" src="{{URL::asset('js/order_section.js')}}"></script>

@section('title', $event->name.' | '.$section->name)

@section('content')

<div class="d-flex flex-wrap justify-content-center align-items-center" id="home-banner" style="height: 225vh">
    <img src="{{URL::asset('./images/homepage_banner.jpg')}}" alt="" style="width: 100vw; opacity: 0;">
    <div class="card d-flex position-absolute justify-content-center" style="top: 15vh; max-width: 50vw">
        <img src="{{URL::asset('./images/'.$event->image)}}" alt="UPCOMING SHOWS" class="card-img-top">
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
            <div
                class="card d-flex flex-wrap"
                style="margin-bottom: 1em; padding: 1em; flex-direction: row; filter: drop-shadow(0em 0.1em 0.1em rgba(0, 0, 0, 0.25))">
                <div
                    class="container-fluid"
                    style="padding: 0em; margin-left: 1em">
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
                <hr
                    style="width: 100%; color: #969595">
                <form
                    action="/orderDetail"
                    method="GET"
                    style="width: 100%">
                    @csrf
                    <input
                        type="hidden"
                        name="event_id"
                        value={{$event->id}}>
                    <input
                        type="hidden"
                        name="section_id"
                        value={{$section->id}}>
                    <div
                        class="container-fluid"
                        style="padding: 1em 0em 0em 1em">
                        <label
                            for="quantity"
                            class="text-font-roboto">
                            Jumlah Tiket:
                        </label>
                        <input
                            type="hidden"
                            id="price"
                            name="price"
                            value={{$section->price}}>
                        <input
                            class="text-font-roboto"
                            type="number"
                            min="1"
                            value="1"
                            name="quantity"
                            id="quantity_input"
                            style="border-radius: 0.5em; width: 5em; margin-left: 2em; text-align: right">
                            @if($errors->any())
                                <p class="text-danger text-left mt-3">{{ $errors->first() }}</p>
                            @endif
                        <p
                            class="card-text text-font-roboto text-thin"
                            style="text-align: right; margin: 2em 0em 0em 0em">
                            Total
                        </p>
                        <h5
                            class="card-text text-font-roboto"
                            id="total_price"
                            style="text-align: right">
                            @currency($section->price)
                        </h5>
                        <div
                            class="container-fluid d-flex flex-wrap"
                            style="padding: 0em; align-content: flex-end; justify-content: flex-end; margin-top: 2em">
                            <div
                                style="display: flex; flex-wrap: wrap; flex-direction: row">
                                <button
                                    class="rounded-pill btn-section-back text-font-roboto"
                                    type="submit"
                                    formaction="/event/{{$event->id}}">
                                    KEMBALI
                                </button>
                                <button
                                    class="rounded-pill btn-section text-font-roboto"
                                    type="submit"
                                    style="margin-left: 1em; width: 15em">
                                    PESAN SEKARANG
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
