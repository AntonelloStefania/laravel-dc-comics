@extends('layouts.app')


@section('content')
    <main class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end py-4">
                    <a href="{{route('comics.create')}}" class="btn btn-primary btn-lg">Add new Comics</a>
                </div>
                <div class="col-12 d-flex flex-wrap justify-content-center my-5">
                   
                   @foreach($comics as $comic)
                        <div class="card col-12 col-md-5 col-lg-3 m-2 d-flex flex-column justify-content-between">
                            <img src="@if(!empty($comic->thumb)) {{$comic->thumb}} @else https://static.posters.cz/image/750/locandine-film-in-plexiglass-dc-comics-justice-league-heroic-i51233.jpg @endif" class="h-75 card-img-top img-fluid" alt="{{ $comic->thumb2 }}">
                            <div class="p-3 card-text text-center">
                                <h4>{{$comic->title}}</h4>
                                <div class="d-flex justify-content-around pb-2">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-sm btn-warning fw-bold">More <i class="fa-solid fa-circle-info" style="color: #292828;"></i></a>
                                </div>
                                <h6 class="py-2">{{$comic->series}}</h6>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-outline-primary mx-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{route('comics.destroy', $comic->id)}}" onsubmit="return confirm('Press ok to confirm')" class="d-block" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger mx-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                   @endforeach
                </div>
            </div>

        </div>
    </main>
@endsection