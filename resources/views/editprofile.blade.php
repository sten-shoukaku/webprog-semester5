@extends('layout.master_member')

<link rel="stylesheet" href="{{URL::asset('css/editprofile.css')}}">

@section('title', 'Edit Password')

@section('content')

<div id="profilecontent">
    <div id="profileimgbg">
        <img src="/images/WelcomePage_img.jpg" alt="">
    </div>
    <div class="profilecontent">
        <div class="profileusername">
            {{ $user->username }}
        </div>
        <div id="profilemember">MEMBER</div>
        <div id="profileline"></div>
        <div class="profiledata">
            <form action="{{url("/profile/editprofile")}}" method="POST">
                @csrf
                <label for="email" class="profilelabel">Email</label>
                <br>
                <input type="text" class="profileinput" name="email">
                <br>
                <label for="phone" class="profilelabel">Phone</label>
                <br>
                <input type="text" class="profileinput" name="phone">
                <div class="profilebutton">
                    <button id="editprofile" type="submit">CANCEL</button>
                    <button id="editpassword" type="submit">SAVE CHANGES</button>
                </div>
                <div id="error">
                    @foreach ($errors->all() as $e)
                        *{{ $e }}
                        <br>   
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</div>

@endsection