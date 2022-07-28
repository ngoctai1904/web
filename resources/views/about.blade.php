@extends('base')
@section('title')
    <title>About</title>
@endsection
@section('content')
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="aboutheading">
                        <span>Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="about-box">
                        <p> Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <a href="{{ route('front-list') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/about.png') }}" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
<!-- end about -->
