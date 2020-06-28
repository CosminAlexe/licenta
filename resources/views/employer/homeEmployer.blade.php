@extends('layouts.employer')

@section('page-header')

    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4>Ai {{$internships->count()}} internship-uri</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <a href="/employer-add-internship" class="btn btn-primary">Adauga internship</a>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <!-- Right content -->
    <div class="flex-fill overflow-auto">
    @foreach($internships as $internship)

        <!-- Cards layout -->

            <div class="card card-body">

                <div class="media flex-column flex-sm-row">
                    <div class="my-auto mr-sm-3 mb-2>
                        <a href="/employer-show-internship/{{$internship->id}}">
                            <img src="{{$internship->user->picture}}" class="rounded" width="64" height="64"
                                 alt="">
                        </a>
                    </div>

                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold">
                            <a href="/employer-show-internship/{{$internship->id}}">{{$internship->title}}</a>
                        </h6>

                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                            <li class="list-inline-item">{{$internship->city->name}}</li>
                        </ul>

                        {{$internship->small_description}}

                    </div>

                    <div class="ml-sm-3 my-auto">
                        <span class="badge bg-green font-size-base">{{$internship->applicants->count()}} aplicanti</span>
                    </div>

                </div>

            </div>

            <!-- /cards layout -->

        @endforeach
    </div>

@endsection
