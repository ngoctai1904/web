@extends('base')
@section('title')
    <title>Library</title>
@endsection
@section('content')
    <!-- Library -->
    <div class="Library">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="Library-box">
                            <figure><img src="{{ asset('assets/images/Library-.jpg') }}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
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
    <!-- end Library -->
@endsection
