<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Carbon;
use URL;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $books = Book::paginate(20);
        return view('admin.books.list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('admin.books.create', compact('authors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'thumbnail'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $file_name = '';
        if ($request->file('thumbnail')) {
            $yearCurrent = Carbon::now()->format('Y');
            $monthCurrent = Carbon::now()->format('m');
            $dayCurrent = Carbon::now()->format('d');
            $url = 'images/upload/books/'.$yearCurrent.'/'.$monthCurrent.'/'.$dayCurrent;

            $destinationPath = public_path($url);
            $files = $request->file('thumbnail');
            $file_name = $files->getClientOriginalName(); 
            $files->move($destinationPath , $file_name); 
        }
        $data['thumbnail'] = request()->getSchemeAndHttpHost().'/'.$url.'/'.$file_name;
        $data['slug'] = $this->make_slug($data['name']);
        Book::create($data);
        return redirect('/admin/books')->with('message','Room created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = DB::table('books')->find($id);
        $categories = DB::table('categories')->get();
        $authors = DB::table('authors')->get();
        
        return view('admin.books.edit', compact('book','categories','authors'));
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
        $data = $request->except('_token');
        $file_name = '';
        if ($request->file('thumbnail')) {
            $yearCurrent = Carbon::now()->format('Y');
            $monthCurrent = Carbon::now()->format('m');
            $dayCurrent = Carbon::now()->format('d');
            $url = 'images/upload/books/'.$yearCurrent.'/'.$monthCurrent.'/'.$dayCurrent;

            $destinationPath = public_path($url);
            $files = $request->file('thumbnail');
            $file_name = $files->getClientOriginalName(); 
            $files->move($destinationPath , $file_name); 
            $data['thumbnail'] = request()->getSchemeAndHttpHost().'/'.$url.'/'.$file_name;
        }
        $data['slug'] = $this->make_slug($data['name']);
        Book::where('id', $id)->update($data);
        return redirect(route('admin.books.list'))->with('success', 'Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id', $id);
        $handleDelete = $book->delete();

        if($handleDelete) {
            return response("Success!", 200);
        }

        return response("Failded", 400);
    }

    /**
   * Make name slug
   * @param string $string
   * @return string slug
   */
    private function make_slug($string)
    {
        return preg_replace('/\s|\?|\!|\.|\%|\,|\`|\'|\$|\#|\&|\^|\+|\=|\~|\}|\{|\[|\]|\/|\<|\>|\"|\;|\:/u', '-', $string);
    }
}
