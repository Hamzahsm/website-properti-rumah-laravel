	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-start fs-3">Daftar Properti Baru</h2>
                    <p class="intro_text text-start text-dark">Cari hunian impian Anda, dari rumah minimalis hingga apartemen mewah di di</p>
				</div>
			</div>

            <div class="product_slider">
                <div class="owl-carousel owl-theme product_slider_home">
                    @foreach ($ads as $item)
                        <div class="item p-3">
                            <div class="intro_item">
                                <div class="intro_item_overlay"></div>
                                <div class="intro_item_background" style="background-image:url({{ Storage::url($item->featured_image) }})"></div>
                                <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="intro_date">{{ $item->judul_properti }}</div>
                                    <div class="button intro_button">
                                        <div class="button_bcg"></div>
                                        <a href="/single-listing/{{ $item->id }}"><i class="fa fa-external-link" aria-hidden="true"></i> {{ $item->harga_start_properti }} - {{ $item->harga_end_properti }}</a>
                                    </div>
                                    <ul class="text-white">
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> : {{ $item->kamar_tidur_properti }}</li>
                                        <li><i class="fa fa-bath" aria-hidden="true"></i> : {{ $item->kamar_mandi_properti }}</li>
                                        <li>LT : {{ $item->luas_tanah_properti }} </li>
                                        <li>LB : {{ $item->luas_bangunan_properti }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>   
                    @endforeach
    
                </div>
            </div>
		</div>
	</div>