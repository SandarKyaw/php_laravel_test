<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css & js link --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- font awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>phome</title>
</head>

<body>
    <div class="">
        {{-- navbar --}}
        <div class="row offset-1 mt-4">
            <h1 class="">Welcome to SDK Hospital </h1>

            <div class="col-10 mt-2">
                <ul class="nav nav-pills justify-content-between bg-white-subtle">
                    <div class="d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('patient#home')}}">Doctor Lists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('patient#viewSchedule')}}">Schedule List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pateint#bookingList')}}">Your Booking</a>
                        </li>


                    </div>

                    <div class="d-flex">
                        <li class="nav-item">
                            <a class="nav-link d-inline" href="{{route('patient#createAppointmentPage')}}">Book Now</a>
                            <a class="nav-link d-inline" href="#" data-bs-toggle="dropdown">
                                <img src="{{ asset('defaultImage1.jpg') }}" width="50px" height="50px" alt=""
                                    srcset="">
                            </a>
                            <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="#">User Info</a></li>
                                <li><a class="dropdown-item" href="#">Medical History</a></li>
                                <li><a class="dropdown-item" href="#">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <input type="submit" class="btn btn-light" value="Log Out">
                                        </form>
                                    </a></li>

                            </ul>
                        </li>
                    </div>
                    </nav>

            </div>
            </ul>
            {{-- navbar close --}}

            @yield('content')




        </div>

    </div>
    </div>

</body>

</html>
