<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request {

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
		$rules = [
			'title' => 'required',
			'body' => 'required',			
		];

		if($this->method() == 'PATCH')
		{
			return $rules;
		}
		if($this->method() == 'POST')
		{
			return $rules + [
				'image' => 'required|mimes:png,jpg,jpeg,gif',
			];
		}

		return $rules;
	}

}
