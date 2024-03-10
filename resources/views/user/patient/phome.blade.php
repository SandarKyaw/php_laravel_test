@extends('user.patient.layout.master')
@section('content')
    <div class="row">
        <div class="col-10">

            @foreach ($data as $d)
                <div class="card my-2">
                    <div class="card-body row">

                        <div class="col">
                            <div class="">
                                @if ($d->image == null)
                                    <img src="{{ asset('defaultImage1.jpg') }}" class="shadow-sm img-thumbnail" width="100px"
                                        alt="">
                                @else
                                    <img src="{{ asset('storage/' . $d->image) }}" alt=""
                                        class="shadow-sm img-thumbnail" />
                                @endif
                            </div>
                        </div>

                        <div class="col">
                            <div class="shadow-sm my-3">Doctor : {{ $d->name }}</div>
                            <div class="shadow-sm my-3">Specialization: {{ $d->specialization }}</div>
                        </div>


                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

