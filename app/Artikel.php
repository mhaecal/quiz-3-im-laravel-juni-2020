<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Artikel extends Model
{

	public static function getArtikel() {
		$artikel = DB::table('artikel')->get();
		return $artikel;
	}
  
	public static function saveArtikel($request) {
		DB::table('artikel')->insert([
			'judul' => $request->judul,
			'isi' => $request->isi,
			'slug' => Str::slug($request->judul, '-'),
			'user_id' => $request->user_id,
			'tag' => $request->tag
		]);
	}

	public static function getArtikelById($id) {
		$artikel = DB::table('artikel')->where('id', $id)->first();
		if($artikel === NULL) {
			return abort(404);
		}
		return $artikel;
	}

	public static function updateById($id, $request) {
		DB::table('artikel')
			->where('id', $id)
			->update([
				'judul' => $request->judul,
				'isi' => $request->isi,
				'slug' => Str::slug($request->judul, '-'),
				'tag' => $request->tag
			]);
	}

	public static function deleteById($id) {
		DB::table('artikel')->where('id', $id)->delete();
	}

}
