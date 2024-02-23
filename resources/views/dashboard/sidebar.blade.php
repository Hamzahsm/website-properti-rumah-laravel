  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('users.index') }}">
              <i class="bi bi-circle"></i><span>Manage Users</span>
            </a>
          </li>
          <li>
            <a href="{{ route('users.create') }}">
              <i class="bi bi-circle"></i><span>Tambah User</span>
            </a>
          </li>
        </ul>
      </li><!-- End user Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('roles.index') }}">
              <i class="bi bi-circle"></i><span>All Roles</span>
            </a>
          </li>
          <li>
            <a href="{{ route('roles.create') }}">
              <i class="bi bi-circle"></i><span>Buat Role Baru</span>
            </a>
          </li>
        </ul>
      </li><!-- End role Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('products.index') }}">
              <i class="bi bi-circle"></i><span>Semua Produk</span>
            </a>
          </li>
          <li>
            <a href="{{ route('products.create') }}">
              <i class="bi bi-circle"></i><span>Tambah Produk</span>
            </a>
          </li>
        </ul>
      </li><!-- End produk Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#iklan_properti" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Iklan Properti</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="iklan_properti" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('properties.index') }}">
              <i class="bi bi-circle"></i><span>Semua Iklan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('properties.create') }}"> 
              <i class="bi bi-circle"></i><span>Tambah Iklan Baru</span>
            </a>
          </li>
        </ul>
      </li><!-- End iklan properti Nav -->

      @hasanyrole('Admin|User-Iklan-Premium')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#iklan_premium" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Iklan Premium</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="iklan_premium" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('ads.index') }}">
              <i class="bi bi-circle"></i><span>Semua Iklan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('ads.create') }}"> 
              <i class="bi bi-circle"></i><span>Tambah Iklan Baru</span>
            </a>
          </li>
        </ul>
      </li><!-- End iklan premium Nav -->
      @endhasanyrole

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#multiple_images" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Multiple Upload Image</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="multiple_images" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('upload.multiple.images') }}">
              <i class="bi bi-circle"></i><span>Test Multiple Image</span>
            </a>
          </li>
        </ul>
      </li><!-- Multiple Upload -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#properti_dijual" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Properti Dijual</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="properti_dijual" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('sells.index') }}">
              <i class="bi bi-circle"></i><span>Semua List</span>
            </a>
          </li>
          <li>
            <a href="{{ route('sells.create') }}">
              <i class="bi bi-circle"></i><span>Tambahkan</span>
            </a>
          </li>
        </ul>
      </li><!-- Properti Dijual -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#properti_disewa" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Properti Disewakan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="properti_disewa" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('rents.index') }}">
              <i class="bi bi-circle"></i><span>Semua List</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rents.create') }}">
              <i class="bi bi-circle"></i><span>Tambahkan</span>
            </a>
          </li>
        </ul>
      </li><!-- Properti Disewakan -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#panduan_artikel" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Panduan Artikel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="panduan_artikel" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('posts.index') }}">
              <i class="bi bi-circle"></i><span>Semua List</span>
            </a>
          </li>
          <li>
            <a href="{{ route('posts.create') }}">
              <i class="bi bi-circle"></i><span>Tambahkan</span>
            </a>
          </li>
        </ul>
      </li><!-- Buat Panduan -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->