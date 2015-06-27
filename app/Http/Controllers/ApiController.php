<?php namespace App\Http\Controllers;
class ApiController extends Controller {
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

	public function api()
	{
		$key = 'nYZwoYUo';
		$origName = 'Warsaw';
		$destName = 'London';
		$uri = 'http://free.rome2rio.com/api/1.2/json/Search?key='.$key.'&oName='.$origName.'&dName='.$destName;
		$client   = new \GuzzleHttp\Client([
			
			]);
  
    	$responses = $client->get($uri);
  		//return $responses->getStatusCode();
// "200"
		//return $responses->getHeader('content-type');
// 'application/json; charset=utf8'
    	 $res = $responses->getBody();
    	
    	
    	$decode = json_decode($res, true);

    	return $decode;
    }
 }