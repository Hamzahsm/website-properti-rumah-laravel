<?php

namespace App\Exports;

use App\Models\IklanPremium;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportIklanPremium implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IklanPremium::all();
    }
}
