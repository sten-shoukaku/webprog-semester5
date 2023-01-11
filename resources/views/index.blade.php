@extends('layout.main')

@section('title', 'Welcome')

@section('body')
    <div class="background">
        <div class="d-flex align-items-center justify-content-center">
            <img src="./images/WelcomePage_img.jpg" alt="" id="index-image">
            <div class="container text-center text-light pt-3" id="index-body">
                <p class="fw-lighter" id="welcome-text">WELCOME TO</p>
                <p class="pt-4" id="welcome-logo">O N T I C K</p>
                <p class="fw-lighter pt-1" id="welcome-desc">< Your Ticket Is Yours, So Here's Our List ></p>
                <div class="" id="welcome-btn">
                    <a href="/signin" class="btn border-light" id="welcome-btn-detail">
                        <p class="px-4">GET STARTED</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection