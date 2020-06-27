@extends('layouts.student')

@section('page-header')

{{--    <div class="page-header page-header-light">--}}
{{--        <div class="page-header-content header-elements-md-inline">--}}
{{--            <div class="page-title d-flex">--}}
{{--                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>--}}
{{--                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>--}}
{{--            </div>--}}

{{--            <div class="header-elements d-none">--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>--}}
{{--                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>--}}
{{--                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection

@section('content')

    <!-- Right content -->
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

@endsection
