@extends('layouts.app')

@section('content')
    <section class="movies-section">
        <div class="container">
            <h1 class="text-center py-3">Film</h1>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-5">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ $movie->image }}" alt="{{ $movie->title }} image">
                            <div class="h-100 d-flex align-items-center justify-content-center">
                                <h3 class="card-title mt-3 mb-4 mx-1 text-center">{{ $movie->title }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
