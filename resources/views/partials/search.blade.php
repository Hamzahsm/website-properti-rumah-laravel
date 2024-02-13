	<!-- Search -->

	<div class="search">
		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
								<img src="images/bus.png" alt="">Dijual
							</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
								<img src="images/departure.png" alt="">Disewa
							</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
								<img src="images/island.png" alt="">Properti Baru
							</div>
						</div>		
					</div>
					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option> 
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Disewa</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_2" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_2" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Properti Baru</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_3" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>		
	</div>

    {{-- search form sendiri work , tinggal query ke db dijual, disewakan --}}
	{{-- <div class="search-bar row"> 
		<form class="search-form d-flex align-items-center col-lg-3 mb-3" method="get" action="{{ route('cari.properti') }}">
		<input type="text" name="keyword" placeholder="Masukkan nama" title="Masukkan nama" class="form-control">
		<button type="submit" title="Search" class="btn bordered"><i class="bi bi-search"></i></button>
		</form>
	</div>  --}}

	<div class="search my-5">
		<div class="container fill_height">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
				  <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dijual (Iklan Biasa)</button>
				</li>
				<li class="nav-item" role="presentation">
				  <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Disewakan</button>
				</li>
				<li class="nav-item" role="presentation">
				  <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Properti Baru</button>
				</li>
			</ul>
		</div>
	</div>


	{{-- tab nav search sendiri --}}
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item" role="presentation">
		  <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dijual (Iklan Biasa)</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Disewakan</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Properti Baru</button>
		</li>
	</ul>
	  
	{{-- form iklan properti biasa --}}
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<div class="search-bar row"> 
				<form class="search-form d-flex align-items-center col-lg-3 mb-3" method="get" action="{{ route('cari.properti') }}">
				<input type="text" name="keyword" placeholder="judul properti, lokasi" title="judul properti, lokasi" class="form-control">
				<button type="submit" title="Search" class="btn bordered"><i class="bi bi-search"></i></button>
				</form>
			</div> 
		</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="search-bar row"> 
				<form class="search-form d-flex align-items-center col-lg-3 mb-3" method="get" action="{{ route('cari.iklan.premium') }}">
				<input type="text" name="keyword" placeholder="judul properti, lokasi" title="judul properti, lokasi" class="form-control">
				<button type="submit" title="Search" class="btn bordered"><i class="bi bi-search"></i></button>
				</form>
			</div> 
		</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">tab 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, praesentium.</div> 
	  
	</div>