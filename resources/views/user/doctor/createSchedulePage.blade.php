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

    <title>CreateDoctorPage</title>
</head>

<body>
    <div class="container row offset-1 mt-5">
        <div class="col-10">

           <form action="{{route('doctor#createSchedule')}}" method="post">
            @csrf
             <div class="row justify-content-between mb-3">
                <div class="col">
                    <h3>Create Schedule Page</h3>
                </div>
                <div class="col">
                    <h3><a href="">Schedule List</a></h3>
                </div>
            </div>

            <div class="row mb-3">

                <div class="col">
                    <label for="">Doctor ID</label>
                    <input readonly type="text" class="form-control" value="{{$data->id}}" name="doctorId" >
                </div>
            </div>

            <div class="row ">
                <div class="col">
                   <label for="">Start Time</label>
                   <input type="time" class="form-control" name="startTime">
                </div>
                <div class="col">
                   <label for="">End Time</label>
                   <input type="time" class="form-control" name="endTime">
                </div>

             <button type="submit" class="btn btn-primary px-5 my-5 w-80">Create</button>

            </div>
           </form>

        </div>
    </div>
</body>

</html>
