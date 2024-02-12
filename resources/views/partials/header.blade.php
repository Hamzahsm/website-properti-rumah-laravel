<header class="header">

    <!-- Top Bar --> 

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="phone"><a href="#" class="text-white"><i class="fa fa-phone" aria-hidden="true"></i> (0341) xxxxxxx</a></div>
                    <div class="social">
                        <ul class="social_list">
                            <li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="user_box ml-auto">
                        <div class="user_box_login user_box_link"><a href="{{ route('cari.agen') }}">Cari Agen</a></div>
                        <div class="user_box_register user_box_link"><a href="{{ route('explore') }}">Explore</div>
                        <div class="user_box_register user_box_link"><a href="{{ route('login') }}" >Mulai iklan properti</a></div> 
                        <div class="user_box_register user_box_link"><a href="{{ route('posts.index') }}" >Berita</a></div> 
                        <div class="user_box_register user_box_dropdown" >
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Perusahaan
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item hover-menu" href="#">Tentang</a>
                                  <a class="dropdown-item hover-menu" href="#">Event</a>
                                  <a class="dropdown-item hover-menu" href="#">Pressroom</a>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>		
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav"> 
        <div class="container">
            <div class="row">
                <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                    <div class="logo_container">
                        <div class="logo"><a href="{{ route('test') }}" class="text-uppercase"><img src="#" alt="">RumahTanah</a></div>
                        {{-- <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div> --}}
                    </div>
                    <div class="main_nav_container ml-auto">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="{{ route('properties.index') }}">Dijual</a></li>
                            <li class="main_nav_item"><a href="{{ route('tentang.kami') }}">Disewa</a></li> 
                            <li class="main_nav_item"><a href="#">Properti Baru</a></li>
                            <li class="main_nav_item"><a href="#">KPR</a></li>
                            <li class="main_nav_item"><a href="#">Panduan</a></li>
                        </ul>
                    </div>
                    <div class="content_search ml-lg-0 ml-auto">
                        <button type="button" class="btn btn-outline-light border-none" data-toggle="modal" data-target="#userLogin">
                            <i class="fa fa-user-circle-o fs-2" aria-hidden="true"></i> Akun</a>
                        </button>
                    </div>

                    <div class="hamburger">
                        <i class="fa fa-bars trans_200"></i>
                    </div>
                </div>
            </div>
        </div>	
    </nav>

</header>

<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container"><div class="menu_close"></div></div>
        <ul>
            <li class="menu_item"><a href="#">Dijual</a></li>
            <li class="menu_item"><a href="#">Disewa</a></li>
            <li class="menu_item"><a href="#">Properti Baru</a></li>
            <li class="menu_item"><a href="#">KPR</a></li>
            <li class="menu_item"><a href="#">Panduan</a></li>
        </ul>
    </div>
</div>

<!-- Home -->  