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

    <title>RegisterPage</title>
</head>

<body>

    <div class="register-form m-5">

       <div class="text-center">
         <h1>Register</h1>
       </div>
        <form action="{{ route('register') }}" method="post" class="row offset-1">
            @csrf
            @error('terms')
              <small class="text-danger">{{$message}}</small>
            @enderror
            @csrf
            <div class="col-10 m-auto">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="userEmail" class="form-label">Enter Your Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                     @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Choose Your Gender</label>
                    <select name="gender" class="form-control">
                        <option value="">Choose Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                     @error('gender')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Enter Your Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone">
                     @error('phone')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                     @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="" class="form-label">Confrim Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Confrim Password">
                     @error('password_confirmation')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>


            </div>

             <div class="row d-flex offset-1">
            <button type="submit" class="col-5 btn btn-light d-inline">Register</button>
            <p class="d-inline col-5">Already registered?<a href="{{ route('auth#loginPage') }}"
                    class="link-underline-light">Sign In Here</a></p>
        </div>
        </form>

    </div>

</body>

</html>
