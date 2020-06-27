@extends('layouts.employer')

@section('content')

    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">

        <!-- Left content -->
        <div class="tab-content w-100 overflow-auto order-2 order-md-1">

            <div class="card">

                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                        <div class="form-group">
                            <label>Nume de utilizator:</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <label>Numar de telefon:</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Numarul tau de telefon" value="{{$user->phone_number}}">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-teal-400">Modifica profilul<i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <!-- Left content !-->

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

                    </div>
                </div>

            </div>
            <!-- Sidebar content -->

        </div>
        <!-- Right sidebar component -->
    </div>
@endsection
