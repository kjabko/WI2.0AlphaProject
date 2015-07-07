<?php namespace App\Http\Controllers;
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
	

    	//return $places;

    	/*foreach ($places as $city) {
    		 $cityName = $city['name'];
    		 $cityLongName = $city['longName'];
    		 $countryCode = $city['countryCode'];
    		 $regionCode = $city['regionCode'];
    	}
    	//foreach ($decode as $place) {
    		//$places = $place['places'];
    	//	foreach ($place as $items) {
    	//	$item = $items['name'];
    	//	return $item;
    	//	}
    	//}

    	//$places = $decode['places']['name'];
    	//$place = $places['name'];
    	//$airports = $decode['airports'];

    	//$airportsDecode = json_decode($decode['places']);

    	//echo $airportsDecode['name'];

    	//for ($i = 0, $c = count($decode); $i < $c; ++$i) {
    	//$decode[$i] = (array) $decode[$i];
//}
    	//foreach($decode['airports'] as $place => $name) {
    		

    	//	$arrays[] = $response;
    	//$response;
   		//if($response == 'url'){
 		//echo '<img src="'. $value .'" alt="test"></img>';
 			
	//}
//}
    	//return view('api')->with(compact('responses'));
  
	
		
*/
		//return view('api')->with(compact('airlines'));
		
}
}