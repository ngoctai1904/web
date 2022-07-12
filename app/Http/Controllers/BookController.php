<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table("books")->orderBy('view','DESC')->take(8)->get();
        // dd($books);
        return view('books', compact('books')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('users')->delete();

        DB::table('users')->where('votes','>')->delete();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $book = DB::table('books')->where('slug',$slug)->first();
        $author = DB::table('authors')->where('id',$book->author_id)->first();
        $category = DB::table('categories')->where('id',$book->category_id)->first();
        DB::table('books')->where('slug',$slug)->update(['view' => ($book->view + 1)]);
        $bookLike = DB ::table('books')->where('category_id',$book->category_id)->get()->random(4);

        return view('bookDetail', compact('book','author','category','bookLike'));
    }
    public function list(Request $request)                          
    {
        $query = DB::table('books');
        if($request->name){
            $paramName = $request->name;
            $query = $query
            ->join('categories','books.category_id','=','categories.id')
            ->join('authors','books.author_id','=','authors.id')
            ->where(function($query2) use ($paramName){
                return $query2->where('books.name','like','%'.$paramName.'%')
                        ->orWhere('authors.name','like','%'.$paramName.'%')
                        ->orWhere('categories.name','like','%'.$paramName.'%')
                        ->orWhere('books.since','like','%'.$paramName.'%');
            })
            ->select(
                'categories.name as nameCate',
                'books.name as name',
                'authors.name as nameAuthor',
                'books.thumbnail',
                'books.slug',
                'books.price',
                'books.since'
            );
        }
        $categories = DB::table('books')
        ->join('categories','books.category_id','=','categories.id')
        ->select(
            'categories.name as nameCate',
            'books.name as nameBook',
            'category_id',
            'categories.slug as slugCate'
            )
        ->get()->groupBy('nameCate');

        $authors = DB::table('books')
        ->join('authors','books.author_id','=','authors.id')
        ->select(
            'authors.name as nameAuthor',
            'books.name as nameBook',
            'author_id',
            'authors.slug as slugAuthor'
            )
        ->get()->groupBy('nameAuthor');

        $books = $query->paginate(12);
        return view('list',['books' => $books, 'categories' => $categories,'authors' => $authors]);  
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
