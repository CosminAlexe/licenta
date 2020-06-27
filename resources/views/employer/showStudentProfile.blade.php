@extends('layouts.employer')


@section('content')


    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">

        <!-- Left content -->
        <div class="tab-content w-100 overflow-auto order-2 order-md-1">

            <div class="card">

                <div class="card-body">

                    <h6 class="font-weight-bold">Despre mine</h6>
                    <p>{{$student->studentProfile->about_you ? $student->studentProfile->about_you : '-'}}</p>

                    <h6 class="font-weight-bold">Educatie</h6>
                    <p>Universitate {{$student->studentProfile->university ? $student->studentProfile->university : '-'}}</p>

                    <p>Facultate {{$student->studentProfile->faculty ? $student->studentProfile->faculty : '-'}}</p>

                    <p>Anul {{$student->studentProfile->current_year ? $student->studentProfile->current_year : '-'}}</p>

                    <h6 class="font-weight-bold">Aptitudini</h6>
                    <p>{{$student->studentProfile->skills ? $student->studentProfile->skills : '-'}}</p>

                    <h6 class="font-weight-bold">Limbi straine</h6>
                    <p>{{$student->studentProfile->foreign_languages ? $student->studentProfile->foreign_languages : '-'}}</p>

                    <h6 class="font-weight-bold">Experienta</h6>
                    <p>{{$student->studentProfile->experience ? $student->studentProfile->experience : '-'}}</p>

                    <h6 class="font-weight-bold">Proiecte</h6>
                    <p>{{$student->studentProfile->projects ? $student->studentProfile->projects : '-'}}</p>

                </div>

            </div>

       </div>
        <!-- Left content -->

        <!-- Right sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User card -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="rounded-circle" src="{{$student->picture}}" width="170" height="170" alt="">
                        </div>

                        <h6 class="font-weight-semibold mb-0">{{$student->name}}</h6>
                        <p class=""><i class="icon-mail5 font-weight-bold"></i> {{$student->email}}</p>

                        @if($student->phone_number)
                            <p class=""><i class="icon-phone2 font-weight-bold"></i> {{$student->phone_number}}</p>
                        @endif

                    </div>
                </div>
                <!-- /user card -->

                <div class="card">
                    <div class="card-body">

                        <h6 class="font-weight-bold">A aplicat pentru </h6>
                        <p>Internship: {{$internship->title}}</p>
                        <p>Categorie: {{$internship->category->name}}</p>
                        <p>Oras: {{$internship->city->name}}</p>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <h6 class="font-weight-bold">Status: {{$application->status}}</h6>
                        @if($application->status != 'acceptat')
                            <div class="text-center">
                                <a href="/accept-student/{{$student->id}}/at-internship/{{$internship->id}}" class="btn btn-success">Accepta</a>
                                <a href="/reject-student/{{$student->id}}/at-internship/{{$internship->id}}" class="btn btn-danger">Respinge</a>
                            </div>
                        @endif

                    </div>
                </div>


            </div>
            <!-- Sidebar content -->

        </div>
        <!-- Right sidebar component -->



    </div>



@endsection
