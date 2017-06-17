<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkhirController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

   public function index()
    {
    	$a = "alif";
    	return "Nama Saya Adalah ".$a;
    }

}
