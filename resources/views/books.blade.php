@extends('base')
@section('title')
    <title>Books</title>
@endsection
@section('content')
    <!-- end header -->
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Our Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <span>Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row box">
                @foreach ($books as $book)
                    <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $book->thumbnail }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->name }}</h5>
                                <p class="card-text">{{ $book->price }}</p>
                                <a href="/books/{{ $book->slug }}" class="btn btn-primary">Go somewhere</a>
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
                    <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
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
