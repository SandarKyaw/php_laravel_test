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

    <title>Create Appointment Page</title>
</head>

<body>
    <div class="container row offset-1 mt-5">
        <div class="col-10">

            <form action="{{route('patient#createAppointment')}}" method="post">
                @csrf
                <div class="row justify-content-between mb-3">
                    <div class="col-8">
                        <h3>Your Booking</h3>
                    </div>
                    <div class="col-4">
                        <h3><a href="">Histroy List</a></h3>
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col">
                        {{-- table --}}
                <div class="table_container mt-4">
                    <table class="table table-dark table-striped-columns">
                        <thead>
                            <tr>
                                <td>ID</td>

                                <td>Date</td>
                                <td>Section</td>
                                <td>Status</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr class="">
                                    <td>{{ $d->Id}}</td>
                                    
                                    <td>{{ $d->date}}</td>
                                    <td>{{ $d->startTime }} - {{$d->endTime}}</td>

                                    <td>
                                <select name="status" id="status" class="status list-group-item-primary form-select" disabled>
                                <option value="0" @if ($d->status == '0') selected @endif>Scheduled
                                </option>
                                <option value="1" @if ($d->status == '1') selected @endif>Cancel
                                </option>
                                <option value="2" @if ($d->status == '2') selected @endif>Confirm
                                </option>

                                </select>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                    </div>
                </div>

        </div>
        </form>

    </div>
    </div>
</body>

</html>
