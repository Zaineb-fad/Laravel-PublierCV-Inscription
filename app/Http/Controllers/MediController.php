<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MediExport;
use App\Imports\MediImport;
use App\Models\Medi;


class MediController extends Controller
{

    public function create(){
    return view('create');
  }
    
   /**
    * @return \Illuminate\Support\Collection
    */
    public function mediImportExport()
    {
       return view('file-import');
    }
     /**
    * @return \Illuminate\Support\Collection
    */
    public function mediExport() 
    {
        return Excel::download(new MediExport, 'medis-collection.xlsx');
    } 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function mediImport(Request $request) 
    {
        Excel::import(new MedisImport, $request->file('file')->store('temp'));
        return back();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $medi = Medi::all();
        return view('index', compact('medi'));
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $storeData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
                   'date_de_naissance' => 'required|numeric',
            'type' => 'required|max:255',
                 'nom_de_poste' => 'required|max:255',
            'salaire' => 'required|numeric',
            'ville' => 'required|max:255',
            'code_postal' => 'required|numeric',
            'numero_portable' => 'required|max:255',
            
        ]);
        $medi = Medi::create($storeData);

        return redirect('/medis')->with('success', 'Medi has been saved!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medi = Medi::findOrFail($id);
        return view('edit', compact('medi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
                   'date_de_naissance' => 'required|numeric',
            'type' => 'required|max:255',
                 'nom_de_poste' => 'required|max:255',
            'salaire' => 'required|numeric',
            'ville' => 'required|max:255',
            'code_postal' => 'required|numeric',
            'numero_portable' => 'required|max:255',

        ]);
        Medi::whereId($id)->update($updateData);
        return redirect('/medis')->with('completed', 'Medi has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medi = Medi::findOrFail($id);
        $medi->delete();

        return redirect('/medis')->with('completed', 'Medis has been deleted');
    }

}
