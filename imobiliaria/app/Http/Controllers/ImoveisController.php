<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;


class ImoveisController extends Controller
{
    //

       public function index(){
    	return view('imoveis.index');
	   } 
}