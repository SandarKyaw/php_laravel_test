@extends('layouts.master')
@section('title', 'admin dashboard')

@section('content')

    {{-- table --}}
    <div class="table_container mt-4">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Speciailist</td>
                    <td>Schedule</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Doo DOO</td>
                    <td>Cardiology</td>
                    <td>6:00-7:00 PM</td>
                </tr>
            </tbody>
        </table>

    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Log Out">
    </form>

@endsection
@extends('layouts.master')
@section('title', 'admin dashboard')

@section('content')

    {{-- table --}}
    <div class="table_container mt-4">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <td>AppointmentID</td>
                    <td>DoctorID</td>
                    <td>PatientID</td>
                    <td>AppointmentDate</td>
                    <td>AppointmentTime</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Doo DOO</td>
                    <td>Cardiology</td>
                    <td>6:00-7:00 PM</td>
                </tr>
            </tbody>
        </table>

    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Log Out">
    </form>

@endsection
