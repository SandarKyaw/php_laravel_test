@extends('user.doctor.layout.master')
@section('content')
    {{-- table --}}
    <div class="table_container mt-4">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Section</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr class="">
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        {{-- <td>{{ $d->specialization }}</td> --}}

                        <td> {{ $d->start_time }} - {{ $d->end_time }}</td>
                        <td>

                            <select name="status" id="" class="list-group-item-primary form-select" disabled>
                                <option value="0" @if ($d->status == '0') selected @endif>Available
                                </option>
                                <option value="1" @if ($d->status == '1') selected @endif>Booked
                                </option>
                            </select>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
