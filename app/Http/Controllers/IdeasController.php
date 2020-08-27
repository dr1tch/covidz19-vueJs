<?php

namespace App\Http\Controllers;

use App\User;
use App\Ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // if(auth()->user()){
        //   return view('user.ideas.index', [
        //     'ideas' => auth()->user()->timeline()
        //   ]);
        // } else {
        //   return view('guest.index',[
        //     'ideas' => Idea::latest()->get()
        //   ]);
        // }
        $ideas = Idea::where('status', 1);
        return view('user.ideas.index',[
            'ideas' => $ideas->latest()->get(),
            'categories' => Categorie::all()
          ]);
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
     * @param  \App\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function show(Ideas $ideas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function edit(Ideas $ideas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ideas $ideas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ideas $ideas)
    {
        //
    }
}
