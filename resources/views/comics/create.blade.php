@extends ('layouts.app')


@section('content')
    <main>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-8 offset-2 text-white  ">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Thumb
                            </label>
                            <input type="text" id="thumb" name="thumb" placeholder="thumb">
                        </div>

                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Titolo
                            </label>
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </div>

                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Serie
                            </label>
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </div>


                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Prezzo
                            </label>
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </div>


                        <div class="form-group my-5 d-flex flex-column text-center">
                            <label for="" class="control-label mb-3">
                                Tipo
                            </label>
                            <input type="text" id="title" name="title" placeholder="titolo">
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </main>

@endsection