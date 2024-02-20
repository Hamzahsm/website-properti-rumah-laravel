<?php

namespace App\Exports;

use App\Models\IklanProperti;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportIklanProperti implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IklanProperti::all();
    }
}
