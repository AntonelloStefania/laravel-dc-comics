@extends ('layouts.app')


@section('content')
    <main>
        <div class="container-fluid bg-dark">
            <div class="row justify-content-center">
                <h2 class=" fw-bold text-white text-center mt-4">Add New Comics</h2>
                <div class="col-4 fw-bold card my-5  p-4">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('comics.store')}}" method="POST">
                        @csrf
                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Thumb URL:
                            </label>
                            <input class="ps-3 form-control" type="text" id="thumb" name="thumb"  value="{{old('thumb')}}">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Titolo:
                            </label>
                            <input class="ps-3 form-control" type="text" id="title" name="title" value="{{old('title')}}">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Serie:
                            </label>
                            <input class="ps-3 form-control" type="text" id="serie" name="series" value="{{old('series')}}">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Prezzo:
                            </label>
                            <input class="ps-3 form-control" type="text" id="prezzo" name="price" value="{{old('price')}}">
                        </div>

                        <div class="form-group my-5 d-flex flex-column ">
                            <label for="" class="control-label mb-3">
                                Tipo:
                            </label>
                            <input class="ps-3 form-control" type="text" id="tipo" name="type" value="{{old('type')}}">
                        </div>

                        <div class="col-12 d-flex justify-content-center py-4">
                            <button type="submit" class="btn btn-md btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

@endsection