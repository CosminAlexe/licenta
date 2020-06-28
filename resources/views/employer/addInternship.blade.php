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
                            <label>Titlu:</label>
                            <input type="text" class="form-control" name="title" placeholder="Titlul" value="">
                        </div>

                        <div class="form-group">
                            <label>O descriere scurta:</label>
                            <input type="text" class="form-control" name="small_description" placeholder="O scurta descriere" value="">
                        </div>

                        <div class="form-group">
                            <label>Desciere pe larg:</label>
                            <textarea rows="4" cols="4" class="form-control" name="description" placeholder="Descriere" ></textarea>
                        </div>

                        <div class="form-group">
                            <label>Cerinte:</label>
                            <input type="text" class="form-control" name="requirements" placeholder="Cerinte" value="">
                        </div>

                        <div class="form-group">
                            <label>Perioada:</label>
                            <div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                                <input type="text" class="form-control daterange-basic" value="01/01/2015 - 01/31/2015">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Salariul:</label>
                            <input type="text" class="form-control" name="salary" placeholder="Salariul" value="">
                        </div>

                        <div class="form-group">
                            <label>Oras:</label>
                            <select name="city_id" id="city_id" class="form-control select">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Categorie:</label>
                            <select name="category_id" id="categor_id" class="form-control select">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-teal-400">Adauga<i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection
