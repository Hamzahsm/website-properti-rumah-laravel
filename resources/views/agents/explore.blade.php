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
                    <div class="mt-3">
                        <form action="#" method="get">
                            <input type="text" name="keyword" placeholder="Masukan nama kota" class="form-control">
                        </form>
                    </div>
                    {{-- <div class="button intro_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div> --}}
                </div>
            </div>
        </div>
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
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('images/listing_thumb_9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection 