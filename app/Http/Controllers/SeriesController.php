<?php
namespace App\Http\Controllers;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController {
	public function create() {

		return view('series.create');
	}

	public function index() {

		$series = Serie::all();

		return view('series.index', [
			'series' => $series,
		]);
	}

	public function store(Request $request) {
		//$nome = $request->nome;
		//$nome = $request->get('nome');

		/*$serie = new Serie();
			        $serie->nome = $nome;
		*/
		/*Serie::create([
			        'nome' => $nome,
		*/

		Serie::create($request->all());
	}
}

?>