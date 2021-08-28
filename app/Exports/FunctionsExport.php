<?php

namespace App\Exports;

use App\Models\Func;
use Maatwebsite\Excel\Concerns\FromCollection;

class FunctionsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Func::all();
    }
}
