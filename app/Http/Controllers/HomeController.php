<?php namespace App\Http\Controllers;
use App\Tile;
use DB;
use Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function home()
	{
		$user = \Auth::user()->name;
		$showTiles = Tile::orderBy('created_at', 'desc')->paginate('20');

		return view('home')->with(compact('user', 'showTiles'));
	}

	public function search_int()
	{
		$input = Request::input('keyword');


		$search  = DB::table('tile')->where('title', 'LIKE', '%'.$input.'%')
                    ->orWhere('place','LIKE', '%'.$input.'%')
                    ->get();

        if (!empty($search))
        {
        	return view('search_int', compact('search'));
        }   
        else 
        {
        	return '<h3>Sorry, No results for '. $input .'</h3>';
        }
    }	
}