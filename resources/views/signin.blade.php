@extends('layout.main')

@section('title', 'Sign In')

@section('body')
    <div class="darker-background">
        <div class="d-flex align-items-center justify-content-center">
            <img src="./images/WelcomePage_img.jpg" alt="" id="index-image">

            <div class="container card text-center text-light" id="index-body" style="width: 65%; height: 80vh;">
                <div class="card-body d-flex align-items-center">

                    <div class="row p-5 d-flex align-items-center justify-content-center">

                        <div class="col left-col">
                            <h1 class="signin-text pb-3">Good to see you again!</h1>
                            <hr>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginFailed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginFailed')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        </div>

                        <div class="col col-5 right-col p-3">
                            <p class="text-end fw-light pb-4">Don't have an account? <a href="/signup">Sign Up</a></p>
                            <h1 class="signin-text fw-semibold pb-3">Sign <span>in</span></h1>
                            <form action="/signin" method="POST" class="text-start px-4">
                                @csrf

                                <div class="py-2">
                                    <label for="email" class="signin-text pb-2">Email</label> <br>
                                    <input type="email" name="email" class="form-field px-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"
                                    required value="{{Cookie::get('getCookie') !== null ? Cookie::get('getCookie') : ""}}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="py-2">
                                    <label for="password" class="signin-text pb-2">Password</label> <br>
                                    <input type="password" name="password" class="form-field px-3" id="password" value="" >
                                </div>

                                <div class="checkbox py-3 form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember" checked={{Cookie::get('emailCookie') !== null}}>
                                    <label class="signin-text form-check-label" for="rememberme">Remember me</label>
                                </div>

                                <div class="button-field signin-text py-2 pb-4">
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
