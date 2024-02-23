<?php

namespace App\Exports;

use App\Models\SellProperti;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSellProperti implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SellProperti::all();
    }
}
