@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/event_detail.css')}}">
<script type="text/javascript" src="{{URL::asset('js/order_section.js')}}"></script>

@section('title', $event->name.' | '.$section->name)

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
                        IDR {{number_format($section->price, 0, ',', '.')}}
                    </h5>
                </div>
                <hr
                    style="width: 100%; color: #969595">
                <form
                    action=""
                    method="POST"
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
                            value={{$section->price}}>
                        <input
                            class="text-font-roboto"
                            type="number"
                            min="1"
                            value="1"
                            name="quantity"
                            id="quantity_input"
                            style="border-radius: 0.5em; width: 5em; margin-left: 2em; text-align: right">
                        <p
                            class="card-text text-font-roboto text-thin"
                            style="text-align: right; margin: 2em 0em 0em 0em">
                            Total
                        </p>
                        <h5
                            class="card-text text-font-roboto"
                            id="total_price"
                            style="text-align: right">
                            IDR {{number_format($section->price, 0, ',', '.')}}
                        </h5>
                        <div
                            class="container-fluid d-flex flex-wrap"
                            style="padding: 0em; align-content: flex-end; justify-content: flex-end; margin-top: 2em">
                            <div
                                style="display: flex; flex-wrap: wrap; flex-direction: row">
                                <button
                                    class="rounded-pill btn-section-back text-font-roboto"
                                    type="submit">
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
