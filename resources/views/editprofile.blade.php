@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/editpassword.css')}}">

@section('title', 'Edit Password')

@section('content')

<div id="profilecontent">
    <div id="profileimgbg">
        <img src="/images/WelcomePage_img.jpg" alt="">
    </div>
    <div class="profilecontent">
        <div class="profileusername">
            Random Name
        </div>
        <div id="profilemember">MEMBER</div>
        <div id="profileline"></div>
        <div class="profiledata">
            <form action="{{url("/profile")}}">
                <label for="email" class="profilelabel">Email</label>
                <br>
                <input type="text" class="profileinput">
                <br>
                <label for="phone" class="profilelabel">Phone</label>
                <br>
                <input type="text" class="profileinput">
                <div class="profilebutton">
                    <button id="editprofile" type="submit">CANCEL</button>
                    <button id="editpassword" type="submit">SAVE CHANGES</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection