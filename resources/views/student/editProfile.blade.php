@extends('layouts.student')


@section('content')

    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">

        <!-- Left content -->
        <div class="tab-content w-100 overflow-auto order-2 order-md-1">

            <div class="card">

                <div class="card-body">
                    <form method="POST" action="/student-edit-profile">
                        @csrf

                        <div class="form-group">
                            <label>Nume de utilizator:</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <label>Numar de telefon:</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Numarul tau de telefon" value="{{$user->phone_number}}">
                        </div>

                        <div class="form-group">
                            <label>Universitatea:</label>
                            <input type="text" class="form-control" name="university" placeholder="Universitatea" value="{{$profile->university}}">
                        </div>

                        <div class="form-group">
                            <label>Facultatea:</label>
                            <input type="text" class="form-control" name="faculty" placeholder="Facultatea" value="{{$profile->faculty}}">
                        </div>

                        <div class="form-group">
                            <label>Anul de studii:</label>
                            <input type="text" class="form-control" name="current_year" placeholder="Anul de studii" value="{{$profile->current_year}}">
                        </div>

                        <div class="form-group">
                            <label>Despre tine:</label>
                            <textarea rows="4" cols="4" class="form-control" name="about_you" placeholder="Povesteste-ne despre tine" >{{$profile->about_you}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Aptitudini:</label>
                            <input type="text" class="form-control" name="skills" placeholder="Aptitudinile tale" value="{{$profile->skills}}">
                        </div>

                        <div class="form-group">
                            <label>Proiecte:</label>
                            <textarea rows="4" cols="4" class="form-control" name="projects" placeholder="Povesteste-ne despre proiectele tale" >{{$profile->projects}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Limbi straine:</label>
                            <input type="text" class="form-control" name="foreign_languages" placeholder="Ce limbi straine vorbesti" value="{{$profile->foreign_languages}}">
                        </div>

                        <div class="form-group">
                            <label>Experienta:</label>
                            <textarea rows="4" cols="4" class="form-control" name="experience" placeholder="Povesteste-ne despre experienta ta" >{{$profile->experience}}</textarea>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn bg-teal-400">Modifica profilul<i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
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
                            <img class="rounded-circle" src="{{$user->picture}}" width="170" height="170" alt="">
                            <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                </a>
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="font-weight-semibold mb-0">{{$user->name}}</h6>
                        <p class=""><i class="icon-mail5 font-weight-bold"></i> {{$user->email}}</p>
                        @if($user->phone_number)
                            <p class=""><i class="icon-phone2 font-weight-bold"></i> {{$user->phone_number}}</p>
                        @endif
                    </div>
                </div>

            </div>
            <!-- Sidebar content -->

        </div>
        <!-- Right sidebar component -->

    </div>
    <!-- Inner container -->

@endsection
