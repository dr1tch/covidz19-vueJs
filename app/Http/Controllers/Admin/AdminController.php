<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {		
    	$data = array();
    	$data["user"] = Auth::user();
    	$data["role"] = auth()->user()->roles;
    	
        // return view('admin.index')->with("data", $data);
        return response()->json( [$data] );
    }


}
