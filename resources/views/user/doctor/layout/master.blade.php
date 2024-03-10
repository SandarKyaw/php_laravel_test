<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css & js link --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- font awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>dhome</title>
</head>

<body>
    <div class="">
        {{-- navbar --}}
        <div class="row offset-1 mt-4">
            <h1 class="">Doctor Dashboard </h1>

            <div class="col-10 mt-2">
                <ul class="nav nav-pills justify-content-between">
                    <div class="d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctor#home')}}">Appointment Lists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctor#scheduleList')}}">Schedule </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Records</a>
                        </li> --}}

                    </div>

                    <div class="d-flex">
                        <li class="nav-item">
                            <a class="nav-link d-inline" href="{{route('doctor#createSchedulePage')}}">Create New Schedule</a>
                            <a href="" class="nav-link d-inline"><img src="{{ asset('defaultImage1.jpg') }}"
                                    width="50px" height="50px" alt="" srcset=""></a>
                        </li>


                    </div>
                </ul>
                {{-- navbar close --}}

                @yield('content')


                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Log Out">
                </form>


            </div>

        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@yield('scriptSource')
</html>
