<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; //dompdf
use App\Models\User; //table database to print
use App\Models\IklanProperti; //table database to print pdf
use App\Models\IklanPremium; //table database to print pdf
use App\Models\SellProperti; //table database to print pdf
use App\Models\RentProperti; //table database to print pdf
use App\Models\Post; //table database to print pdf
use Maatwebsite\Excel\Facades\Excel; //export to excel
use App\Exports\ExportUser; // model to export csv
use App\Exports\ExportIklanProperti; //model to export csv
use App\Exports\ExportIklanPremium; //model to export csv
use App\Exports\ExportRentProperti; //model to exports csv
use App\Exports\ExportSellProperti; //model to exports csv
use App\Exports\ExportPanduanArtikel; //model to exports csv

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
     * export pdf all properti disewakan 
     * 
     */
    public function printPropertiDisewakan()
    {
        $data = RentProperti::all();
        $pdf = PDF::loadView('exports.print-properti-disewakan', ['data' => $data])->setOption(['defaultFont' => 'sans-serif']);
        return $pdf->stream('Table-Properti-Disewakan-Web.pdf');
    }

    /**
     * 
     * export pdf all properti dijual
     * 
     */
    public function printPropertiDijual() 
    {
        $data = SellProperti::all();
        $pdf = PDF::loadView('exports.print-properti-dijual', ['data' => $data])->setOption(['defaultFont' => 'sans-serif']);
        return $pdf->stream('Tabel-Properti-Dijual-Web.pdf');
    }

    /**
     * 
     * export pdf all panduan artikel
     * 
     */
    public function printPanduanArtikel()
    {
        $data = Post::all();
        $pdf = PDF::loadView('exports.print-panduan-artikel', ['data' => $data])->setOption(['defaultFont' => 'sans-serif']);
        return $pdf->stream('Tabel-Panduan-Artikel-Web.pdf');
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

    /**
     * 
     * export csv all properti disewakan
     * 
     */
    public function exportCsvPropertiDisewakan() 
    {
        return Excel::download(new ExportRentProperti, 'Daftar-Properti-Disewakan-Web.xlsx');
    }

    /**
     * 
     * export csv all properti dijual
     * 
     */
    public function exportCsvPropertiDijual()
    {
        return Excel::download(new ExportSellProperti, 'Daftar-Properti-Dijual-Web.xlsx');
    }

    /**
     * 
     * export csv all panduan artikel
     * 
     */
    public function exportCsvPanduanArtikel()
    {
        return Excel::download(new ExportPanduanArtikel, 'Daftar-Panduan-Artikel-Web.xlsx');
    }
}
