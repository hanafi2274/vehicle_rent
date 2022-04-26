<?php

namespace App\Exports;

use App\Models\usage;
use Maatwebsite\Excel\Concerns\FromCollection;

class usageExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return usage::all();
    }
}
