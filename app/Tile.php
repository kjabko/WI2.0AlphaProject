<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tile extends Model {

	protected $fillable ['title', 'lat', 'lng'];


	protected $guarded ['id', 'created at', 'updated at'];

	/**
     * The database table used by the model.
     *
     * @var string
     */
	protected $table = 'tile';

	/**
     * Uploading image validation rules.
     *
     * @var array
     */
	public static $rules ['file' => 'mimes:jpeg,bmp,png|max:3000'];

	/**
     * Validate image method.
     *
     * @param  file $data
     * @return object Validator
     */
	public static function validateTile($data)
	{
		return Validator::make($data, static::$rules);
	}

	/**
     * Insert image to database table;
     *
     * @param  string $folderName
     * @param  string $fileName
     * @return array
     */
	public static function insertTile($folderName, $fileName)
	{
		return Tile::insert(array(
			'id' 		=> $folderName,
			'user_id' 	=> Auth::check() ? Auth::user()->id : 0,
			'img_bg' 	=> $fileName,
			'img_sm' 	=> 'min_' . $fileName,
			'private'	=> Input::get('private') ? 1 : 0,
			'created_at'=> date('Y-m-d h:i:s'),
			'updated_at'=> date('Y-m-d H:i:s')
			));
	}
	
	/**
     * Relation with Users table.
     *
     * @return void
     */
     public function users()
     {
     	return $this->belongsTo('Users', 'user_id');
     }	
}
