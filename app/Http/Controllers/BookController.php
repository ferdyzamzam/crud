<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $book=\App\Book::all();
        //  return view('index',compact('books'));

        $books = Book::all();

         return view('index')->with('books', $books);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new \App\Book;
        $book->title = $request->get('title');
        $book->description = $request->get('description');
        $book->qty = $request->get('qty');
        $book->publisher = $request->get('publisher');
        $book->save();

        return redirect('books')->with('success', 'Data Buku Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = \App\Book::find($id);
        return view('edit',compact('book', 'id'));
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
        $book = \App\Book::find($id);
        $book->title = $request->get('title');
        $book->description = $request->get('description');
        $book->qty = $request->get('qty');
        $book->publisher = $request->get('publisher');
        $book->save();
        return redirect('books')->with('success', 'Data buku telah diubah');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = \App\Book::find($id);
        $book->delete();
        return redirect('books')->with('success', 'Data buku telah dihapus');
    }
}
