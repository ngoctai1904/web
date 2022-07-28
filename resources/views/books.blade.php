@extends('base')
@section('title')
    <title>Books</title>
@endsection
@section('content')
    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <span>Wellcome to Memorial Library</span>
                    </div>
                </div>
            </div>
            <div class="row box  home__books">
                @foreach ($books as $book)
                    <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12">
                        <div class="card" style="width: 100%;">
                            <img src="{{ $book->thumbnail }}" class="card-img-top" alt="..." style="height: 350px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->name }}</h5>
                                <p class="card-text {{ $book->discount ? 'text-danger' : ''  }}">{{ $book->discount ? $book->discount : $book->price }}$</p>
                                <a href="/books/{{ $book->slug }}" class="btn btn-primary">Go Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-6 offset-md-3">
                <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
            </div> --}}
            </div>
            <div style="padding: 20px 0;"></div>
            <div class="row box">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('assets/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('assets/images/book-2.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('assets/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('assets/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('assets/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{ asset('assets/images/book-1.jpg') }}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <p>Magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="read-more">
                            <a href="{{ route('front-list') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Books -->
@endsection
