@extends('layouts.app')


@section('content')
    <main class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end py-4">
                    <a href="{{route('comics.create')}}" class="btn btn-primary btn-sm">Add Comics</a>
                </div>
                <div class="col-12 d-flex flex-wrap justify-content-center">
                   
                   @foreach($comics as $comic)
                   
                        <div class="card col-12 col-md-5 col-lg-3 m-2 d-flex flex-column justify-content-between">
                            <img src="{{$comic->thumb}}" class="h-75 card-img-top img-fluid" alt="{{$comic->thumb2}}">
                            <div class="p-3 card-text text-center">
                                <h4>{{$comic->title}}</h4>
                                <h6 class="py-3">{{$comic->series}}</h6>
                            </div>
                            <div class="d-flex justify-content-around pb-2">
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-sm btn-warning w-25">MORE</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-primary w-25">UPDATE</a>
                            </div>
                        </div>
                   @endforeach
                </div>
            </div>

        </div>
    </main>
@endsection