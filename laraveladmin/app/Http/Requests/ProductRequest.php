<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtEntryName' => 'required|unique:tbl_entry,entry_name',
			'fImages' => 'required'
		];
	}
	public function messages() {
		return [			
			'txtEntryName.required' => 'Please enter Name Entry!',
			'txtEntryName.unique' => 'Name Product is exist!',
			'fImages.required' => 'Please choose Image!',
			'fImages.image' => 'This file is not Image!'
		];
	}

}
