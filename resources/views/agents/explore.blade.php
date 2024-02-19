@extends('layouts.about')
@section('content')
<!-- Intro -->

{{-- <div class="intro">
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
</div> --}}

	<!-- form search -->
	<div class="intro">
		<div class="container">
			<form action="#" method="get">
				@csrf
				<input type="text" class="form-control mt-3" name="" placeholder="masukkan lokasi">
				{{-- <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i> Cari</button> --}}
		</div>
	</div>



	<!-- Milestones -->

	{{-- <div class="milestones">
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
	</div> --}}

    <!-- Kota Kota Pilihan -->
	<div class="intro">
		<div class="container">
		<h2 class="intro_title mb-3">Kota-Kota Pilihan Indonesia</h2>
		<div class="owl-carousel owl-theme kota_pilihan">

			<div class="item p-3">
				<div class="intro_item">
					<a href="#">
						<div class="intro_item_background mb-3" >
							<img src="{{ asset('images/svg/city.svg') }}" alt="" class="mb-3">
							<div class="intro_date text-center text-dark">Malang</div>
						</div>
					</a>
				</div>
			</div> <!-- malang -->

			<div class="item p-3">
				<div class="intro_item">
					<a href="#">
						<div class="intro_item_background mb-3" >
							<img src="{{ asset('images/svg/city.svg') }}" alt="" class="mb-3">
							<div class="intro_date text-center text-dark">Tulungagung</div>
						</div>
					</a>
				</div>
			</div> <!-- tulungagung -->

			<div class="item p-3">
				<div class="intro_item">
					<a href="#">
						<div class="intro_item_background mb-3" >
							<img src="{{ asset('images/svg/city.svg') }}" alt="" class="mb-3">
							<div class="intro_date text-center text-dark">Kediri</div>
						</div>
					</a>
				</div>
			</div> <!-- kediri -->

			<div class="item p-3">
				<div class="intro_item">
					<a href="#">
						<div class="intro_item_background mb-3" >
							<img src="{{ asset('images/svg/city.svg') }}" alt="" class="mb-3">
							<div class="intro_date text-center text-dark">Blitar</div>
						</div>
					</a>
				</div>
			</div> <!-- blitar -->

			<div class="item p-3">
				<div class="intro_item">
					<a href="#">
						<div class="intro_item_background mb-3" >
							<img src="{{ asset('images/svg/city.svg') }}" alt="" class="mb-3">
							<div class="intro_date text-center text-dark">Sidoarjo</div>
						</div>
					</a>
				</div>
			</div> <!-- sidoarjo -->

			<div class="item p-3">
				<div class="intro_item">
					<a href="#">
						<div class="intro_item_background mb-3" >
							<img src="{{ asset('images/svg/city.svg') }}" alt="" class="mb-3">
							<div class="intro_date text-center text-dark">Pasuruan</div>
						</div>
					</a>
				</div>
			</div> <!-- pasuruan -->
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
							<img src="{{ asset('images/rumah/model-hunian.jpg') }}" alt="">
							<p>Rumah</p>
						</div>
					</a>
				</div>
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/rumah/model-hunian.jpg') }}" alt="">
							<p>Apartemen</p>
						</div>
					</a>
				</div>
	
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/rumah/model-hunian.jpg') }}" alt="">
							<p>Villa</p>
						</div>
					</a>
				</div>
				<div class="item p-3">
					<a href="#">
						<div class="intro_item">
							<img src="{{ asset('images/rumah/model-hunian.jpg') }}" alt="">
							<p>Ruko</p>
						</div>
					</a>
				</div>
			</div>
			</div>
	</div>

@endsection 