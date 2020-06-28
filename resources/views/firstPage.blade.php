@extends('layouts.app')

@section('content')
   <div class="cont d-flex justify-content-center">

           <div class="cont-text text-center text-white font-weight-bold align-self-center">
               Fa-ti cont si hai sa iti gasim internship-ul potrivit
           </div>


   </div>
@endsection

<style>
    .cont {
        background-image: url('/images/first_page4.jpg');
        background-size: cover;
        height: 100%;
        width: 100%;
    }

    .cont-text {
        width: 25rem;
        font-size: 2rem;
    }

    .content {
        padding: 0 !important;
    }
</style>
