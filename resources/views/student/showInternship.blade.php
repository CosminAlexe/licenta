@extends('layouts.student')

@section('content')

    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">

        <!-- Left content -->
        <div class="tab-content w-100 overflow-auto order-2 order-md-1">

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

                <div class="text-center align-self-md-center ml-md-3 mt-2 mt-md-0">
                    @if(!$application)
                        <a href="/student-apply/{{$internship->id}}" class="btn bg-blue font-weight-bold">
                            <i class="icon-envelop2 mr-2"></i>
                            Aplica pentru internship
                        </a>
                    @endif

                    @if($application)
                        <p class="btn disabled bg-green-800 text-white font-weight-bold">Status: {{$application->status}}</p>
                    @endif
                </div>

            </div>
        </div>

        </div>
        <!-- Left content -->

        <!-- Right sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="rounded-circle" src="{{$internship->user->picture}}" width="170" height="170" alt="">
                            <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                </a>
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="font-weight-semibold mb-0">{{$internship->user->name}}</h6>
                        <p class=""><i class="icon-mail5 font-weight-bold"></i> {{$internship->user->email}}</p>
                        @if($internship->user->phone_number)
                            <p class=""><i class="icon-phone2 font-weight-bold"></i> {{$internship->user->phone_number}}</p>
                        @endif
                        <p class=""><i class="icon-chrome font-weight-bold text-yellow"></i> <a href="#">angajator1.com</a></p>
                        <p class=""><i class="icon-facebook2 font-weight-bold text-blue"></i> <a href="#">facebook.com/angajator1</a></p>
                        <h6 class="font-weight-bold mt-4">Despre Angajator</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <!-- Sidebar content -->

        </div>
        <!-- Right sidebar component -->
    </div>
    <!-- Inner container -->
@endsection
