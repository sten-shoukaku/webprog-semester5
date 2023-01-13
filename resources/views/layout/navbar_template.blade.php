<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OnTick | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/master.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/navbar.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <nav
        class="navbar navbar-expand-lg position-relative"
        style="z-index: 100">
        <div
            class="navbar-collapse">
            <ul
                class="navbar-nav position-absolute top-0 start-50 translate-middle"
                style="margin-top: 2.5em">
                <li
                    class="nav-item p-3">
                    @yield('menu1-main')
                </li>
                <li
                    class="nav-item p-3">
                    @yield('menu2-main')
                </li>
                <li
                    class="nav-item p-3">
                    @yield('menu3-main')
                </li>
            </ul>
            <ul
                class="navbar-nav position-absolute top-0 end-0 translate-middle"
                style="margin-top: 2.5em">
                <li
                    class="nav-item p-3 align-self-center">
                    @yield('menu1-side')
                </li>
                <li
                    class="nav-item p-3">
                    @yield('menu2-side')
                </li>
            </ul>
        </div>
    </nav>

    <div
        class="d-flex flex-wrap justify-content-center position-absolute top-0 start-0"
        style="z-index: 1">
        @yield('body')
    </div>

</body>
</html>
