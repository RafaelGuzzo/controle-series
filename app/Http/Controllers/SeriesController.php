<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController {
	public function create(Request $request) {

		return view('series.create');
	}

	public function index(Request $request) {

		$series = [
			'Grey\'s Anatomy',
			'Lost',
			'Agents of SHIELD',
		];

		return view('series.index', [
			'series' => $series,
		]);
	}
}

?>