@extends ('layouts.app')


@section('content')
    <main>
        <div class="container-fluid bg-dark">
            <div class="row justify-content-center">
                <h2 class="text-white fw-bold text-center mt-4">Add New Comics</h2>
                <div class="col-4 text-white  ">
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
                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Thumb URL:
                            </label>
                            <input class="ps-3 form-control" type="text" id="thumb" name="thumb" placeholder="thumb">
                        </div>

                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Titolo:
                            </label>
                          
                        </div>


                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Serie:
                            </label>
                            <input class="ps-3 form-control" type="text" id="serie" name="series" placeholder="Serie">
                          
                        </div>



                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Prezzo:
                            </label>
                            <input class="ps-3 form-control" type="text" id="prezzo" name="price" placeholder="Prezzo">
                            
                        </div>


                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Tipo:
                            </label>
                            <input class="ps-3 form-control" type="text" id="tipo" name="type" placeholder="Tipo">
                          
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