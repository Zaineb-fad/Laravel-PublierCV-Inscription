<?php

namespace App\Imports;

use App\Models\Medi;
use Maatwebsite\Excel\Concerns\ToModel;

class MedisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       return new Medi([
            'nom'     => $row[0],
            'prenom'    => $row[1],
                        'date_de_naissance'    => $row[2],
            'adresse'    => $row[3],
            'type'    => $row[4],
            'nom_de_poste'    => $row[5],
            'salaire'    => $row[6],
            'ville'    => $row[7],
            'code_postal'    => $row[8],
            'numero'    => $row[10],

        ]);
    }
}
