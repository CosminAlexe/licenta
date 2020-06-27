@extends('layouts.employer')

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

    <!-- Applicants !-->

    <div class="row">

        @foreach($applicants as $applicant)

            <div class="col-xl-6 col-md-6">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="/employer-show-student/{{$applicant->id}}/from-internship/{{$internship->id}}">
                                <img src="{{$applicant->picture}}" class="rounded-circle" width="62" height="62" alt="">
                            </a>
                        </div>

                        <div class="media-body">

                            <div class="media-title font-weight-semibold">
                                <a href="/employer-show-student/{{$applicant->id}}/from-internship/{{$internship->id}}" class="text-dark">
                                    {{$applicant->name}}
                                </a>
                            </div>

                            <div class="text-muted">{{$applicant->studentProfile->faculty ? $applicant->studentProfile->faculty : '-'}} </div>
                            <div class="text-muted">{{$applicant->studentProfile->university ? $applicant->studentProfile->university : '-'}} </div>

                        </div>

                        <div class="ml-3 align-self-center">
                            <span class="badge bg-blue {{$applicant->application->status == 'acceptat' ? 'bg-green' : ''}} {{$applicant->application->status == 'respins' ? 'bg-danger' : ''}}">{{$applicant->application->status}}</span>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>


@endsection
