@extends('layouts.dashboard')
@section('content')
  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- user Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.users') }}"><i class="bi bi-filetype-pdf"></i> PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.users') }}"><i class="bi bi-file-earmark-excel"></i> Excel</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">User <span>| Terbaru</span></h5>

                <div class="d-flex align-items-center">
                  <a href="{{ route('users.create') }}">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus-circle-dotted"></i>
                    </div>
                  </a>
                  <div class="ps-3">
                    <h6>{{ $users->count() }}</h6>
                  </div> 
                </div>
              </div>

            </div>
          </div>

          <!-- Iklan Properti Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.iklan.properti') }}"><i class="bi bi-filetype-pdf"></i> PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.iklan.properti') }}"><i class="bi bi-file-earmark-excel"></i> Excel</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title"> Total Iklan Properti <span>| Terbaru</span></h5>

                <div class="d-flex align-items-center">
                  <a href="{{ route('properties.create') }}">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus-circle-dotted"></i>
                    </div>
                  </a>
                  <div class="ps-3">
                    <h6>{{ $ads->count() }}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Iklan Premium Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.iklan.premium') }}"><i class="bi bi-filetype-pdf"></i> PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.iklan.premium') }}"><i class="bi bi-file-earmark-excel"></i> Excel</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Total Iklan Premium <span>| Terbaru</span></h5>

                <div class="d-flex align-items-center">
                  <a href="{{ route('ads.create') }}">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus-circle-dotted"></i>
                    </div>
                  </a>
                  <div class="ps-3">
                    <h6>{{ $premiums->count() }}</h6>
                  </div>
                </div>

              </div>
            </div>

          </div>

          <!-- Properti Dijual Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.properti.dijual') }}">PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.properti.dijual') }}">EXCEl</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Properti Dijual <span>| Terbaru</span></h5>

                <div class="d-flex align-items-center">
                  <a href="{{ route('sells.create') }}">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus-circle-dotted"></i>
                    </div>
                  </a>
                  <div class="ps-3">
                    <h6>{{ $sells->count() }}</h6> 
                  </div>
                </div>

              </div>
            </div>

          </div>

          <!-- Properti Disewakan Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.properti.disewakan') }}">PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.properti.disewakan') }}">EXCEL</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Properti Disewakan <span>| Terbaru</span></h5>

                <div class="d-flex align-items-center">
                  <a href="{{ route('rents.create') }}">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus-circle-dotted"></i>
                    </div>
                  </a>
                  <div class="ps-3">
                    <h6>{{ $rents->count() }}</h6> 
                  </div>
                </div>

              </div>
            </div>

          </div>

          <!-- Table Jumlah User Aktif -->
          <div class="col-12"> 
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.users') }}">PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.users') }}">Excel</a></li> 
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tabel Jumlah User <span>/Terbaru</span></h5>
                <div class="table">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Tgl Daftar</th>
                        <th>Status Verifikasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                              <p>{{ $v }}</p>
                            @endforeach
                          @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
                </div>

              </div>

            </div>
          </div>

          <!-- Table Jumlah Iklan Properti -->
          <div class="col-12"> 
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.iklan.properti') }}">PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.iklan.properti') }}">Excel</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tabel Iklan Properti <span>/Terbaru</span></h5>
                <div class="table">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul Properti</th>
                        <th>Kontak</th>
                        <th>Lokasi Properti</th>
                        <th>Harga Properti</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ads as $key)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ Storage::url($key->featured_image) }}" alt="" width="100" height="100"></td>
                        <td><a href="{{ route('properties.show', $key->id) }}">{{ $key->judul_properti }}</a></td>
                        <td>{{ $key->nomor_telepon_properti }}</td>
                        <td>{{ $key->lokasi_properti }}</td>
                        <td>{{ $key->harga_start_properti }} - {{ $key->harga_end_properti }}</td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
                </div>

              </div>

            </div>
          </div>

          <!-- Table Jumlah Iklan Properti Premium -->
          <div class="col-12"> 
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Export</h6>
                  </li>

                  <li><a class="dropdown-item" href="{{ route('export.pdf.iklan.premium') }}">PDF</a></li>
                  <li><a class="dropdown-item" href="{{ route('export.csv.iklan.premium') }}">Excel</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tabel Iklan Properti Premium <span>/Terbaru</span></h5>
                <div class="table">
                  <table class="table table-border">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Judul Properti</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Lokasi Properti</th>
                        <th scope="col">Harga Properti</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($premiums as $ads)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ Storage::url($ads->featured_image) }}" alt="" width="100" height="100"></td>
                        <td><a href="{{ route('ads.show', $ads->id) }}">{{ $ads->judul_properti }}</a></td>
                        <td>{{ $ads->nomor_telepon_properti }}</td>
                        <td>{{ $ads->lokasi_properti }}</td>
                        <td>{{ $ads->harga_start_properti }} - {{ $ads->harga_end_properti }}</td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
                </div>

              </div>

            </div>
          </div> 

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Panduan Artikel -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Export</h6>
              </li>

              <li><a class="dropdown-item" href="{{ route('export.pdf.panduan.artikel') }}">PDF</a></li>
              <li><a class="dropdown-item" href="{{ route('export.csv.panduan.artikel') }}">EXCEL</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Panduan Artikel <span>| Terbaru</span></h5>

            <div class="news">
              @foreach ($posts as $item)
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">{{ $item->title }}</a></h4>
                  <p>Upload : {{ $item->created_at->diffForHumans() }}</p>
                </div>
              @endforeach

            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>
@endsection 