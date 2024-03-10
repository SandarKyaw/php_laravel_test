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

    <title>LoginPage</title>
</head>

<body>
    <div class="login-form m-5 text-center">
        <h1>Login</h1>
        <form action="{{route('login')}}" method="post" class="row offset-1">
            @csrf
            <div class="col-10">
                <div class="mb-3">
                    <label for="email" class="form-label">Enter Your Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                      @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                      @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="row">
                    <button type="submit" class="col btn btn-light d-inline">Login</button>
                    <p class="d-inline col"> Don't you have account?<a href="{{route('auth#registerPage')}}" class="link-underline-light">Sign Up Here</a></p>
                </div>
            </div>


        </form>

    </div>


</body>

</html>
