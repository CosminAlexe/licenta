@extends('layouts.student')

@section('content')

    <!-- Details !-->
    <div class="card">
        <div class="card-body">

            <div class="media flex-column flex-md-row mb-4">
                <a href="#" class="align-self-md-center mr-md-3 mb-2 mb-md-0">
                    <img src="{{$internship->user->picture}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="media-body">
                    <h5 class="media-title font-weight-semibold">{{$internship->title}}</h5>
                    <ul class="list-inline list-inline-dotted text-muted mb-0">
                        <li class="list-inline-item">{{$internship->user->name}}</li>
                        <li class="list-inline-item">{{$internship->city->name}}</li>
                    </ul>
                </div>
            </div>

            <div class="mb-4">
                <h6 class="font-weight-semibold">Descriere Internship</h6>

                <p>{{$internship->description}}</p>

                @if($internship->salary)
                    <p>Salariu: {{$internship->salary}} lei</p>
                @endif
            </div>

            <div class="mb-4">
                <h6 class="font-weight-semibold">Cerinte Internship</h6>

                <p>{{$internship->requirements}}</p>

            </div>

            <div class="mb-4">
                <h6 class="font-weight-semibold">Perioada Internship</h6>

                <p>Incepe la data: {{date("d/m/Y", strtotime($internship->start_date))}}</p>

                <p>Se incheie la data: {{date("d/m/Y", strtotime($internship->end_date))}}</p>
            </div>

        </div>
    </div>

@endsection
