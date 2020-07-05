<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{

	public function index() {
		$artikel = Artikel::getArtikel();
		return view('artikel.index', compact('artikel'));
	}

	public function create() {
		return view('artikel.create');
	}

	public function store(Request $request) {
		$artikel = Artikel::saveArtikel($request);
		return redirect('/artikel');
	}

	public function show($id) {
		$artikel = Artikel::getArtikelById($id);
		$tag = explode(', ', $artikel->tag);
		return view('artikel.show', compact('artikel', 'tag'));
	}

	public function edit($id) {
		$artikel = Artikel::getArtikelById($id);
		return view('artikel.edit', compact('id', 'artikel'));
	}

	public function update($id, Request $request) {
		Artikel::updateById($id, $request);
		return redirect('artikel/'.$id);
	} 

	public function destroy($id) {
		Artikel::deleteById($id);
		return redirect('artikel');
	}
 
}
