@extends('layouts.employer')

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
                            <li class="list-inline-item"><a href="#" class="text-muted">{{$internship->user->name}}</a>
                            </li>
                            <li class="list-inline-item">{{$internship->city->name}}</li>
                        </ul>

                        {{$internship->small_description}}

                    </div>

                </div>

            </div>

            <!-- /cards layout -->

        @endforeach
    </div>

@endsection
