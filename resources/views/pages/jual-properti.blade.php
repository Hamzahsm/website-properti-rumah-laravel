@extends('layouts.about')
@section('content')
    
<div class="intro">
    <div class="container">
        <h2 class="text-center">Keuntungan Jual Properti di RumahTanah</h2>
        <div class="row">
            <div class="col-lg-4 p-3">
                <div class="border p-3 text-center">
                    <img src="{{ asset('images/jual-propertimu/mudah.svg') }}" alt="" width="100" height="100" class="img-responsive mb-3">
                    <h4 class="text-dark mb-3">Mudah, Aman, Terpercaya</h4>
                    <p>Pasang iklan propertimu dengan mudah dan aman. Pemilik properti bisa langsung mengiklankan propertinya sendiri.</p>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="border p-3 text-center">
                    <img src="{{ asset('images/jual-propertimu/proses.svg') }}" alt="" width="100" height="100" class="img-responsive mb-3">
                    <h4 class="text-dark mb-3">Dijangkau Calon Pembeli Lebih Luas</h4>
                    <p>Iklan propertimu akan dilihat oleh ratusan pengunjung setiap bulannya dan meningkatkan potensi penjualan.</p>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="border p-3 text-center">
                    <img src="{{ asset('images/jual-propertimu/mudah.svg') }}" alt="" width="100" height="100" class="img-responsive mb-3">
                    <h4 class="text-dark mb-3">Berpotensi Cepat Laku</h4>
                    <p>Dengan jangkauan yang lebih luas, propertimu memiliki potensi untuk cepat laku.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-outline-primary">Iklankan Propertimu Sekarang</button>
        </div>
    </div>
</div> <!--keuntungan jual properti -->

<div class="intro">
    <div class="container">
        <h2 class="text-center text-dark">Iklankan Propertimu Hanya dengan 3 Langkah Mudah</h2>
        <div class="row">
            <div class="col-lg-4 text-center p-3">
                <div class="border p-3">
                    <h4 class="mb-3">1</h4>
                    <h5 class="text-dark mb-3">Daftarkan Diri Kamu</h5>
                    <p>Isi informasi kamu & lengkapi informasi properti yang ingin dijual</p>
                </div>
            </div>
            <div class="col-lg-4 text-center p-3">
                <div class="border p-3">
                    <h4 class="mb-3">2</h4>
                    <h5 class="text-dark mb-3">Pilih Paket Sesuai Kebutuhan</h5>
                    <p>Pilih paket dengan durasi iklan yang kamu butuhkan</p>
                </div>
            </div>
            <div class="col-lg-4 p-3 text-center">
                <div class="border p-3">
                    <h4 class="mb-3">3</h4>
                    <h5 class="text-dark mb-3">Pasang Iklan</h5>
                    <p>Lengkapi semua detail dan properti kamu siap di iklankan</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- langkah iklan -->

<div class="intro">
    <div class="container">
        <h2 class="text-center text-dark">Pertanyaan Seputar Jual Properti</h2>
        <div class="accordion" id="accordionExample">
            <div class="card mb-2">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#timeToSell" aria-expanded="true" aria-controls="timeToSell">
                    Kapan Waktu Terbaik Untuk Jual Properti?
                  </button>
                </h2>
              </div>
          
              <div id="timeToSell" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Menurut sejumlah pakar, waktu terbaik jual properti adalah saat dimana ekonomi atau iklim politik stabil. Hal ini bisa memicu tingginya investasi properti sehingga permintaan melambung dan bisa jadi peluang untuk menjual properti dengan harga tinggi.
                </div>
              </div>
            </div> <!-- kapan waktu yang tepat untuk menjual -->

            <div class="card mb-2">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#caraMenjual" aria-expanded="false" aria-controls="caraMenjual">
                    Bagaimana Cara Menentukan Harga Jual Properti?
                  </button>
                </h2>
              </div>
              <div id="caraMenjual" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li>Hitung NJOP tanah dan bangunan</li>
                        <li>Sesuaikan dengan kondisi properti</li>
                        <li>Tambahkan biaya renovasi (bila ada)</li>
                        <li>Cek harga properti sesuai lokasi (inlink ke halaman Cek Harga Properti / X Value)</li>
                        <li>Cek situs properti seperti Rumah123 untuk mencari perbandingan</li>
                    </ul> 
                </div>
              </div>
            </div> <!-- cara menentukan harga jual -->

            <div class="card mb-2">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#tipsCepatLaku" aria-expanded="false" aria-controls="tipsCepatLaku">
                    Bagaimana Cara Jual Properti Agar Cepat Laku?
                  </button>
                </h2>
              </div>
              <div id="tipsCepatLaku" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li>Lakukan renovasi sebelum pasang iklan</li>
                        <li>Manfaatkan situs jual beli properti</li>
                        <li>Cek harga properti di sekitar wilayah dan tentukan harga yang sesuai</li>
                        <li>Pasang iklan dengan foto dan deskripsi yang menarik</li>
                    </ul>   
                </div>
              </div>
            </div>
        </div>
    </div>
</div> <!-- faq -->


@endsection