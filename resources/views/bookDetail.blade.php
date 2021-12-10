@extends('base')
@section('title')
    <title>Books</title>
@endsection
@section('content')
    <div class="about-bg">
        <div class="row detail-product ">
            <div class="col-xl-5 col-md-5 col-sm-6 col-6 fs-t-ct">
                <img class="detail-product-thumbnail " style="" src="{{ $book->thumbnail }}" alt="">
            </div>
            <div class="col-xl-7 col-md-7 col-sm-6 col-6 ct-vertical">
                <div class="fs-lh-40 detail-infomation-product" style="width:100%;">
                    <h1>{{ $book->name }}</h1>
                    <div>
                        <h2>Since: {{ $book->since }}</h2>
                    </div>
                    <div>
                        <h3>Author:{{ $author->name }}</h3>
                    </div>
                    <h4>Category:{{ $category->name }}</h4>
                    <div>
                        @if (!empty($book->discount))
                            <span class="cl-ff3b3b fs-31 fs-bold" id="product-discount">{{ $book->discount }}
                                $</span> <span class="cl-4e4e4e fs-31 fs-bold spaceInPrice">|</span>
                            <span class="cl-4e4e4e fs-td-lt fs-31 fs-bold" id="product-price">{{ $book->price }}
                                $</span>
                        @else
                            <span class="cl-4e4e4e fs-td-lt fs-31 fs-bold" id="product-price">{{ $book->price }}
                                $</span>
                        @endif
                    </div>
                    <div>
                        <button type="button" class="btn btn-info">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview__product fs-t-ct">
            <h3>Over view</h3>
            {!! $book->overview !!}
        </div>
        <h1 class="fs-40 fs-t-ct">Book like that</h1>
        <div class="product__inCategory row">
            @foreach ($bookLike as $item)
                <div class="col-xl-3 col-md-3 col-sm-12 col-12 fs-t-ct pd-b-10" style="border-bottom: none;">
                    <a href="/books/{{$item->slug}}">
                        <img src="{{$item->thumbnail}}" alt="">
                    </a>
                    <div>
                        <h4 class="cl-4e4e4e "><a href="/books/{{$item->slug}}">{{$item->name}}</a></h4>
                        <a href="#" class="cl-4e4e4e fs-bold">Author</a>
                        <p class="cl-4e4e4e">{{$item->since}}</p>
                        @if ($item->discount)
                        <span class="cl-ff3b3b fs-bold">{{$item->discount}}</span> |
                        <span class="cl-4e4e4e fs-td-lt">{{$item->price}}</span>
                        @else 
                        <span class="cl-4e4e4e fs-td-lt">{{$item->price}}</span>
                        @endif
                    </div>
                </div>
            @endforeach
            {{-- Các sản phẩm nằm trong danh mục cùng với cái trên --}}
        </div>
    </div>
    </div>
    </div>
@endsection
