@extends('layouts.blog')
@section('content')

<!-- form strart here -->
<div class="intro">
    <div class="container p-3">
        <div class="border p-3">
            <h2 class="text-center font-weight-bold text-uppercase text-dark">Simulasi KPR</h2>
            <p class="text-dark">Cek estimasi pembiayaan kredit rumah denga fitur kalkulator berikut : </p>
            <form action="" id="formCalculate" onsubmit="return false;">
                <div class="cont_orde text-dark">
                    <div class="mb-3">
                        <label for="harga_properti" class="form-label">Harga Properti</label>
                        <input type="number" class="form-control" id="harga_properti" onchange="calculateTotal()" required> <!-- it will call function on our script -->
                    </div>
        
                    <div class="mb-3">
                        <label for="uang_muka" class="form-label">Uang Muka</label>
                        <input type="number" class="form-control" id="uang_muka" onchange="calculateTotal()" required>
                    </div>
        
                    <div class="mb-3">
                        <label for="pilihan_suku_bunga" class="form-label">Pilihan Suku Bunga</label> <br>
                        <select name="pilihan_suku_bunga" id="pilihan_suku_bunga" onchange="calculateTotal()" class="custom-select" required>
                            <option value="none">Pilih</option>
                            <option value="bunga_rendah">Bunga Terendah</option>
                            <option value="bunga_bank">Bunga Bank</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="tenor" class="form-label">Jangka Waktu KPR</label>
                        <input type="number" class="form-control" id="tenor" onchange="calculateTotal()" required>
                    </div>
        
                    <div class="mb-3">
                        <div id="totalPrice" class="bg-warning"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection