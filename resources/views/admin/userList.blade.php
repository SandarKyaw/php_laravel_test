@extends('layouts.master')
@section('title', 'admin dashboard')

@section('content')

<div class="searchBox">
    <div class="row">
        <div class="col">
            <input type="search" name="name" id="" class="form-control" placeholder="Enter name">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-info">Search</button>
        </div>
    </div>
</div>

    {{-- table --}}
    <div class="table_container mt-4">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                 @foreach ($data as $d)
                <tr class="">
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->gender}}</td>
                    <td>{{$d->email}}</td>
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
