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
                </tr>
            </thead>
            <tbody>
                 @foreach ($data as $d)
                <tr class="">
                    <td>{{$d->name}}</td>
                    <td>{{$d->specialization}}</td>

                    {{-- <td>6:00-7:00 PM</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Log Out">
    </form>

@endsection
