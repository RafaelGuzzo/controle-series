<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	public function messages() {
		return [
			'required' => 'O campo :attribute é obrigatório',
			'nome.min' => 'O campo nome precisa ter pelo menos três caracteres',
		];
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'nome' => 'required|min:3',
		];
	}
}
