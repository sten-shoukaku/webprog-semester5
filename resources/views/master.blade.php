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
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <div
                class="navbar-collapse justify-content-center"
                id="master-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                            class="text-font-roboto text-color-white navbar-link"
                            href="">
                            HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="text-font-roboto text-color-white navbar-link"
                            href="">
                            EVENT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="text-font-roboto text-color-white navbar-link"
                            href="">
                            VIEW ORDER
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
