<?php 
namespace App\Http\Controllers;
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

	public function upload()
    {
        $file = Request::file('file');
       // $serializedFile = array();

        //foreach ($files as $file) {
            // Validate files from input file
          //  $validation = Tile::validateImage(array('file'=> $file));

            //if (! $validation->fails()) {

                // If validation pass, get filename and extension
                // Generate random (12 characters) string
                // And specify a folder name of uploaded image
                $fileName        = $file->getClientOriginalName();
                $extension       = $file->getClientOriginalExtension();
                $folderName      = str_random(12);
                $destinationPath = 'uploads/' . $folderName;

                // Move file to generated folder
                $file->move($destinationPath, $fileName);

                echo '<img src="uploads/'. $fileName;
				}
                /*

                // Crop image (possible by Intervention Image Class)
                // And save as miniature
                Image::make($destinationPath . '/' . $fileName)->crop(250, 250, 10, 10)->save($destinationPath . '/min_' . $fileName);

                // Insert image information to database
                Tile::insertImage($folderName, $fileName);
            } else {
                return Redirect::route('home');
                        ///->with('status', 'alert-danger')
                        //->with('image-message', 'There is a problem uploading your image!');
            }

            $serializedFile[] = $folderName;
        }

        return Redirect::route('search');
                        //->with('status', 'alert-success')
                        //->with('files', $serializedFile)
                        //->with('image-message', 'Congratulations! Your photo(s) has been added');
    } */
}