<?php

namespace App\Exports;

use App\Models\Medi;
use Maatwebsite\Excel\Concerns\FromCollection;

class MediExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medi::all();
    }
}

