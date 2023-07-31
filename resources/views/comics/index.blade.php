@extends('layouts.app')


@section('content')
    <main class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">
                   
                   @foreach($comics as $comic)
                   
                        <div class="card col-3 m-2">
                            <img src="{{$comic->thumb}}" class="h-75 card-img-top img-fluid" alt="{{$comic->thumb2}}">
                            <div class="p-3 card-text text-center">
                                <h4>{{$comic->title}}</h4>
                                <h6 class="py-3">{{$comic->series}}</h6>
                            </div>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-sm btn-warning w-50">MORE</a>
                        </div>
                   @endforeach
                </div>
            </div>

        </div>
    </main>
@endsection