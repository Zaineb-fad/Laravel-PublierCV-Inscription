<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;




class FileController extends Controller
{

    public function create(){
    return view('addmedia');
  }
    public function addmedia(Request $request){ 
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
        $media = new Media();
        $media->description = $request->description;
        $media->nom = $request->nom;
       $media->prenom = $request->prenom;
        $media->date_de_naisance = $request->date_de_naissance;
                $media->adresse = $request->adresse;
        $media->type = $request->type;

        $media->nom_de_poste = $request->nom_de_poste;

        $media->salaire = $request->salaire;
        $media->ville = $request->ville;
        $media->code_postal= $request->code_postal;
        $media->path = $fileName;
        $media->numero_portable= $request->numero_portable;

        $media->save();
        return back()->with('message', 'IT WORKS!');
    }
}