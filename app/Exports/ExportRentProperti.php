<?php

namespace App\Exports;

use App\Models\RentProperti;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportRentProperti implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RentProperti::all();
    }
}
