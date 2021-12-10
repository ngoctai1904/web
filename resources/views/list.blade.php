@extends('base')
@section('title')
    <title>Books</title>
@endsection
@section('content')
<style>
.list__item{
    display: flex;
    justify-content: center;
}
.list__item:nth-child(n + 5){
    margin-top: 20px;
}
.paginate{
    display: flex;
    justify-content: end;
    margin-right: 10vw;
}
.about-bg h1 {
    text-align: center;
}
.list-group{
    flex-direction: row;
    flex-wrap: wrap;
}
</style>
<div class="about-bg">
    <ul class="list-group">
        @foreach ($categories as $key => $item)
        <a href="/categories/{{$item[0]->slugCate}}">
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$key}}
            <span class="badge badge-primary badge-pill">{{count($item)}}</span>
            </li>
        </a>
        @endforeach
      </ul>
    <h1>List books</h1>
    <div class="row">
        @foreach ($books as $book)
        <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12 list__item">
            <div class="card" style="width: 18rem;">
               <img src="{{$book->thumbnail}}" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$book->name}}</h5>
                 <p class="card-text">{{$book->price}}</p>
                 <a href="/books/{{$book->slug}}" class="btn btn-primary">Go somewhere</a>
               </div>
             </div>
         </div>
        @endforeach
    </div>
    <div class="paginate">
        {{ $books->links('paginate.bootstrap-4')}}
    </div>
</div>
@endsection