@extends('base')
@section('title')
    <title>CategoriesBook</title>
@endsection
@section('content')
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>{{ $category->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Books">
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $book->thumbnail }}" class="card-img-top" alt="..." style="height: 450px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->name }}</h5>
                                <p class="card-text">{{ $book->price }}</p>
                                <a href="/books/{{ $book->slug }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="paginate">
                {{ $books->links('paginate.bootstrap-4') }}
            </div>
        </div>
    @endsection
