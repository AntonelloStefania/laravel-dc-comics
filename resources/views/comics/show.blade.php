@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 my-5 text-center">
                <img src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">
                <div class="py-4">
                    <h3 class="text-center">{{$comic->title}}</h3>
                    <h5>{{$comic->series}}</h5>
                </div>
                <div class="py-3 text-center">
                    <h6><strong>Type:</strong> {{$comic->type}}</h6>
                    <span><strong>Release Date:</strong> {{$comic->sale_date}}</span>
                    <div class="mt-5">
                        <h4>Plot:</h4>
                        <p >{{$comic->description}}</p>
                    </div>
                    <h6><strong>Price:</strong> {{$comic->price}}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection