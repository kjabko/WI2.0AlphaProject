<?php 
namespace App\Http\Controllers;
use App\Tile;
use App\Http\Requests;
use App\Http\Requests\CreateTileRequest;
use Image;
use Redirect;
use Request;

class TilesCreateController extends Controller {

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

	public function createTile()
	{
		return view('tile_create');
	}

	public function upload(CreateTileRequest $request)
    {
        $files = Request::file('file');
        //$serializedFile = array();

        foreach ($files as $file) {

                // Generate random (12 characters) string
                // And specify a folder name of uploaded image
                $fileName        = $file->getClientOriginalName();
                $extension       = $file->getClientOriginalExtension();
                $folderName      = str_random(12);
                $destinationPath = 'uploads/' . $folderName;

                // Move file to generated folder
                $file->move($destinationPath, $fileName);

               // echo '<img src="uploads/'. $fileName;
				
                

                // resize image
                // And save as miniature
                Image::make($destinationPath . '/' . $fileName)->resize(250, 250)->save($destinationPath . '/min_' . $fileName);

                // Insert image information to database
                Tile::insertTile($folderName, $fileName);
    
                return Redirect::to('/tiles');              
        }                
    } 

    public function tilesShow()
    {
       
        $showTiles = Tile::orderBy('created_at', 'desc')->paginate('20');

        return view('tiles', compact('showTiles'));


        //return view('tiles')->with(compact('title'));

        //('images/list')
          //          ->with('title', 'List of images')
            //        ->with('images', Images::orderBy('created_at', 'desc')
              //                              ->where('private', 0)
                //                            ->paginate('42'));
    }

    public function book($id)
    {
        Tile::all();

        //return view('book', compact('showTiles'));
         return view('book')->with('userTile', Tile::findOrFail($id));


    }

    /**
     * Delete specified image from database.
     *
     * @param  int $id
     * @return object Redirect
     */
    public function destroy($id)
    {
        Tile::find($id)->delete();

        return Redirect::to('/tiles'); 
                        //->with('status', 'alert-success')
                        //->with('message', 'Image removed properly.');
    }
}