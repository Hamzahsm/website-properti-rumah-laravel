	<!-- Search -->
<div class="search">
	<div class="container mb-3 top3"> <!-- tab nav seacrch -->
		<div class="tab-content">
			<ul class="nav nav-pills " id="pills-tab" role="tablist">
				<li class="nav-item " role="presentation" >
				  <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dijual</button>
				</li>
				<li class="nav-item " role="presentation" >
				  <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Disewakan</button>
				</li>
			</ul>
		</div>
	</div>
	  
	<div class="container text-center"> <!-- form tab -->
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div class="search-bar"> 
					<form class="search-form d-flex align-items-center" method="get" action="{{ route('cari.properti') }}">
					<input type="text" name="keyword" placeholder="Dijual, judul properti, lokasi" title="Dijual, judul properti, lokasi" class="form-control">
					<button type="submit" title="Search" class="btn bordered"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div> 
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				<div class="search-bar"> 
					<form class="search-form d-flex align-items-center" method="get" action="{{ route('cari.iklan.premium') }}">
					<input type="text" name="keyword" placeholder="Disewakan, judul properti, lokasi" title="Disewakan, judul properti, lokasi" class="form-control">
					<button type="submit" title="Search" class="btn bordered"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div> 
			</div>
		</div>
	</div>
</div>