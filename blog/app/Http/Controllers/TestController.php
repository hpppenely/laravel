<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;

class TestController extends Controller
{
    //
    public function test1(){
    	$data = DB::table('news')->where('id', '<=', '200')->paginate(10);
    	// dd(DB::table('news')->limit(10)->get());
    	return view('test/test1', ['data'=>$data]);
    }
}
