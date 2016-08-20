<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use DB;
use App\produit;

class prodcon extends Controller
{
    //
     public function _construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	/*
    	$sections = ['nbpizza'=>'pizza.jpg','nbdobara'=>'dobara.jpg','nbserdine'=>'serdine.jpg','nbsalade'=>'salade.jpg','nbhamoud'=>'hamoud.jpg'];
*/
    	//$sections = DB::table('produit')->get();
    	
    	$sections = produit::all();

    	return view('produit.produit')->withSections($sections) ;
    }

    public function create()
    {
    	return 'creating new section'; 
    }


    public function store(Request $request)
    {
    	$name = $request->input('name');
        $prix = $request->input('prix');
    	$file = $request->file('image');
    	$destinationPath = 'img';
    	$filename = $name.'.jpg';
    	$file->move($destinationPath,$filename);

    	$new_produit = new produit;
    	$new_produit->name = $name;
    	$new_produit->prix = $prix;
        $new_produit->img = $filename;
    	$new_produit->save();

    	return redirect('admin');

    }

    public function show($id)
    {
    	return 'show '.$id.' section!';
    }

    public function edit($id)
    {
    	return 'edit'.$id.'section!';
    }


    public function update($id,Request $request)
    {
    	
    	$name = $request->input('name');
        $prix = $request->input('prix');
    	$produit = produit::find($id);
    	
    	if ($name!=NULL) {
    		$produit->name = $name;
    	}
    	if ($prix!=NULL) {
            $produit->prix = $prix;
        }
    	
    	$produit->save();



    	return redirect('admin');
    }

    public function destroy($id)
    {
    	produit::destroy($id);
    	return redirect('admin');
    }

    public function admin(){
    	$sections = produit::get();
    	return view('produit.admin',['sections'=>$sections]);
    }


}
