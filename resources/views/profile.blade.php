@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/profile.css')}}">

@section('title', 'Profile')

@section('content')

<div id="profilecontent">
    <div id="profileimgbg">
        <img src="./images/WelcomePage_img.jpg" alt="">
    </div>
    <div class="profilecontent">
        <div class="profileusername">
            {{ $user->username }}
        </div>
        <div id="profilemember">MEMBER</div>
        <div id="profileline"></div>
        <div class="profiledata">
            <div class="profileemail">Email : {{ $user->email }}</div>
            <div class="profilephone">Phone : {{ $user->phone }}</div>
            <div class="profilebutton">
                <a href="/profile/editprofile">
                    <button id="editprofile">EDIT PROFILE</button>
                </a>
                <a href="/profile/editpassword">
                    <button id="editpassword">EDIT PASSWORD</button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection