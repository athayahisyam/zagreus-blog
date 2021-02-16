<?php

namespace App\Http\Controllers;

use App\Models\Author;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // PDO Based Query
        // $user = DB::table('authors')->get();

        // Eloquent Based Query
        $authors = Author::all();

        // dd($user); 
        return view('dash.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.create');
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
            'given_name' => 'required',
            'family_name' => 'required',
            'email' => 'required',
        ]);

        // PDO

        // $authors = new Author;
        // $authors->given_name = $request->given_name;
        // $authors->family_name = $request->family_name;
        // $authors->email = $request->email;
        // $authors->save();

        // Eloquent: Without $fillable in \Models\Author

        // Author::create([
        //     'given_name' => $request->given_name,
        //     'family_name' => $request->family_name,
        //     'email' => $request->email,
        // ]);

        // Eloquent: With $fillable in \Models\Author
        Author::create($request->all());

        return redirect('/dashboard')->with('status', 'Entry Successful');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $authors)
    {
        return view('dash.show', ['authors' => $authors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $authors)
    {
        return view('dash.edit', ['authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $authors)
    {
        $request->validate([
            'given_name' => 'required',
            'family_name' => 'required',
            'email' => 'required',
        ]);
        
        Author::where('id', $authors->id)->update([
            'given_name' => $request->given_name,
            'family_name' => $request->family_name,
            'email' => $request->email,
        ]);
        return redirect('/dashboard')->with('status', 'Edit Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $authors)
    {
        Author::destroy($authors->id);
        return redirect('/dashboard')->with('status', 'Delete Successful');
    }
}
