<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/blog_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/blog_responsive.css') }}">
</head>

<body>

<div class="super_container"> 
    @include('blogs.header')
    @include('blogs.parallax')
    @yield('content')
    @include('blogs.footer')
</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/blog_custom.js') }}"></script> 

<script>
    	function harga_properti() {
		var harga = document.getElementById('harga_properti');
		return harga.value;
	}

	function uang_muka() {
		var pembayaran = document.getElementById('uang_muka');
		return pembayaran.value;
	}

	var pilihan_suku_bunga = new Array();
	pilihan_suku_bunga["none"] = 0;
	pilihan_suku_bunga["bunga_rendah"] = 5;
	pilihan_suku_bunga["bunga_bank"] = 10;

	function ambil_bunga() {
		var sukuBunga = 0;
		var theForm = document.forms["formCalculate"];
		var selectedFilling = theForm.elements["pilihan_suku_bunga"];
		sukuBunga = pilihan_suku_bunga[selectedFilling.value];
		return sukuBunga;
	}

	function tenor() {
		var jangkaTenor = document.getElementById('tenor');
		return jangkaTenor.value;
	}

	function calculateTotal() {
		// var totalKpr = (harga_properti() * ambil_bunga() / 100) / tenor() - uang_muka() ; //the calculation is good now! did anyone know how to change input type to currecny ?
		var totalKpr = ((harga_properti() - uang_muka() ) * ambil_bunga() / 100) / tenor() ; //the calculation is good now! did anyone know how to change input type to currecny ?
		var divobj = document.getElementById('totalPrice'); //display the result
		divobj.style.display = 'block';
		divobj.innerHTML = "Angsuran Tiap Bulan" + totalKpr.toLocaleString('en-US', {
			style: 'currency',
			currency: 'IDR',
		});
	}

	function hideTotal() {
		var divobj = document.getElementById('totalPrice');
		divobj.style.display = 'none';
	}

</script>
</body>

</html>