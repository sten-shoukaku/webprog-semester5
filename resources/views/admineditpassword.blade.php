@extends('layout.master_admin')

<link rel="stylesheet" href="{{URL::asset('css/editpassword.css')}}">

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
        <div id="profilemember">Admin</div>
        <div id="profileline"></div>
        <div class="profiledata">
            <form action="{{url("/admin/profile/editpassword")}}" method="POST">
                @csrf
                <label for="newpassword" class="profilelabel">New Password</label>
                <br>
                <input type="text" class="profileinput" name="newpassword">
                <br>
                <label for="confirmnewpassword" class="profilelabel">Confirm New Password</label>
                <br>
                <input type="text" class="profileinput" name="confirmnewpassword">
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