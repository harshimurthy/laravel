<?php

/**

Using query builder
namespace App\Http\Controllers;
use DB;
//inbuilt lines of code after using php artisan make:controller CardsController

class CardsController extends Controller
{
	public function index()
	{
		$cards=DB::table('cards'->get());
		Request
		return view('cards.index');
	}
}

*/

//using Laravel Eloquent

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
	public function index()
	{
		$cards=Card::all();
		return view('cards.index',campact('cards'));
	}

	public function show($id)
	{
		$card=Card::find($id);
		return view('cards.show',compact('card'));
	}
}