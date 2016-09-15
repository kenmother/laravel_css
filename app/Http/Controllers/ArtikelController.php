<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ArtikelController extends Controller
{
    public function index()
    {
    	$data['artikel'] = \App\Artikel::paginate(10);
    	return view('artikel.all')->with($data);
    }
    public function add()
    {
		return view('artikel.add');
    }
    public function save()
    {
    	$a = new \App\Artikel;
    	$a->judul = Input::get('judul');
    	$a->isi = Input::get('isi');
    	$a->id_user = 1;
    	$a->save();

    	return redirect(url('artikel'));
    }
    public function edit($id)
    {
    	$data['artikel'] = \App\Artikel::find($id);
    	return view('artikel.edit')->with($data);
    }

    public function update()
    {
    	$a = \App\Artikel::find(Input::get('id'));
    	$a->judul = Input::get('judul');
    	$a->isi = Input::get('isi');
    	$a->id_user = 1;
    	$a->save();

    	return redirect(url('artikel'));

    }
    public function delete($id)
    {
    	$a = \App\Artikel::find($id);
    	$a->delete();

    	return redirect(url('artikel'));
    }
    
}
