<?php namespace App\Http\Controllers;
use DB;
use Request;
use App\Tile;

class WelcomeController extends Controller {
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
		$this->middleware('guest');
	}
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	
	public function index()
	{	
		$showTiles = Tile::orderBy('created_at', 'desc')->paginate('3');

        return view('app', compact('showTiles'));
	}

	public function search()
	{
		$input = Request::input('keyword');


		$search  = DB::table('tile')->where('title', 'LIKE', '%'.$input.'%')
                    ->orWhere('place','LIKE', '%'.$input.'%')
                    ->get();

        if (!empty($search))
        {
        	return view('search', compact('search'));
        }   
        else 
        {
        	return '<h3>Sorry, No results for '. $input .'</h3>';
        }
    }	

    public function tiles_pub()
    {
    	$showTiles = Tile::orderBy('created_at', 'desc')->paginate('9');

        return view('tiles_pub', compact('showTiles'));

    }
    public function template()
    {
    	return view('template');
    }

    public function logintemplate()
    {
    	return view ('logintemp');
    }
}