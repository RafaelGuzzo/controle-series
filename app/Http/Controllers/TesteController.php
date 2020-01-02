<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TesteController {
	public function create(Request $request) {

		return 'create';
	}

	public function edit(Request $request) {
		var_dump($request->query());
		exit;
		return 'edit';
	}

	public function index(Request $request) {

		return 'Index';
	}

	public function show(Request $request) {

		return 'show';
	}
}

?>