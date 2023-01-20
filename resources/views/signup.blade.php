@extends('layout.main')

@section('title', 'Sign Up')

@section('body')
    <div class="darker-background">
        <div class="d-flex align-items-center justify-content-center">
            <img src="./images/WelcomePage_img.jpg" alt="" id="index-image">
            <div class="container card text-center text-light" id="index-body" style="width: 65%; height: 80vh;">
                <div class="card-body d-flex align-items-center">
                    <div class="row p-5 d-flex align-items-center justify-content-center">
                        <div class="col left-col">
                            <h1 class="signin-text pb-3">Welcome!</h1>
                            <hr>
                            <p class="fw-lighter text-start pt-4">OnTick is a website that assists concert lovers discover and purchase upcoming concert tickets available on sale</p>
                        </div>
                        <div class="col col-5 right-col p-3">
                            <p class="text-end fw-light pb-4">Already have an account? <a href="/signin">Sign In</a></p>
                            <h1 class="signin-text fw-semibold pb-3">Sign <span>up</span></h1>
                            <form action="/signup" method="POST" class="text-start px-4">
                                @csrf

                                <div class="pb-1">
                                    <label for="username" class="signin-text pb-2">Username</label> <br>
                                    <input type="text" name="username" class="form-field px-3" id="username" value="">
                                </div>
                                <div class="pb-1">



                                    <label for="email" class="signin-text pb-2">Email</label> <br>
                                    <input type="email" name="email" class="form-field px-3 @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="pb-2">
                                    <label for="password" class="signin-text pb-2">Password</label> <br>
                                    <input type="password" name="password" class="form-field px-3 @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" required >
                                    @error('password')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="pb-2">
                                    <label for="confirmPassword" class="signin-text pb-2">Confirm Password</label> <br>
                                    <input type="password" name="confirmPassword" class="form-field px-3 @error('confirmPassword') is-invalid @enderror"
                                    id="confirmPassword" placeholder="Confirm Password" required>
                                    @error('confirmPassword')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="pb-2">
                                    <label for="phone" class="signin-text pb-2">Phone Number</label> <br>
                                    <input type="number" name="phone" class="form-field px-3 @error('phone') is-invalid @enderror"
                                    id="phone"  placeholder="Phone Number" required value="{{ old('phone')}}">

                                </div>

                                <div class="button-field signin-text py-3 pb-2">
                                    <button class="w-100 btn" type="submit" id="submit-text" name="submit">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
