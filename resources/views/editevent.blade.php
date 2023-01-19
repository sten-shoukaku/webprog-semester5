@extends('layout.master_admin')

<link rel="stylesheet" href="{{URL::asset('css/homepage.css')}}">

@section('title', 'Home')

@section('content')

<div class="d-flex flex-wrap justify-content-center align-items-center" id="home-banner">
    <img src="{{URL::asset('./images/homepage_banner.jpg')}}" alt="" style="width: 100vw; opacity: 0;">
    <div class="card d-flex position-absolute justify-content-center" style="top: 15vh; max-width: 50vw">
        <img src="{{URL::asset('./images/event_template.png')}}" alt="UPCOMING SHOWS" class="card-img-top">
        <div class="card-body text-start d-block align-items-center justify-content-center px-5">
            <h1 class="fw-normal pt-3">Itzy The 1st World Tour (CHECKMATE in JAKARTA (General Sales)</h1>
            <h4 class="fw-lighter">Jakarta Pusat</h4>
            <div class="pt-5">
                <h3 class="fw-normal" style="border-left: solid 8px #26549280; padding-left: 12px">Deskripsi</h3>
                <p class="fw-lighter">Grup K-pop internasional, ITZY akan datang ke Jakarta dengan tur dunia pertama mereka yang bertajuk, ITZY THE 1ST WORLD TOUR <CHECKMATE> IN JAKARTA pada tanggal 4 Februari 2023 di Tennis Indoor Stadium Senayan! ITZY akan kembali menyapa MIDZY Indonesia untuk kedua kalinya. Jadi, MIDZY, persiapkan dirimu untuk menari dan menyanyi bersama lagu-lagu hits dari ITZY!</p>
            </div>
            <div class="pt-3">
                <div class="background" style="background-color: #BECBDC80">
                    <div class="p-3">
                        <h5 class="px-3 pt-3 fw-normal">Jam Buka</h5>
                        <ul class="fw-lighter">
                            <li>
                                Jadwal konser: 4 Februari 2023 (18.30 WIB).
                            </li>
                            <li>
                                Open gate: TBA
                            </li>
                            <li>
                                Durasi: 2-3 Jam.
                            </li>
                            <li>
                                Venue: Tennis Indoor Stadium Senayan, Jakarta.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <h3 class="fw-normal" style="border-left: solid 8px #26549280; padding-left: 12px">Section</h3>
                <div class="pt-3">
                    <div class="background" style="border: solid 1.5px #181818">
                        <div class="p-3 pb-2">
                            <div class="row px-3">
                                <div class="col">
                                    <h5 class="fw-normal">BLUE A</h5>
                                    <h4 class="pt-3 fw-normal">IDR 2.915.000</h4>
                                </div>
                                <div class="col d-flex align-items-center justify-content-end pt-4">
                                    <p class="px-4 pt-3" style="color: red; font-size: smaller">Tersisa 7 tiket</p>
                                    <div class="button-field signin-text py-2 pb-2">
                                        <a href="#" class="btn" type="submit" id="" name="" style="background-color: #DF3599; border-radius: 50px; color: #fff; width: 125px">PILIH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="background" style="border: solid 1.5px #181818">
                        <div class="p-3 pb-2">
                            <div class="row px-3">
                                <div class="col">
                                    <h5 class="fw-normal">BLUE B</h5>
                                    <h4 class="pt-3 fw-normal">IDR 2.915.000</h4>
                                </div>
                                <div class="col d-flex align-items-center justify-content-end pt-4">
                                    {{-- <p class="px-4 pt-3" style="color: red; font-size: smaller">Tersisa 7 tiket</p> --}}
                                    <div class="button-field signin-text py-2 pb-2">
                                        <a href="#" class="btn" type="submit" id="" name="" style="background-color: #DF3599; border-radius: 50px; color: #fff; width: 125px">PILIH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="background" style="border: solid 1.5px #181818">
                        <div class="p-3 pb-2">
                            <div class="row px-3">
                                <div class="col">
                                    <h5 class="fw-normal">PURPLE A</h5>
                                    <h4 class="pt-3 fw-normal">IDR 1.415.000</h4>
                                </div>
                                <div class="col d-flex align-items-center justify-content-end pt-4">
                                    <p class="px-4 pt-3" style="color: #555353; font-size: smaller">Habis dipesan</p>
                                    <div class="button-field signin-text py-2 pb-2">
                                        <a href="#" class="btn" type="submit" id="" name="" style="background-color: #555353; border-radius: 50px; color: #fff; width: 125px">PILIH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 d-flex justify-content-center">
                <div class="button-field signin-text py-2 pb-2 px-3">
                    <a href="#" class="btn" type="submit" id="" name="" style="border: solid 1.5px #181818; border-radius: 50px; color: #181818; width: 250px">REMOVE EVENT</a>
                </div>
                <div class="button-field signin-text py-2 pb-2 px-3">
                    <a href="#" class="btn" type="submit" id="" name="" style="background-color: #DF3599; border-radius: 50px; color: #fff; width: 250px">ADD SECTION</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection