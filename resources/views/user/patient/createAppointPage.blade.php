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
                        <h3>Booking Page</h3>
                    </div>
                    <div class="col-4">
                        <h3><a href="">Histroy List</a></h3>
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col">

                        <div class="my-2">
                            <label for="">Specialization: </label>
                            <select name="specialization" id="specialization" class="form-control">
                                <option value="">Choose One</option>
                                @foreach ($data as $d)
                                    <option value="{{ $d->specialization }}">
                                        {{ $d->specialization }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="my-2">
                            <label for="">Doctor Name</label>
                            <select name="doctorId" id="doctor" class="form-control">
                                <option value="">Choose One</option>
                            </select>
                        </div>

                        <div class="my-2">
                            <label for="">Avaliable Section</label>
                            <select name="section" id="section" class="form-control">
                                <option value="">Choose One</option>
                            </select>
                        </div>

                        <div class="my-2">
                            <label for="">Appointment Date</label>
                            <input type="date" class="form-control" name="date">
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-primary px-5 my-5 w-80">Book Now</button>

        </div>
        </form>

    </div>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#specialization').change(function() {
            $specialization = $(this).val();
            // console.log($specializationId);

            if ($specialization) {
                $.ajax({
                    type: 'get',
                    url: '/patient/special/doctors',
                    data: {
                        'specialization': $specialization
                    },
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response);
                        $('#doctor').empty();
                        $('#doctor').append($('<option>').text('Choose One').attr('value',
                            ''));
                        $.each(response, function(index, doctor) {
                            $('#doctor').append($('<option>').text(doctor.name)
                                .attr('value', doctor.id));
                        });
                    }
                });
            } else {
                $('#doctor').empty();
                $('#doctor').append($('<option>').text('Choose One').attr('value', ''));
            }
        });

         $('#doctor').change(function() {
                            $doctorId = $(this).val();
                            if ($doctorId) {
                                $.ajax({
                                    type: 'get',
                                    url: '/patient/special/doctors/section',
                                    data: {
                                        'id': $doctorId
                                    },
                                    dataType: 'json',
                                    success: function(response) {
                                        console.log(response);

                                        $('#section').empty();
                                        $('#section').append($(
                                            '<option>').text(
                                            'Choose One').attr(
                                            'value', ''),
                                            );
                                        $.each(response, function(index, section) {
                                            $('#section').append($('<option>').text( section.start_time + ' - ' + section.end_time)
                                                .attr('value',section.id).attr('name','section')
                                                );
                                        });
                                    }
                                });
                            } else {
                                $('#section').empty();
                                $('#section').append($('<option>').text(
                                    'Choose One').attr('value', ''));
                            }
                        });

    });
</script>

</html>
