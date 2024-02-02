@extends('layouts.about')
@section('content')
<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="images/intro.png" alt=""></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Saatnya Tinggal di Rumah Impian</div>
                    <p class="intro_text">Sedang mencari kota terbaik untuk tempat tinggal? Yuk, kenali lebih jauh keunggulan berbagai kota di Indonesia melalui website kami! Selain bisa menemukan kota impian, di sini kamu juga bisa memilih hunian idaman.</p>
                </div>
            </div> 
        </div>
    </div> 
</div>

<div class="intro">
	<!-- form search -->
	<div class="container">
		<form action="#" method="get">
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
</div>



	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="{{ asset('images/svg/carikan-properti.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="100">0</div> 
						<div class="milestone_text">Rumah</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{ asset('images/svg/carikan-properti.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="100">0</div>
						<div class="milestone_text">Ruko</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{ asset('images/svg/explore-area.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="30">0</div>
						<div class="milestone_text">Kota</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{ asset('images/svg/explore-area.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="14">0</div>
						<div class="milestone_text">Kabupaten</div>
					</div>
				</div>

			</div>
		</div>
	</div>

    <!-- Kota Kota Pilihan -->
	<div class="intro">
		<div class="container">
		<h2 class="intro_title mb-3">Kota-Kota Pilihan Indonesia</h2>
		<div class="owl-carousel owl-theme kota_pilihan">
			<div class="item p-3">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@willianjusten -->
					<div class="intro_item_background" style="background-image:url(images/intro.png)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Scotland</h1>
							<div class="intro_price">From $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<div class="list">
							<ul class="text-white">
								<li>Kamar Tidur : 2</li>
								<li>Kamar Mandi : 2</li>
								<li>Dapur : 1</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="item p-3">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@hellolightbulb -->
					<div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Greece</h1>
							<div class="intro_price">From $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item p-3">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@willianjusten -->
					<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Scotland</h1>
							<div class="intro_price">From $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item p-3">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@willianjusten -->
					<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Scotland</h1>
							<div class="intro_price">From $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item p-3">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@willianjusten -->
					<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Scotland</h1>
							<div class="intro_price">From $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item p-3">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@willianjusten -->
					<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Scotland</h1>
							<div class="intro_price">From $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<!-- ragam hunian -->
	<div class="intro">
		<div class="container">
			<h2 class="intro_title mb-3">Ragam Model Hunian</h2>
			<div class="owl-carousel owl-theme ragam_model_hunian">
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/offer_2.jpg') }}" alt="">
							<p>Daftar Rumah Bebas PPN 2024</p>
						</div>
					</a>
				</div>
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/offer_2.jpg') }}" alt="">
							<p>Daftar Rumah Bebas PPN 2024</p>
						</div>
					</a>
				</div>
	
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/offer_2.jpg') }}" alt="">
							<p>Daftar Rumah Bebas PPN 2024</p>
						</div>
					</a>
				</div>
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/offer_2.jpg') }}" alt="">
							<p>Daftar Rumah Bebas PPN 2024</p>
						</div>
					</a>
				</div>
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/offer_2.jpg') }}" alt="">
							<p>Daftar Rumah Bebas PPN 2024</p>
						</div>
					</a>
				</div>
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/offer_2.jpg') }}" alt="">
							<p>Daftar Rumah Bebas PPN 2024</p>
						</div>
					</a>
				</div>
			</div>
			</div>
	</div>

@endsection 