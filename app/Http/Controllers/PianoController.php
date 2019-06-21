<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;
use App\Genre;

class PianoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllPianos(){
        $pianos=Piano::All();
        return view ( 'pianos.get_all_pianos', compact('pianos'));
    }

    public function createPiano(){
        $genres = Genre::All();
        return view('pianos.create_piano', compact('genres'));
    }

    public function storePiano(Request $request){
        $piano = new Piano ([
            'name'=>$request->get('name'),
            'genre_id'=>$request->get('genre_id'),
            'description'=>$request->get('description'),

        ]);
        $piano->save();
        return redirect('/pianos')->with('succes', 'piano ajouter avec succès');
    }

    public function editPiano($id){
        $genres=Genre::All();
        $piano = Piano::find($id);
        return view ('pianos.edit_piano', compact ( 'genres', 'piano'));
    }

    public function updatePiano($id, Request $request){
        $piano = Piano::find($id);
        $piano->name=$request->get('name');
        $piano->genre_id=$request->get('genre_id');
        $piano->description=$request->get('description');

        $piano->save();
        return redirect('/pianos')->with('succes', 'le îano à bien été modifié');

    }

    public function deletePiano($id){
        $piano = Piano::find($id);
        $piano->delete();
        return redirect('/pianos')->with('succes', 'le livre à bien été supprimé');
    }
}