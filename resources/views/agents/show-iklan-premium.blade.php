@extends('layouts.single-listing')
@section('content')
	<!-- Offers -->
	<div class="listing">
		<!-- Single Listing -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title">{{ $ads->judul_properti }}</h1>
									{{-- <h1 class="hotel_title">Grand Hotel Eurostar</h1> --}}
									<div class="rating_r rating_r_4 hotel_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<div class="hotel_location">{{ $ads->lokasi_properti }}, {{ $ads->provinsi_properti }}</div>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200"><a href="https://wa.me/{{ $ads->nomor_telepon_properti }}"><i class="fa fa-whatsapp" aria-hidden="true"></i> Hubungi Penjual</a></div>
									<div class="hotel_map_link_container">
										<div class="hotel_map_link">See Location on Map</div>
									</div>
								</div>
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="{{ Storage::url($ads->featured_image) }}" alt="">
								{{-- <img src="images/listing_hotel.jpg" alt=""> --}}
								<div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
									<div class="hotel_review">
										<div class="hotel_review_content">
											<div class="hotel_review_title">very good</div>
											<div class="hotel_review_subtitle">100 reviews</div>
										</div>
										<div class="hotel_review_rating text-center">8.1</div>
									</div>
								</div>
							</div>

							<!-- Hotel Gallery -->

							<div class="hotel_gallery">
								<div class="hotel_slider_container">
									<div class="owl-carousel owl-theme hotel_slider">

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_1.jpg">
												<img src="images/listing_thumb_1.jpg" alt="https://unsplash.com/@jbriscoe">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_2.jpg">
												<img src="images/listing_thumb_2.jpg" alt="https://unsplash.com/@grovemade">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_3.jpg">
												<img src="images/listing_thumb_3.jpg" alt="https://unsplash.com/@fransaraco">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_4.jpg">
												<img src="images/listing_thumb_4.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_5.jpg">
												<img src="images/listing_thumb_5.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_6.jpg">
												<img src="images/listing_thumb_6.jpg" alt="https://unsplash.com/@avidenov">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_7.jpg">
												<img src="images/listing_thumb_7.jpg" alt="https://unsplash.com/@pietruszka">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_8.jpg">
												<img src="images/listing_thumb_8.jpg" alt="https://unsplash.com/@rktkn">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_9.jpg">
												<img src="images/listing_thumb_9.jpg" alt="https://unsplash.com/@mindaugas">
											</a>
										</div>
									</div>

									<!-- Hotel Slider Nav - Prev -->
									<div class="hotel_slider_nav hotel_slider_prev">
										<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_prev'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
											<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
											<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
											11.042,18.219 "/>
										</svg>
									</div>
									
									<!-- Hotel Slider Nav - Next -->
									<div class="hotel_slider_nav hotel_slider_next">
										<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_next'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
										<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
										<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
										17.046,15.554 "/>
										</svg>
									</div>

								</div>
							</div>

							<!-- Hotel Info Text -->

							<div class="hotel_info_text">
								<p>{{ $ads->deskripsi_properti }}</p>
							</div>
                            
                            <div class="info_info_tags text-dark">
                                <h4>Info Properti</h4>
                                <p>Spesifikasi</p>
                                <table class="table">
                                    <tbody>
                                      <tr>
                                        <th scope="row">Luas Bangunan</th>
                                        <td>{{ $ads->luas_bangunan_properti }} / M <sup>2</sup></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Luas Tanah</th>
                                        <td>{{ $ads->luas_tanah_properti }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Kamar Mandi</th>
                                        <td>{{ $ads->kamar_mandi_properti }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Kamar Tidur</th>
                                        <td>{{ $ads->kamar_tidur_properti }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>

						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
    
@endsection
	