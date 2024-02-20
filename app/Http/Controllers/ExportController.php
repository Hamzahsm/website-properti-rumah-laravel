<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; //dompdf
use App\Models\User; //table database to print
use App\Models\IklanProperti; //table database to print
use App\Models\IklanPremium; //table database to print
use Maatwebsite\Excel\Facades\Excel; //export to excel
use App\Exports\ExportUser; // model to export csv
use App\Exports\ExportIklanProperti; //model to export csv
use App\Exports\ExportIklanPremium; //model to export csv

class ExportController extends Controller
{
    /**
     * 
     * export pdf all users table
     */
    public function printUsers()
    {
        $data = User::all();
        $pdf = PDF::loadView('exports.print-users', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']); //return the view (exports.print-users)
        return $pdf->stream('Jumlah-User-Web.pdf'); //title when user download the pdf
    }

    /**
     * 
     * export pdf all iklan properti
     * 
     */
    public function printIklanProperti()
    {
        $data = IklanProperti::all();
        $pdf = PDF::loadView('exports.print-iklan-properti', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('Jumlah-Iklan-Properti-Web.pdf');
    }

    /**
     * 
     * export pdf all iklan premium 
     * 
     */
    public function printIklanPremium()
    {
        $data = IklanPremium::all();
        $pdf = PDF::loadView('exports.print-iklan-premium', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('Table-Iklan-Premium-Web.pdf');
    }

    /**
     * 
     * export csv all user 
     * 
     */
    public function exportCsvUsers()
    {
        return Excel::download(new ExportUser, 'Daftar-User-Website.xlsx'); //just oneline, make sure call the model properly
    }

    /**
     * 
     * export csv all iklan properti
     * 
     */
    public function exportCsvIklanProperti()
    {
        return Excel::download(new ExportIklanProperti, 'Daftar-Iklan-Properti.xlsx');
    }

    /**
     * 
     * export csv all iklan premium
     * 
     */
    public function exportCsvIklanPremium()
    {
        return Excel::download(new ExportIklanPremium, 'Daftar-Iklan-Premium.xlsx');
    }
}
