<?php

class AttachmentRequest extends Request {
	
	/**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

	public function rules()
	{

		return [
			'title'		=>	'required|min:2|alpha',
			'image'		=>	'required|image|mimes:jpeg,jpg,bmp,png,gif',
			'place'		=> 	'required|min:2|alpha',
			'lat'		=>	'required|numeric',
			'lng'		=>	'required|numeric',
		];
	}
}