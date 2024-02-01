      <!-- Modal user login-->
      <div class="modal fade" id="userLogin" tabindex="-1" aria-labelledby="userLoginModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-dark" id="userLoginModal">Akun</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4><a href="{{ route('login') }}"><i class="fa fa-user-circle-o fs-3" aria-hidden="true"></i> Login / Register</a></h4>
            </div>
          </div>
        </div> 
      </div>

<!-- Modal agen properti-->
<div class="modal fade" id="iklanAgen" tabindex="-1" aria-labelledby="iklanAgenModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-dark" id="iklanAgenModal">Lengkapi Formulir Registrasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center text-dark">Agent</h5>
        <form action="#" method="post" class="text-dark">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-lable">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-lable">Nomor Telepon</label>
            <input type="number" class="form-control" name="telepon" id="telepon" required>
          </div>

          <div class="mb-3">
            <label for="domisili" class="form-lable">Domisili</label>
            <input type="text" class="form-control" name="domisili" id="domisili" required>
          </div>

          <div class="mb-3 text-center">
            <button class="btn btn-primary">Daftar</button>
          </div>

          <div class="mb-3">
            <p class="text-center">Sudah Punya Akun ? <a href="#">Login Sekarang</a></p>
          </div>

        </form>
      </div>
    </div>
  </div> 
</div>


<!-- Modal developer / in-house marketing-->
<div class="modal fade" id="iklanDeveloperMarketing" tabindex="-1" aria-labelledby="iklanDeveloperMarketingModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-dark" id="iklanDeveloperMarketingModal">Lengkapi Formulir Registrasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">Developer</h5>
        <form action="#" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-lable">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-lable">Nomor Telepon</label>
            <input type="number" class="form-control" name="telepon" id="telepon" required>
          </div>

          <div class="mb-3">
            <label for="namaPerusahaan" class="form-lable">Nama Perusahaan</label>
            <input type="text" class="form-control" name="perusahaan" id="namaPerusahaan" required>
          </div>

          <div class="mb-3">
            <label for="alamatPerusahaan" class="form-lable">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat" id="alamatPerusahaan" required>
          </div>

          <div class="mb-3 text-center">
            <button class="btn btn-primary">Daftar</button>
          </div>

          <div class="mb-3">
            <p class="text-center">Sudah Punya Akun ? <a href="#">Login Sekarang</a></p>
          </div>

        </form>
      </div>
    </div>
  </div> 
</div>


<!-- Modal pemilik properti-->
<div class="modal fade" id="iklanPemilikProperti" tabindex="-1" aria-labelledby="pemilikPropertiModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-dark" id="pemilikPropertiModal">Lengkapi Formulir Registrasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">Owner</h5>
        <form action="#" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-lable">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-lable">Nomor Telepon</label>
            <input type="number" class="form-control" name="telepon" id="telepon" required>
          </div>

          <div class="mb-3">
            <label for="domisili" class="form-lable">Domisili</label>
            <input type="text" class="form-control" name="domisili" id="domisili" required>
          </div>

          <div class="mb-3 text-center">
            <button class="btn btn-primary">Daftar</button>
          </div>

          <div class="mb-3">
            <p class="text-center">Sudah Punya Akun ? <a href="#">Login Sekarang</a></p>
          </div>

        </form>
      </div>
    </div>
  </div> 
</div>