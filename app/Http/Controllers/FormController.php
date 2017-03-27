<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
    	$nama = $request->input('nama');
    	$email = $request->input('email');
    	$gender = $request->input('gender');
    	$senjata = $request->input('senjata');

    	return view('form')
    	->with('nama',$nama)
    	->with('email',$email)
    	->with('gender',$gender)
    	->with('senjata',$senjata);
    }
}
