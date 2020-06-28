@extends('layouts.student')

@section('page-header')

    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4>Sunt disponibile {{$internships->count()}} internship-uri </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
            </div>
        </div>
    </div>

@endsection

@section('content')


    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">

        <!-- Left content -->
        <div class="tab-content w-100 overflow-auto order-2 order-md-1">
            <div class="flex-fill overflow-auto">
                @foreach($internships as $internship)

                    <!-- Cards layout -->

                        <div class="card card-body">

                        <div class="media flex-column flex-sm-row">
                            <div class="my-auto mr-sm-3">
                                <a href="#">
                                    <img src="{{$internship->user->picture}}" class="rounded" width="64" height="64"
                                         alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold">
                                    <a href="/student-show-internship/{{$internship->id}}">{{$internship->title}}</a>
                                </h6>

                                <ul class="list-inline list-inline-dotted text-muted mb-2">
                                    <li class="list-inline-item"><a href="#" class="text-muted">{{$internship->user->name}}</a>
                                    </li>
                                    <li class="list-inline-item">{{$internship->city->name}}</li>
                                </ul>

                                {{$internship->small_description}}

                            </div>

                            <div class="ml-sm-3 my-auto">
                                @if($internship->application)
                                    <span class="badge bg-blue {{$internship->application->status == 'acceptat' ? 'bg-green' : ''}} {{$internship->application->status == 'respins' ? 'bg-danger' : ''}}">{{$internship->application->status}}</span>
                                    @else
                                        <span class="badge bg-grey">nu ai aplicat</span>
                                @endif
                            </div>
                        </div>


                    </div>

                    <!-- /cards layout -->

                @endforeach
            </div>
        </div>
        <!-- Left Content !-->

        <!-- Right sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <div class="card">
                    <div class="card-body">
                        <!-- Cities !-->
                        <h6>Orase</h6>
                        <div class="form-group">
                            @foreach($cities as $city)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        {{$city->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Cities !-->

                        <!-- Categories !-->
                        <h6>Categorii</h6>
                        <div class="form-group">
                            @foreach($categories as $category)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        {{$category->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Categories !-->
                    </div>
                </div>



            </div>
            <!-- Sidebar content -->

        </div>
        <!-- Right sidebar component -->
    </div>

@endsection
