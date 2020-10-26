<?php

namespace App\Exports;

use App\Models\accept;
use Maatwebsite\Excel\Concerns\FromCollection;

class AcceptExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return accept::all();
    }
}
