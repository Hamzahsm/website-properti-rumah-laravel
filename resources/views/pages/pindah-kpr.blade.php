@extends('layouts.blog')
@section('content')

<!-- manfaat take over -->
<div class="">
  <h3 class="text-center font-weight-bold text-dark">Manfaat yang bisa kamu dapat jika pindah KPR dengan Take Over</h3>
  <div class="row">
    <div class="col-lg-4 p-3">
      <div class="border rounded p-3">
        <h5 class="text-dark font-weight-bold mb-3">Meringankan Angsuran dengan Bunga Lebih Kecil</h5>
        <ul>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Cicilan bulanan KPR bisa lebih murah</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Bunga di bank baru bisa lebih rendah</li>
          <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Masa kredit lebih panjang</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 p-3">
      <div class="border rounded p-3">
        <h5 class="text-dark font-weight-bold mb-3">Menghemat Total Pembayaran dengan Mempersingkat Tenor</h5>
        <ul>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Biaya KPR keseluruhan berkurang</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Masa kredit KPR bisa lebih cepat selesai</li>
          <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Angsuran bulanan lebih besar</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 p-3">
      <div class="border rounded p-3">
        <h5 class="text-dark font-weight-bold mb-3">Mengubah Jenis KPR dari Konvensional ke Syariah dan Sebaliknya</h5>
        <ul>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Biaya KPR keseluruhan berkurang</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Masa kredit KPR bisa lebih cepat selesai</li>
          <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Angsuran bulanan lebih besar</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- persyaratan take over -->
<div class="container">
    <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <h4 class="font-weight-bold mb-3 text-dark text-center">Seputar Pindah KPR</h4>
            <button class="nav-link active mb-3 btn btn-outline-info" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Syarat Take Over KPR</button>
            <button class="nav-link mb-3 btn btn-outline-info" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cara Pengajuan Take Over</button>
            <button class="nav-link mb-3 btn btn-outline-info" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Biaya KPR Take Over</button>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active mt-3" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <h4 class="text-dark font-weight-bold">Persyaratan Take Over KPR</h4>
              <p class="text-dark">Tentunya ada beberapa persyaratan yang harus dilengkapi sebelum mengajukan take over kredit ke bank pilihan Anda. Tidak seperti KPR pertama, Anda juga harus menyiapkan sertifikat kepemilikan dalam pengajuan. Untuk melakukan take over kredit rumah, dokumen yang perlu dipersiapkan penjual dan pembeli antara lain</p>
              <ul class="text-dark">
                <li>Fotokopi Perjanjian Kredit</li>
                <li>Fotokopi Sertifikat dengan stempel bank</li>
                <li>Fotokopi IMB</li>
                <li>Fotokopi PBB yang sudah dibayar</li>
                <li>Fotokopi bukti pembayaran angsuran</li>
                <li>Asli buku tabungan bernomor rekening untuk pembayaran angsuran</li>
                <li>Data penjual dan pembeli, seperti KTP, Kartu Keluarga, buku nikah,</li>
                <li>NPWP, slip gaji terakhir, surat keterangan kerja, surat keterangan penghasilan, fotokopi mutasi keuangan tiga bulan terakhir dari rekening, dan sebagainya.</li>
              </ul>
            </div>

            <div class="tab-pane fade mt-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <h4 class="text-dark font-weight-bold">Persyaratan Take Over KPR</h4>
              <ol class="text-dark">
                <li>Ketahui terlebih dahulu sisa pinjaman pokok dan besaran cicilan KPR terakhir kamu.</li>
                <li>Buka laman KPR Take Over Rumah123 di website atau hp kamu.</li>
                <li>Coba simulasi KPR Take Over Rumah123 dengan memasukkan informasi pinjaman pokok, besaran cicilan, serta pilih bunga bank dan tenor pinjaman yang kamu inginkan.</li>
                <li>Ketahui hasil perbandingan cicilan kamu sekarang dengan cicilan KPR Take Over yang kamu pilih dari hasil simulasi. Kamu bisa klik tombol “Pindah KPR” untuk langsung terhubung dengan tim R123 yang akan membantu proses KPR Take Over kamu.</li>
                <li>Kamu juga bisa bandingkan beberapa program KPR Take Over dan klik tombol “Tanya KPR” untuk mengetahui informasi lebih lanjut.</li>
              </ol>
            </div>

            <div class="tab-pane fade mt-3" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <h4 class="text-dark font-weight-bold">Biaya-biaya Take Over KPR</h4>
              <p class="text-dark">Karena prosedurnya sama seperti KPR baru, maka ada biaya untuk appraisal, notaris, provisi dan asuransi. Termasuk juga biaya penalti karena melunasi KPR lebih awal di bank sebelumnya, dengan kisaran 2% - 3% dari pokok cicilan KPR.</p>
            </div>
          </div>
        </div> 
    </div>
</div>

<!-- accordion -->
<div class="container mt-5">
  <h2 class="font-weight-bold text-center text-dark mb-3">Pertanyaan Seputar Pindah KPR</h2>
    <div class="accordion" id="accordionExample">
        <div class="card mb-3">
          <div class="card-header" id="headingOne">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#persyaratanKpr" aria-expanded="true" aria-controls="persyaratanKpr">
                Apa Saja Persyaratan Umum KPR Take Over?
              </button>
            </h2>
          </div>
      
          <div id="persyaratanKpr" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <p class="text-dark">Syarat KPR take over secara umum mirip dengan syarat saat mengajukan KPR pertama kali. Namun, ada beberapa hal tambahan lain yang harus diperhatikan, yakni:</p>
                <ul class="text-dark">
                    <li>Cicilan KPR berjalan di bank sebelumnya minimal 1 atau 2 tahun. Ketentuan ini di beberapa bank dapat berbeda.</li>
                    <li>Memiliki kredibilitas pembayaran angsuran lancar.</li>
                    <li>Sertifikat rumah harus nama calon debitur.</li>
                </ul>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#keuntunganKpr" aria-expanded="false" aria-controls="keuntunganKpr">
                Apa Keuntungan Melakukan KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="keuntunganKpr" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                KPR Take Over dapat memberikan pilihan produk KPR dengan suku bunga yang lebih rendah. Tujuan utama KPR Take Over adalah untuk mendapatkan cicilan per bulan yang lebih ringan dan mengurangi total biaya keseluruhan pinjaman
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#biayaProvisi" aria-expanded="false" aria-controls="biayaProvisi">
                Apakah Yang Dimaksud Biaya Provisi Saat Proses KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="biayaProvisi" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Biaya provisi dalam konteks KPR Take Over adalah biaya yang dikenakan oleh bank baru sebagai kompensasi atas pembiayaan yang mereka berikan. Biaya provisi ini merupakan bagian dari biaya administrasi dan pencairan kredit yang terkait dengan proses pindah KPR. Kisaran biaya provisi adalah 1-3% dari plafon atau pokok hutang yang baru, tergantung kebijakan bank.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#penaltiKpr" aria-expanded="false" aria-controls="penaltiKpr">
                Apa Yang Dimaksud Penalti Pada KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="penaltiKpr" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Penalti merupakan biaya yang dikenakan oleh bank jika  mengganti dan melunasi KPR lebih awal (sebelum masa tenor berakhir). Besaran biaya penalti biasanya diatur dalam perjanjian KPR yang ditandatangani dengan bank lama dan dapat berbeda-beda antar bank.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#dokumenKpr" aria-expanded="false" aria-controls="dokumenKpr">
                Apa Saja Dokumen Yang Dibutuhkan Saat KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="dokumenKpr" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Dalam take over, bank akan meminta sejumlah dokumen terkait KPR sebelumnya, seperti akad kredit, IMB, SPPT PBB, sertifikat rumah (disertai keterangan dan stempel dari bank sebelumnya) dan bukti pembayaran cicilan terakhir.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#chargeKpr" aria-expanded="false" aria-controls="chargeKpr">
                Apa Saja Biaya Yang Dikenakan Untuk KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="chargeKpr" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Karena prosedurnya sama seperti KPR baru, maka ada biaya untuk appraisal, notaris, provisi dan asuransi. Termasuk juga biaya penalti karena melunasi KPR lebih awal di bank sebelumnya, dengan kisaran 2% - 3% dari pokok cicilan KPR.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#kisaranBiaya" aria-expanded="false" aria-controls="kisaranBiaya">
                Berapa Biaya Yang Dikenakan Untuk KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="kisaranBiaya" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Kisaran biaya KPR Take Over adalah 4-8% dari jumlah plafon pinjaman, tergantung dari kebijakan bank.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#kapanPembayaran" aria-expanded="false" aria-controls="kapanPembayaran">
                Kapan Saya Harus Membayar Biaya Yang Dikenakan Untuk KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="kapanPembayaran" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Pembayaran biaya yang dikenakan untuk KPR Take Over di bank baru biasanya saat pelunasan hutang di bank lama akan dilakukan. Tepatnya, setelah permohonan pindah KPR ke bank yang baru disetujui.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#biayaNotaris" aria-expanded="false" aria-controls="biayaNotaris">
                Saat Melakukan KPR Take Over, Apa Saja Biaya Yang Dikenakan Oleh Notaris?
              </button>
            </h2>
          </div>
          <div id="biayaNotaris" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Komponen biaya notaris saat pindah KPR dari bank lama ke bank baru mencakup beberapa hal terkait dengan proses tersebut, seperti ROYA, pengecekan sertifikat, APHT, dan PNBP. Namun, perlu diingat bahwa biaya notaris dapat bervariasi tergantung pada notaris yang dipilih, wilayah geografis dan kompleksitas transaksi.
            </div>
          </div>
        </div>
        
        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#royaKPR" aria-expanded="false" aria-controls="royaKPR">
                Apakah Yang Dimaksud Dengan ROYA Pada Proses KPR Take Over?
              </button>
            </h2>
          </div>
          <div id="royaKPR" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                ROYA merupakan proses pencatatan perubahan status hak atas tanah yang dijamin dengan hipotek atau hak tanggungan. Ketika Kredit Pemilikan Rumah (KPR) yang dijamin dengan hak tanggungan atau hipotek dipindahkan dari bank lama ke bank baru, proses ROYA dilakukan untuk mencatat pelepasan hak tanggungan dari bank lama yang telah dilunasi dan mencatat hak tanggungan baru atas tanah tersebut yang diberikan kepada bank baru.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#apht" aria-expanded="false" aria-controls="apht">
                Dalam KPR Take Over, Apakah Yang Dimaksud Dengan Akta Pemberian Hak Tanggungan (APHT)?
              </button>
            </h2>
          </div>
          <div id="apht" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                APHT adalah dokumen hukum yang digunakan untuk memberikan hak tanggungan atau hipotek atas suatu properti yang digunakan sebagai jaminan hutang. Ketika kamu mengajukan KPR bank yang baru akan meminta kamu untuk memberikan jaminan atas kredit yang diberikan. Salah satu bentuk jaminan tersebut adalah dengan menerbitkan APHT yang meletakkan hipotek pada lahan atau properti yang kamu miliki.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header" id="headingThree">
            <h2 class="mb-1">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#pnbp" aria-expanded="false" aria-controls="pnbp">
                Apa Itu Penerimaan Negara Bukan Pajak (PNBP) Dalam Proses Pindah KPR?
              </button>
            </h2>
          </div>
          <div id="pnbp" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Penerimaan Negara Bukan Pajak merupakan biaya yang dikenakan pada transaksi jual beli tanah dan bangunan. Dalam konteks KPR Take Over dari bank lama ke bank baru, biasanya PNBP tidak dikenakan lagi. Hal ini karena transaksi jual beli tanah dan bangunan telah terjadi saat kamu membeli rumah pertama kali dan memperoleh KPR dari bank lama.
            </div>
          </div>
        </div>

    </div>
</div>
@endsection