@extends('layouts.properti')
@section('content') 
<div class="intro">
    <div class="container">
        <form class="#" method="get">
            @csrf
            <div class="form-row align-items-center">
              <div class="col-lg-6">
                <label class="sr-only" for="inlineFormInput">Name</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Masukkan Nama Agen">
              </div>
              <div class="col-lg-2">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
              </div>
            </div>
          </form>
    </div>

    <div class="container mt-5">
        <h2 class="text-start mb-3 fs-4 fw-bold text-dark">Lokasi Agen</h2>
        <p class="text-start mb-3 ">Temukan agen terbaik di lokasi incaran</p>

        <div class="agent_slider_container">
            <div class="owl-carousel owl-theme agen_slider">
                <div class="item">
                    <img src="{{ asset('images/offer_3.jpg') }}" alt="" class="mb-3">
                    <p>Malang</p>
                    <p>10 Agent</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/offer_3.jpg') }}" alt="" class="mb-3">
                    <p>Malang</p>
                    <p>10 Agent</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/offer_3.jpg') }}" alt="" class="mb-3">
                    <p>Malang</p>
                    <p>10 Agent</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/offer_3.jpg') }}" alt="" class="mb-3">
                    <p>Malang</p>
                    <p>10 Agent</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/offer_3.jpg') }}" alt="" class="mb-3">
                    <p>Malang</p>
                    <p>10 Agent</p>
                </div>
            </div>
        </div>
    </div>


	<div class="container intro">
        <h2 class="text-start text-dark">Fitur Agen</h2>
        <p class="text-dark">Cari tahu info lengkap agen properti</p>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
	</div>	
</div>


@endsection