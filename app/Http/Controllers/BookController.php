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
        $books = DB::table("books")->take(8)->get()->toArray();
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
        //
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
        $bookLike = DB ::table('books')->where('category_id',$book->category_id)->get()->random(4);
        return view('bookDetail', compact('book','author','category','bookLike'));
    }
    public function list()
    {
        $books = DB::table('books')->paginate(10);
        $categories = DB::table('books')
        ->join('categories','books.category_id','=','categories.id')
        ->select(
            'categories.name as nameCate',
            'books.name as nameBook',
            'category_id',
            'categories.slug as slugCate'
            )
        ->get()->groupBy('nameCate');
        return view('list',['books' => $books, 'categories' => $categories]);
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
