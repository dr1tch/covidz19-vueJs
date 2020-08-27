<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {	
    	// dd(Auth::user());
     //    return view('admin.index', [ 
     //    	'auth_user' => Auth::user()
     //    ]);
    	$data = array();
    	$data["user"] = auth()->user();
    	$data["role"] = auth()->user()->roles;
    	
        return view('admin.index')->with("data", response()->json( [$data] ));
        // return response()->json( [$data] );
    }
}
