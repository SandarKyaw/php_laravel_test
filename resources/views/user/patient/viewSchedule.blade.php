@extends('user.patient.layout.master')
@section('content')
    <div class="row">
        <div class="col-10">

            @foreach ($data as $d)
                <div class="card my-2">
                    <div class="card-body row">
                        <div class="col">
                            <div class="shadow-sm my-3">Doctor : {{ $d->name }}</div>
                            <div class="shadow-sm my-3">Specialization: {{ $d->specialization }}</div>
                        </div>

                        <div class="col">
                            <div class="shadow-sm my-3 bg-primary-subtle">Section : {{ $d->start_time }} - {{ $d->end_time }}</div>
                        </div>

                        <div class="col">
                            <select name="status" id="" class="list-group-item-primary form-select" disabled>
                                <option value="0" @if ($d->status == '0') selected @endif>Available
                                </option>
                                <option value="1" @if ($d->status == '1') selected @endif>Booked
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
