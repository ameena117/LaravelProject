<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::orderBy('id','asc')->get();
        return view('admin.book',compact('books'));
    }
    public function delete($id){
        try {
            
            Book::where('id',$id)->delete();
            return back()->with(['message_success'=> 'Book deleted successfully!']);
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with(['message_error'=> 'somthing wrong !']);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book=Book::all();
        return view('admin.book_create',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_book'=>'required|unique:books,title_book',
            'description'=>'required|max:191',]);
            Book::create([
                'title_book'=>$request->title_book,
                'description'=>$request->description,
                //'img'=>$request->img,
            ]);
            return back()->with(['message_success'=>'Creating Book Done']);
            //dd($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    public function view($id)
    {
        $book=Book::where('id',$id)->first();
        if($book==null){
            abort(404);
        }
        return view('admin.book_view',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::where('id',$id)->first();
        if($book==null){
            abort(404);
        }
        return view('admin.book_edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $book=Book::where('id',$id)->first();
        $data=[];
        if($book==null){
            abort(404);
        }
        $request->validate([
            'title_book'=>'required|unique:books,title_book,'.$id,
            'description'=>'required|max:191',
        ]);
        $data['title_book']=$request->title_book;
        $data['description']=$request->description;
        if ($request->title_book==null) {
            $data['title_book']=$request->title_book;
        }
        $book->update($data);
        return back()->with(['message_success'=>'Done Update Book']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}