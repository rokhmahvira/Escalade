<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$("#jenis_pembayaran").change(function() {
			console.log($("#jenis_pembayaran option:selected").val());
			if ($("#jenis_pembayaran option:selected").val() == '3') {
				$('#asuransiku').prop('hidden', false);
			} else {
				$('#asuransiku').prop('hidden', 'true');
			}
		});
	});
</script>
<script type="text/javascript">
	function addText() {
		var w = document.getElementById("subtotal");
		var x = document.getElementById("cmb");
		var y = document.getElementById("txt");
		var z = document.getElementById("hasil");
		gra = w.value * (x.value / 100);
		gra_tot = w.value - gra;
		getCmb = x.value;
		y.value = gra;
		z.value = gra_tot;
	}
</script>

<script type="text/javascript">
	function addText() {
		var x = document.getElementById("pilih_diskon");
		var y = document.getElementById("biaya_layanan");
		getcmb = x.value;
		y.value = getcmb;
	}

	$(document).ready(function) {
		var c = $("pilih_diskon").option

		$("biaya_layanan").val(c);

		$("#benih").onchange(function() {
			var lama = $("#benih option:selected").attr("lama");
			var berat = $("#benih option:selected").attr("berat");
			var harga = $("#benih option:selected").attr("harga");

			$("#lama-tanam").val(lama);
			$("#berat").val(berat);
			$("#harga").val(harga);

		});
	}

	$(window).load(function() {
		$(".stileone").on("click", function() {
			$(".stileone").css("background-color", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stileone1").on("click", function() {
			$(".stileone1").css("background", "#e28a9d");
			$(".stileone").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stileone2").on("click", function() {
			$(".stileone2").css("background", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stileone3").on("click", function() {
			$(".stileone3").css("background", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stileone4").on("click", function() {
			$(".stileone4").css("background", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone").css("background", "transparent");
		});

		$(".stil").on("click", function() {
			$(".stileone").css("background-color", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stil1").on("click", function() {
			$(".stileone1").css("background", "#e28a9d");
			$(".stileone").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stil2").on("click", function() {
			$(".stileone2").css("background", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stil3").on("click", function() {
			$(".stileone3").css("background", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone").css("background", "transparent");
			$(".stileone4").css("background", "transparent");
		});
	});
	$(window).load(function() {
		$(".stil4").on("click", function() {
			$(".stileone4").css("background", "#e28a9d");
			$(".stileone1").css("background", "transparent");
			$(".stileone2").css("background", "transparent");
			$(".stileone3").css("background", "transparent");
			$(".stileone").css("background", "transparent");
		});
	});



	function next1() {
		var x = document.getElementById("data_diri1");
		var y = document.getElementById("data_diri2");
		y.style.display = "block";
		x.style.display = "none";
	}

	function next2() {
		var x = document.getElementById("data_diri2");
		var y = document.getElementById("data_diri3");
		y.style.display = "block";
		x.style.display = "none";
	}

	function next3() {
		var x = document.getElementById("data_diri3");
		var y = document.getElementById("data_diri4");
		y.style.display = "block";
		x.style.display = "none";
	}

	function prev2() {
		var x = document.getElementById("data_diri2");
		var y = document.getElementById("data_diri1");
		y.style.display = "block";
		x.style.display = "none";
	}

	function prev3() {
		var x = document.getElementById("data_diri3");
		var y = document.getElementById("data_diri2");
		y.style.display = "block";
		x.style.display = "none";
	}

	function prev4() {
		var x = document.getElementById("data_diri4");
		var y = document.getElementById("data_diri3");
		y.style.display = "block";
		x.style.display = "none";
	}
</script>
<style type="text/css">
	@media only screen and (max-width: 800px) {
		.stileone {
			background-color: #e28a9d;
		}

		.tab-content {
			height: auto;
			width: auto;
			top: 10px;
			bottom: 500px;
			z-index: 1;
		}

		.mt-4 {
			margin: 40px 0 0 0;
		}

		.mt-5 {
			padding: 25px 150px 0;
		}

		.mt-5 a {
			padding: 10px;
			font-size: 15px;
			border-radius: 5px;
		}

		a.mt-6 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 150px;
			font-size: 15px;
			margin: 50px 0 0 0;
		}

		a.mt-7 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 150px;
			font-size: 15px;
			cursor: pointer;
			margin: 50px 0 0 50px;
		}

		a.mt-8 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 170px;
			font-size: 15px;
			cursor: pointer;
			margin: 235px 0 0 0px;
		}

		a.mt-9 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 170px;
			font-size: 15px;
			cursor: pointer;
			margin: 170px 0 0 0px;
		}

		.mt-f {
			float: right;
		}

		.bor-top {
			border-top: 2px solid #fff;
		}

		.nav-gr {
			height: auto;
			width: auto;
			background-color: transparent;
			margin: 0 0px 0 0;
			float: right;
			color: white;
			z-index: 2;
		}

		.box {
			height: auto;
			width: auto;
			background-color: #424242;
			display: block;
			z-index: 2;
		}

		.box-gr {
			height: 85px;
			width: auto;
			float: left;
			border-radius: 45px 0 0 45px;
			z-index: 2;
		}

		.box-gr-item {
			height: 85px;
			width: 300px;
			float: left;
			border-radius: 45px 0 0 45px;
			border-bottom: 2px solid #fff;
			z-index: 2;
		}

		.boxx {
			margin-left: 0px;
			border-radius: 45px 0 0 45px;
			float: left;
			color: #000;
		}

		.row.boxx.active {
			background-color: #e28a9d;
			color: #fff;
		}

		.box-gr-header {
			height: 40px;
			width: 300px;
			font-size: 18px;
			padding: 10px 0 0 110px;
			font-weight: bold;
			color: white;
		}

		.box-gr-graf {
			height: 35px;
			width: 300px;
			font-size: 12px;
			padding: 0 0 0 110px;
			color: white;
		}

		.row.boxx:hover {
			background-color: #e28a9d;
			cursor: pointer;
			color: #fff;
		}

		.box-gr-circle {
			height: 85px;
			width: 85px;
			text-align: center;
			border-radius: 100%;
			border: 3px solid #E6E6E6;
		}

		.box-gr-count {
			font-size: 29px;
			position: absolute;
			margin: 20px 0 0 31px;
			font-weight: bold;
		}

		.cir-col {
			background-color: #A9A9A9;
		}

		.nav-eta {
			margin: 20px 0 0 0px;
			/*background-color: red;*/
		}

		.mr-1 {
			margin: 80px 0 0 70px;
		}

		.mr-2 {
			margin: 5px 0 0 10px;
		}

		.box-eta td+td {
			padding-left: 50px;
		}

		.box-eta td {
			color: #797979;
			font-size: 15px;
		}

		.box-eta td.title-f {
			font-weight: bold;
			/*text-transform: capitalize;*/
		}

		.box-eta input {
			border: 1px solid #DCDCDC;
			box-shadow: none;
			border-radius: 3px;
			float: right;
			margin: 10px 0 0 0;
			width: 267px;
		}

		.box-eta textarea {
			width: 520px;
			margin: 15px 0 0 0;
			border: 1px solid #DCDCDC;
		}

		.box-eta-title {
			margin: 30px 0 0 10px;
			font-size: 18px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.title-header {
			margin: 30px 0 0 10px;
			font-size: 18px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.title-content {
			margin: 20px 0 0 10px;
			font-size: 15px;
			line-height: 1.5em;
		}

		.title-content-x {
			margin: 5px 0 0 10px;
			font-size: 15px;
			line-height: 1.5em;
		}

		.box-dat-title {
			margin: 30px 0 0 10px;
			font-size: 15px;
			font-weight: bold;
			text-transform: uppercase;
			/*background-color: pink;*/
		}

		.box-dat td {
			color: #797979;
			font-size: 15px;
			/*background-color: red;*/
		}

		.box-dat td+td {
			padding-left: 20px;
		}

		.box-dat input {
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			box-shadow: none;
		}

		.box6 select {
			background-color: white;
			color: none;
			width: 460px;
			font-size: 15px;
			-webkit-appearance: button;
			appearance: button;
			outline: none;
			text-align: left;

		}

		.box6::before {
			content: "\f13a";
			font-family: FontAwesome;
			position: absolute;
			background-color: #0563af;
			top: 0;
			right: 0;
			width: 30px;
			height: 34px;
			text-align: center;
			font-size: 19px;
			line-height: 36px;
			color: rgba(255, 255, 255);
			background-color: #F40049;
			pointer-events: none;
			border-radius: 0 20% 20% 0;
		}

		.box6:hover::before {
			color: rgba(255, 255, 255, 0.6);
			background-color: #F40049;
		}

		.box6 select option {
			padding: 30px;
		}

		.in-1 {
			width: 20px;
		}

		.in-1 select {
			width: 70px;
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			box-shadow: none;
		}

		.label-c {
			color: #797979;
			padding: 10px 0 0 0;
			font-size: 15px;
		}

		.in-2 {
			width: 170px;
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			box-shadow: none;
		}

		label.control-t {
			font-weight: normal;
		}

		.noid {
			margin-top: 500px;
			padding-right: 200px;
		}

		.alt td {
			color: #797979;
			font-size: 15px;
			padding: 0 0 0 10px;
			/*background-color: red;*/
		}

		.alt td+td {
			padding-left: 35px;
		}

		.alt input {
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			padding: 0 370px 0 0;
			box-shadow: none;
		}

		.custom-select {
			position: relative;
			font-family: Arial;
			padding: 0 0 0 50px;
			color: #000;
		}

		.custom-select select {
			display: none;
			/*hide original SELECT element:*/
		}

		.select-selected {
			width: 170px;
			background-color: #fff;
			border-radius: 5px;
		}

		/*style the arrow inside the select element:*/
		.select-selected:after {
			float: right;
			margin: 7px 0 0 0;
			content: "";
			top: 14px;
			right: 10px;
			width: 0;
			height: 0;
			border: 6px solid transparent;
			border-color: #778899 transparent transparent transparent;
		}

		/*point the arrow upwards when the select box is open (active):*/
		.select-selected.select-arrow-active:after {
			background-color: white;
			top: 7px;
			margin: 2px 0 0 0;
		}

		/*style the items (options), including the selected item:*/
		.select-items div,
		.select-selected {
			color: #778899;
			padding: 8px 16px;
			width: 170px;
			border: 1px solid #eee;
			box-shadow: none;
			cursor: pointer;
			user-select: none;
		}

		/*style items (options):*/
		.select-items {
			background-color: #eee;
			width: 170px;
			top: 100%;
			left: 0;
			right: 0;
			z-index: 99;
		}

		/*hide the items when the select box is closed:*/
		.select-hide {
			display: none;
		}

		.select-items div:hover,
		.same-as-selected {
			background-color: #30a5ff;
			color: #fff;
		}

		.kotak {}
	}



	@media only screen and (min-width: 900px) {
		.stileone {
			background-color: #e28a9d;
		}

		.tab-content {
			/*height: 525px;*/
			border: 1px solid #e0e0e0;
			width: 97%;
			z-index: 1;
			margin-left: 15px;
			margin-right: -15px;
			padding-left: 10px;
		}

		.mt-4 {
			margin: 40px 0 0 0;
		}

		.mt-5 {
			padding: 25px 150px 0;
		}

		.mt-5 a {
			padding: 10px;
			font-size: 15px;
			border-radius: 5px;
		}

		a.mt-6 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 150px;
			font-size: 15px;
			margin: 50px 0 0 0;
		}

		a.mt-7 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 150px;
			font-size: 15px;
			cursor: pointer;
			margin: 50px 0 0 50px;
		}

		a.mt-8 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 170px;
			font-size: 15px;
			cursor: pointer;
			margin: 235px 0 0 0px;
		}

		a.mt-9 {
			padding: 25px 150px 0;
			padding: 10px;
			width: 170px;
			font-size: 15px;
			cursor: pointer;
			margin: 170px 0 0 0px;
		}

		.mt-f {
			float: right;
		}

		.bor-top {
			border-top: 2px solid #fff;
		}

		.nav-gr {
			background-color: transparent;
			margin: 0 70px 0 0;
			float: right;
			color: white;
			z-index: 2;
		}

		.box {
			height: 525px;
			width: 360px;
			background-color: #424242;
			display: block;
			z-index: 2;
		}

		.box-gr {
			height: 85px;
			width: 400px;
			float: right;
			border-radius: 45px 0 0 45px;
			z-index: 2;
		}

		.box-gr-item {
			height: 85px;
			width: 400px;
			float: left;
			border-radius: 45px 0 0 45px;
			border-bottom: 2px solid #fff;
			z-index: 2;
		}

		.boxx {
			margin-left: 0px;
			border-radius: 45px 0 0 45px;
			float: left;
			color: #000;
		}

		.row.boxx.active {
			background-color: #e28a9d;
			color: #fff;
		}

		.box-gr-header {
			height: 40px;
			width: 400px;
			font-size: 18px;
			padding: 10px 0 0 110px;
			font-weight: bold;
			color: white;
		}

		.box-gr-graf {
			height: 35px;
			width: 400px;
			font-size: 13px;
			padding: 0 0 0 110px;
			color: white;
		}

		.row.boxx:hover {
			background-color: #e28a9d;
			cursor: pointer;
			color: #fff;
		}

		.box-gr-circle {
			height: 85px;
			width: 85px;
			text-align: center;
			border-radius: 100%;
			border: 3px solid #E6E6E6;
		}

		.box-gr-count {
			font-size: 29px;
			position: absolute;
			margin: 20px 0 0 31px;
			font-weight: bold;
		}

		.cir-col {
			background-color: #A9A9A9;
		}

		.nav-eta {
			margin: 20px 0 0 0px;
			/*background-color: red;*/
		}

		.mr-1 {
			margin: 80px 0 0 70px;
		}

		.mr-2 {
			margin: 5px 0 0 10px;
		}

		.box-eta td+td {
			padding-left: 50px;
		}

		.box-eta td {
			color: #797979;
			font-size: 15px;
		}

		.box-eta td.title-f {
			font-weight: bold;
			/*text-transform: capitalize;*/
		}

		.box-eta input {
			border: 1px solid #DCDCDC;
			box-shadow: none;
			border-radius: 3px;
			float: right;
			margin: 10px 0 0 0;
			width: 267px;
		}

		.box-eta textarea {
			width: 520px;
			margin: 15px 0 0 0;
			border: 1px solid #DCDCDC;
		}

		.box-eta-title {
			margin: 30px 0 0 10px;
			font-size: 18px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.title-header {
			margin: 30px 0 0 10px;
			font-size: 18px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.title-content {
			margin: 20px 0 0 10px;
			font-size: 15px;
			line-height: 1.5em;
		}

		.title-content-x {
			margin: 5px 0 0 10px;
			font-size: 15px;
			line-height: 1.5em;
		}

		.box-dat-title {
			margin: 30px 0 0 10px;
			font-size: 15px;
			font-weight: bold;
			text-transform: uppercase;
			/*background-color: pink;*/
		}

		.box-dat td {
			color: #797979;
			font-size: 15px;
			/*background-color: red;*/
		}

		.box-dat td+td {
			padding-left: 20px;
		}

		.box-dat input {
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			box-shadow: none;
		}

		.box6 select {
			background-color: white;
			color: none;
			width: 320px;
			font-size: 15px;
			-webkit-appearance: button;
			appearance: button;
			outline: none;
			text-align: left;

		}

		.box6::before {
			content: "\f13a";
			font-family: FontAwesome;
			position: absolute;
			background-color: #0563af;
			top: 0;
			right: 0;
			width: 30px;
			height: 34px;
			text-align: center;
			font-size: 19px;
			line-height: 36px;
			color: rgba(255, 255, 255);
			background-color: #F40049;
			pointer-events: none;
			border-radius: 0 20% 20% 0;
		}

		.box6:hover::before {
			color: rgba(255, 255, 255, 0.6);
			background-color: #F40049;
		}

		.box6 select option {
			padding: 30px;
		}

		.in-1 {
			width: 20px;
		}

		.in-1 select {
			width: 70px;
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			box-shadow: none;
		}

		.label-c {
			color: #797979;
			padding: 10px 0 0 0;
			font-size: 15px;
		}

		.in-2 {
			width: 170px;
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			box-shadow: none;
		}

		label.control-t {
			font-weight: normal;
		}

		.noid {
			margin-top: 500px;
			padding-right: 200px;
		}

		.alt td {
			color: #797979;
			font-size: 15px;
			padding: 0 0 0 10px;
			/*background-color: red;*/
		}

		.alt td+td {
			padding-left: 35px;
		}

		.alt input {
			margin: 10px 0 0 0;
			border: 1px solid #DCDCDC;
			padding: 0 370px 0 0;
			box-shadow: none;
		}

		.custom-select {
			position: relative;
			font-family: Arial;
			padding: 0 0 0 50px;
			color: #000;
		}

		.custom-select select {
			display: none;
			/*hide original SELECT element:*/
		}

		.select-selected {
			width: 170px;
			background-color: #fff;
			border-radius: 5px;
		}

		/*style the arrow inside the select element:*/
		.select-selected:after {
			float: right;
			margin: 7px 0 0 0;
			content: "";
			top: 14px;
			right: 10px;
			width: 0;
			height: 0;
			border: 6px solid transparent;
			border-color: #778899 transparent transparent transparent;
		}

		/*point the arrow upwards when the select box is open (active):*/
		.select-selected.select-arrow-active:after {
			background-color: white;
			top: 7px;
			margin: 2px 0 0 0;
		}

		/*style the items (options), including the selected item:*/
		.select-items div,
		.select-selected {
			color: #778899;
			padding: 8px 16px;
			width: 170px;
			border: 1px solid #eee;
			box-shadow: none;
			cursor: pointer;
			user-select: none;
		}

		/*style items (options):*/
		.select-items {
			background-color: #eee;
			width: 170px;
			top: 100%;
			left: 0;
			right: 0;
			z-index: 99;
		}

		/*hide the items when the select box is closed:*/
		.select-hide {
			display: none;
		}

		.select-items div:hover,
		.same-as-selected {
			background-color: #30a5ff;
			color: #fff;
		}

		.kotak {}

		.box-rencana {
			box-shadow: 2px #888888;
			border: 1px solid #e0e0e0;
			padding-left: 20px;
			margin-bottom: 20px;
			yy
		}

		input[type="text"]:disabled {
			background: white;
		}

		input[type="text"]:readonly {
			background: white;
		}
	}
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<br>
	<div class="row" style="height: 100%;">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
	
					<div class="col-md-12">
						<font style="font-weight: bold; font-size:15px;">Pembayaran <i class="fa fa-chevron-right" aria-hidden="true"></i> Proses Pembayaran</font><br><br>
						
						<div class="box-rencana">
							<h3 class="mb-20 weight-500">
								<b>Rencana Pemeriksaan
									<?php foreach ($bayar->result() as $result) : ?>
										<?php echo $result->nama_depan; ?> <?php echo $result->nama_belakang; ?>
								</b>
									<?php endforeach; ?>
								</h3>
							<p><?php echo $result->nama_cabang; ?> &nbsp; | &nbsp; <?php echo $result->nama_dokter;?></p>	
						</div>
					</div>

					<div class="col">
						<div class="tab-content col-md-12">
							<?php foreach($bayar->result() as $result) : ?>
								<div class="tab-pane fade in active" id="metode_pembayaran">
									<form action="<?php echo base_url('klinik/update_bayar/'); ?>" method="post" enctype="multipart/form-data" id="form1">
										<input type="hidden" name="id_booking" value="<?php echo $result->id_booking; ?>">
										
										<div class="col-md-12">
											<h4 class="mb-20 weight-500" style="font-weight: bold">Metode Pembayaran</h4>
										</div>

										<div class="col-lg-12">
											Jenis Pembayaran
										</div>
										<div class="col-lg-4">
											<div class="form-group box-6">
												<select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" required>
													<option value="<?php echo $result->id_metode; ?>" id="<?php echo $result->id_metode; ?>" style="text-align:right"><?php echo $result->nama_metode; ?></option>
														<?php foreach ($metodebayar as $metode) { ?>
															<option value="<?php echo $metode['id_metode']; ?>" id="<?php echo $metode['id_metode']; ?>" style="text-align:right"><?php echo $metode['nama_metode']; ?></option>
														<?php } ?>
													</option>
												</select>
											</div>
										</div>

										<div class="" id="asuransiku" hidden>
											<div class="col-md-12">
												<h5 class="mb-20 weight-500" style="font-weight: bold;">
													Detail Asuransi			
												</h5><br>			
											</div>	
											<div class="col-lg-2">
												Provider Asuransi			
											</div>
											<div class="col-lg-4">
												<div class="form-group box-6">
													<select class="form-control" name="provider" id="provider" hidden />
														<option value="<?php echo $result->provider; ?>" disabled selected style="display: none;"><?php echo $result->provider; ?></option>
														<option value="Provider Allianz" id="Provider Allianz">Provider Allianz</option>
														<option value="Provider Astra-Admedika" id="Provider Astra-Admedika">Provider Astra-Admedika</option>
														<option value="Provider Prudential" id="Provider Prudential">Provider Prudential</option>
														<option value="Provider MAG" id="Provider MAG">Provider MAG</option>
														<option value="Provider Cigna" id="Provider Cigna">Provider Cigna</option>
													</select>		
												</div>			
											</div>	
											
											<div class="col-lg-2">
												Kategori Asuransi			
											</div>

											<div class="col-lg-4">
												<div class="form-group box6">
													<select class="form-control" name="kasuransi" id="kasuransi" hidden />
														<option value="<?php echo $result->kategori_asuransi; ?>" disabled selected style="display: none;"><?php echo $result->kategori_asuransi; ?></option>
														<option value="Asuransi Jiwa" id="Asuransi Jiwa">Asuransi Jiwa</option>
														<option value="Asuransi Kesehatan" id="Asuransi Kesehatan">Asuransi Kesehatan</option>
														<option value="Asuransi Bisnis" id="Asuransi Bisnis">Asuransi Bisnis</option>
														<option value="Asuransi Umum" id="Asuransi Umum">Asuransi Umum</option>
													</select>
												</div>			
											</div>

											<div class="col-lg-2">
												Nomor Kartu Asuransi			
											</div>
											<div class="col-lg-10">
												<div class="form-group">
													<input type="text" class="form-control" rows="3" name="no_asuransi" id="no_asuransi" value="<?php echo $result->nomor_asuransi; ?>" hidden />
												</div>
											</div>

											<div class="form-group">
												<div class="col-lg-2">
													Upload Foto Kartu Asuransi
												</div>
												<div class="col-lg-10">
													<img src="<?php echo base_url('images/'); ?>asuransi/<?php echo $result->foto_asuransi ?>" width="300px">
													<div class="form-group">
														<input type="file" class="form-control" rows="3" name="foto_asuransi" id="foto_asuransi" hidden />
													</div>
												</div>
											</div>
										</div>

										<button data-toggle="tab" href="#proses_bayar" type="button" class="btn salmon stil1" style="float: right;margin-top: 5%; background-color:#F40049; color:white">Selanjutnya</button>
										
										<div class="col-md-12">
											<h4 class="mb-20 weight-500" style="font-weight: bold">Informasi Pasien</h4>
										</div>
										
											<div class="col-md-12" style="border: 1px solid #e0e0e0; margin-top: 15px;">
												<div class="col-md-4"><br>
													<font style="font-weight: bold; font-size: 18px;">Rokhmah Vira</font>
													<span>
													(Pasuruan, 20 Tahun)
												</span><br><br>
													<p>Relation</p>
													<p>No. Rekam Medis 123456</p> 
												</div>

												<div class="col-md-4" style="border-left: 1px solid #e0e0e0;">
													<br>
													<font style="font-weight: bold; font-size: 18px;"> Pemeriksaan Terdekat</font>
													<br><br>
													<p>10-10-2020 <span style="margin-left: 30px;">Drg. Lila Asri</span> </p>
													<p>07.00 - 09.00 A.M
														<span style="margin-left: 30px; background: #FFFF00; color: #000;"class="label label-warning">Menunggu Pendaftaran</span>
														
													</p>
												</div>
												<div class="col-md-4" style="border-left: 1px solid #e0e0e0;"><br>
													<font style="font-weight: bold; font-size: 18px;"> Kontak Pasien</font>
													<br><br>
													<p><b>No HP :</b><span>089617271499</span></p>
													<p><b>Email :</b><span>rokhmahv@gmail.com</span></p> 
												</div>
											</div>
										
		<div class="kotak">
            <div class="col-md-12" style="border-bottom: 1px solid #e0e0e0; margin-top: 15px;">
              <br>

              <div class="col-md-2 stileone" style="cursor: pointer;">
                <div class="tablink" data-toggle="tab" href="#umum">
                  <center>
                    <font>Umum</font>
                  </center>
                </div>
              </div>

              <div class="col-md-2 stileone1" style="cursor: pointer;">
                <div class="tablink" data-toggle="tab" href="#pemeriksaan_klinis">
                  <center>
                    <font>Pemeriksaan Klinis</font>
                  </center>
                </div>
              </div>

              <div class="col-md-2 stileone2" style="cursor: pointer;">
                <div class="tablink" data-toggle="tab" href="#pemeriksaan_penunjang">
                  <center>
                    <font>Pemeriksaan Penunjang</font>
                  </center>
                </div>
              </div>

              <div class="col-md-2 stileone3" style="cursor: pointer;">
                <div class="tablink" data-toggle="tab" href="#summary_rekam_medis">
                  <center>
                    <font>Summary Rekam Medis</font>
                  </center>
                </div>
              </div>

              <div class="col-md-2 stileone4" style="cursor: pointer;">
                <div class="tablink" data-toggle="tab" href="#odontogram">
                  <center>
                    <font>Odontogram</font>
                  </center>
                </div>
              </div>

              <div class="col-md-2 stileone5" style="cursor: pointer;">
                <div class="tablink" data-toggle="tab" href="#metode_pembayaran">
                  <center>
                    <font>Metode Pembayaran</font>
                  </center>
                </div>
              </div>
            </div>
            <br>
            <div class="tab-content col-md-12">
              <div id="umum" class="tab-pane fade in active">
                <div class="col-md-12"><br>
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Data Diri</font>
                      </div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Nama Depan</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Rokhmah</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Nama Belakang</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Vira</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Tempat Lahir</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>29 Februari 2000</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Tanggal Lahir</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Pasuruan</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Jenis Kelamin</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Female</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Status Pernikahan</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Belum Menikah</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Pekerjaan</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Mahasiswa</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Pendidikan</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>SHS</p><br>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Jenis ID</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>vip</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">No ID</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>987654</p>
                      </div>
                    </div>

                    <div class="col-md-6" style="border-left: 1px solid #e0e0e0;">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Informasi Orang Terdekat</font>
                      </div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Nama Depan</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Rokhmah</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Nama Belakang</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Vira</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Tempat Lahir</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Pasuruan</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Tanggal Lahir</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>29 Februari 2000</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Jenis Kelamin</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Female</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">Status Pernikahan</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>-</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Jenis ID</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Relation</p>
                      </div>
                      <div class="col-md-3" style="border-left: 1px solid #e0e0e0;"><br>
                        <font style="font-size: 16px;">No ID</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>123456</p>
                      </div>
                      <div class="col-md-12"><br></div>
                      <div class="col-md-12"><br></div>
                    </div>

                    <div class="col-md-12"><br></div>

                    <div class="col-md-6">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Alamat & Kontak yang bisa dihubungi </font>
                      </div>
                      <div class="col-md-4"><br>
                        <font style="font-size: 16px;">Nama Jalan</font>
                      </div>
                      <div class="col-md-8"><br>
                        <p>Jl. Hamid Rusdi</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Kota/Kab</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Kota Malang</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Provinsi</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Jawa Timur</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Kode Pos</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>KODEKODE</p>
                      </div>
                    </div>
                    <div class="col-md-6" style="border-left: 1px solid #e0e0e0;">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Alamat & Kontak Orang Terdekat yang bisa dihubungi</font>
                      </div>
                      <div class="col-md-4"><br>
                        <font style="font-size: 16px;">Nama Jalan</font>
                      </div>
                      <div class="col-md-8"><br>
                        <p>Jl. Hamid Rusdi</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Kota/Kab</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Kota Malang</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Provinsi</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Jawa Timur</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Kode Pos</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>kODEKODE</p>
                      </div>
                    </div>

                    <div class="col-md-12"><br></div>

                    <div class="col-md-6">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Kondisi Kesehatan Umum</font>
                      </div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Golongan Darah</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>O</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Alergi (bila ada)</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Air</p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-3"><br>
                        <font style="font-size: 16px;">Riwayat Penyakit</font>
                      </div>
                      <div class="col-md-3"><br>
                        <p>Kanker</p>
                      </div>
                    </div>
                </div>
              </div>

              <div id="pemeriksaan_klinis" class="tab-pane fade">
                <?php foreach ($info_klinis->result() as $info) { ?>
                  <div class="col-md-8">
                    <font style="font-weight: bold; font-size: 16px;">Pemeriksaan Klinis Umum</font>
                    <span>(Terakhir Update <?php echo $info->tanggal_periksa ?>)</span><br><br>
                  </div>
                  <div class="col-md-4">
                    <div class="col-md-2"><b>Filter:</b></div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <select id="filter_tanggal_pemeriksaan_klinis" class="form-control">
                          <div class="fa fa-calendar"></div>
                          <option value="" disabled selected style="display: none;">Tanggal Pemeriksaan</option>
                          <option value="">Perlihatkan Semua</option>
                          <?php foreach ($tanggal_periksa_penunjang->result() as $tgl) { ?>
                            <option value="<?php echo $tgl->tanggal_periksa ?>"><?php echo $tgl->tanggal_periksa ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12"><br>
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Pemeriksaan Ekstra Oral</font>
                      </div>
                      <div class="col-md-6"><br>
                        <p>Wajah</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->wajah ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Bibir</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->wajah ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-12"><br>
                        <p>Kelenjar Getah Bening</p>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-6"><br>
                          <p>Submandibula Kanan</p>
                        </div>
                        <div class="col-md-6"><br>
                          <p><b><?php echo $info->submandibula_kanan ?></b></p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-6"><br>
                          <p>Submandibula Kiri</p>
                        </div>
                        <div class="col-md-6"><br>
                          <p><b><?php echo $info->submandibula_kiri ?></b></p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-6"><br>
                          <p>Lainnya</p>
                        </div>
                        <div class="col-md-6"><br>
                          <p><b><?php echo $info->lainnya ?></b></p>
                        </div>
                      </div>
                      <div class="col-md-6"><br>
                        <p>Kelainan Lainnya</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->submandibula_kanan ?></b></p>
                      </div>
                    </div>

                    <div class="col-md-6" style="border-left: 1px solid #e0e0e0;">
                      <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 16px;">Pemeriksaan Intra Oral</font>
                      </div>
                      <div class="col-md-6"><br>
                        <p>Gingiva</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->gingiva ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Debris</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->debris ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Stain</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->stain ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Kalkulus</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->kalkulus ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Mukosa</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->mukosa ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Palatum</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->palatum ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Lidah</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->lidah ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Dasar Mulut</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->dasar_mulut ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Hubungan Rahang</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->hubungan_rahang ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Kelainan Gigi Geligi</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b><?php echo $info->kelainan_gigi_geligi ?></b></p>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                      <div class="col-md-6"><br>
                        <p>Lainnya</p>
                      </div>
                      <div class="col-md-6"><br>
                        <p><b>Tidak Ada</b></p>
                      </div>
                    </div>
                    <div class="col-md-12"><br></div>

                    <div class="col-md-12"><br>
                      <div class="col-md-8">
                        <font style="font-weight: bold; font-size: 16px;">Pemeriksaan Klinis Khusus</font>
                        <span>(Terakhir Update <?php echo $info->tanggal_periksa ?>)</span><br><br>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-2"><b>Filter:</b></div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <select id="filter_t" class="form-control">
                              <div class="fa fa-calendar"></div>
                              <option value="" disabled selected style="display: none;">Tanggal Pemeriksaan</option>
                              <option>Perlihatkan Semua</option>
                              <?php foreach ($tanggal_periksa_penunjang->result() as $tgl) { ?>
                                <option value="<?php echo $tgl->tanggal_periksa ?>"><?php echo $tgl->tanggal_periksa ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <br><textarea name="keterangan" class="form-control" placeholder="Keterangan" readonly><?php echo $info->keterangan ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>

              <div id="pemeriksaan_penunjang" class="tab-pane fade">
                <?php foreach ($info_penunjang->result() as $info) : ?>
                  <div class="col-md-12"><br>
                    <div class="col-md-4">
                      <font style="font-weight: bold; font-size: 16px;">Radiologi</font>
                      <span>(Terakhir Update <?php echo $info->tanggal_periksa ?>)</span><br><br>
                    </div>
                    <div class="col-md-4">
                      <div class="col-md-2"><b>Filter:</b></div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select id="filter_t" class="form-control">
                            <div class="fa fa-calendar"></div>
                            <option value="" disabled selected style="display: none;">Tanggal Pemeriksaan</option>
                            <option>Perlihatkan Semua</option>
                            <?php foreach ($tanggal_periksa_penunjang->result() as $tgl) { ?>
                              <option value="<?php echo $tgl->tanggal_periksa ?>"><?php echo $tgl->tanggal_periksa ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="col-md-6">
                        <form value="<?php echo $info->radiologi ?>">
                          <br><input type="radio" value="" name="" readonly <?= $info->radiologi == 'Sefalometri' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Transcranial,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?>><span> Panoramik</span>
                          <input type="radio" name="" value="" style="margin-left: 15px;" readonly <?= $info->radiologi == 'Panoramik' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Transcranial,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?>><span> Sefalometri</span>
                          <input type="radio" name="" value="" style="margin-left: 15px;" readonly <?= $info->radiologi == 'Panoramik' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri,Dental Regio' ? 'disabled' : null ?> <?= $info->radiologi == 'Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?>><span> Trannscranial<span>
                              <input type="radio" name="" value="" style="margin-left: 15px;" readonly <?= $info->radiologi == 'Panoramik' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri' ? 'disabled' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Transcranial' ? 'disabled' : null ?> <?= $info->radiologi == 'Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Panoramik,Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Sefalometri,Transcranial,Dental Regio' ? 'checked' : null ?> <?= $info->radiologi == 'Transcranial,Dental Regio' ? 'checked' : null ?>><span> Dental, Regio<span>
                        </form>
                      </div>
                      <div class="col-md-2">
                        <br><textarea name="elemen_gigi" class="form-control" rows="1" readonly disabled><?php echo $info->gigi ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-8">
                      <div class="form-group">
                        <br><textarea name="keterangan" class="form-control" placeholder="Keterangan" readonly disabled><?php echo $info->keterangan_radiologi ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <br><button style="height: 35px; width: 150px; background-color: #f40049; color: white; border-radius: 5px;" class="btn btn-anim"><b>&nbsp;&nbsp;Download Foto</b></button>
                    </div>

                    <div class="col-md-4">
                      <br><br>
                      <font style="font-weight: bold; font-size: 16px;">Laboratorium</font>
                      <span>(Terakhir Update <?php echo $info->tanggal_periksa ?>)</span><br><br>
                    </div>
                    <div class="col-md-4">
                      <br><br>
                      <div class="col-md-2"><b>Filter:</b></div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select id="filter_t" class="form-control">
                            <div class="fa fa-calendar"></div>
                            <option value="" disabled selected style="display: none;">Tanggal Pemeriksaan</option>
                            <option>Perlihatkan Semua</option>
                            <?php foreach ($tanggal_periksa_penunjang->result() as $tgl) { ?>
                              <option value="<?php echo $tgl->tanggal_periksa ?>"><?php echo $tgl->tanggal_periksa ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-8">
                      <div class="col-md-4">
                        <form>
                          <br><input type="radio" name="" <?= $info->laboratorium == 'Darah Rutin' ? 'checked' : null ?> <?= $info->laboratorium != 'Darah Rutin' ? 'disabled' : null ?> readonly><span> Darah Rutin</span>
                          <input type="radio" name="" style="margin-left: 15px;" readonly <?= $info->laboratorium == 'Darah Rutin' ? 'disabled' : null ?> <?= $info->laboratorium != 'Darah Rutin' ? 'checked' : null ?>><span> Lainnya</span>
                        </form>
                      </div>
                      <div class="col-md-4">
                        <form>
                          <br><input type="text" name="" class="form-control" readonly value="<?= $info->laboratorium != 'Darah Rutin' ? $info->laboratorium : null ?>">
                        </form>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <br><textarea name="keterangan" class="form-control" placeholder="Keterangan" readonly><?php echo $info->keterangan_laboratorium ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <br><button style="height: 35px; width: 150px; background-color: #f40049; color: white; border-radius: 5px;" class="btn btn-anim"><b>&nbsp;&nbsp;Download Foto</b></button>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

              <div id="summary_rekam_medis" class="tab-pane fade">
                <div class="col-md-12"><br>
                  <div class="col-md-1"><b>Filter:</b></div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select id="filter_t" class="form-control">
                        <div class="fa fa-calendar"></div>
                        <option value="" disabled selected style="display: none;">Filter Tanggal</option>
                        <option>Perlihatkan Semua</option>
                        <?php foreach ($tanggal_periksa_penunjang->result() as $tgl) { ?>
                          <option value="<?php echo $tgl->tanggal_periksa ?>"><?php echo $tgl->tanggal_periksa ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select id="filter_p" class="form-control">
                        <option value="" disabled selected style="display: none;">Filter Dokter</option>
                        <option>Perlihatkan Semua</option>
                        <?php foreach ($dokter->result() as $dokter) { ?>
                          <option value="<?php echo $dokter->id_dokter ?>"><?php echo $dokter->nama_dokter ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <table id="all_data_json" data-toggle="table" data-url="<?php echo base_url('Resepsionis/data_booking'); ?>" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc" data-toolbar="#toolbar">
                  <thead>
                    <tr>
                      <th data-sortable="true" data-field="" data-formatter="runningFormatter" data-align="center">No.</th>
                      <th data-sortable="true">Dokter</th>
                      <th data-sortable="true">Tanggal Pemeriksaan</th>
                      <th data-sortable="true">Jam Pemeriksaan</th>
                      <th data-sortable="true" data-align="left">Summary</th>
                    </tr>
                  </thead>


                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($info_summary->result() as $result) : ?>
                      <?php $tgl = date('d F Y', strtotime($result->tanggal_periksa)); ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $result->nama_dokter ?></td>
                        <td><?php echo $result->tanggal_periksa ?></td>
                        <td><?php echo $result->jam_mulai_periksa . ' - ' . $result->jam_selesai_periksa ?></td>
                        <td>
                          <p>
                            <font style="color: #F6336D; font-weight: bold; "> S : </font><span><?php echo $result->keluhan_utama ?></span>
                          </p>
                          <p>
                            <font style="color: #F6336D; font-weight: bold; "> O : </font><span><b>Pemeriksaan Klinis Khusus: </b><?php echo $result->keterangan ?></span>
                            <p><b>Pemeriksaan Penunjang:</b>
                              <ul>
                                <li><b>Radiologi <?php echo $result->radiologi ?>: </b> <?php echo $result->keterangan_radiologi ?></li>
                                <li><b>Laboratorium: </b> <?php echo $result->keterangan_laboratorium ?></li>
                              </ul>
                            </p>
                          </p>
                          <p>
                            <font style="color: #F6336D; font-weight: bold; "> A : </font><span>Gigi <?php echo $result->elemen_gigi ?> <?php echo $result->diagnosis ?></span>
                          </p>
                          <p>
                            <font style="color: #F6336D; font-weight: bold; "> P : </font><span><?php echo $result->layanan ?> <?php echo $result->elemen_gigi ?>(<?php echo $result->detail_layanan ?>)</span>
                          </p>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

              <div id="odontogram" class="tab-pane fade">
                <?php foreach ($info_odontogram->result() as $info) : ?>
                  <div class="col-md-8">
                    <font style="font-weight: bold; font-size: 16px;">Odontogram</font>
                    <span>(Terakhir Update <?php echo $info->tanggal_periksa ?>)</span><br><br>
                  </div>
                  <div class="col-md-4">
                    <div class="col-md-2"><b>Filter:</b></div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <select id="filter_t" class="form-control">
                          <div class="fa fa-calendar"></div>
                          <option value="" disabled selected style="display: none;">Tanggal Pemeriksaan</option>
                          <option value="">Perlihatkan Semua</option>
                          <?php foreach ($tanggal_periksa_penunjang->result() as $tgl) { ?>
                            <option value="<?php echo $tgl->tanggal_periksa ?>"><?php echo $tgl->tanggal_periksa ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                <?php endforeach;  ?>
              </div>

              <div id="metode_pembayaran" class="tab-pane fade">
                <?php foreach ($info_bayar->result() as $info) : ?>
                  <div class="col-lg-12"><br>
                    <div class="col-md-8">
                      <div class="col-lg-4">
                        <font style="font-size: 16px;">Jenis Pembayaran</font>
                      </div>
                      <div class="col-lg-8">
                        <font><?= $info->nama_metode; ?></font>
                      </div>
                    </div>
                    <div class="col-md-6"></div>
                  </div>
                  <?php if ($info->nama_metode == 'Asuransi') { ?>
                    <div class="col-md-12"><br>
                      <div class="col-md-8">
                        <div class="col-md-12">
                          <font style="font-weight: bold; font-size: 16px;">Detail Asuransi</font>
                        </div>
                        <div class="col-md-4"><br>
                          <font style="font-size: 16px;">Provider Asuransi</font>
                        </div>
                        <div class="col-md-2"><br>
                          <p><?php echo $info->provider ?></p>
                        </div>
                        <div class="col-md-4"><br>
                          <font style="font-size: 16px;">Kategori Asuransi</font>
                        </div>
                        <div class="col-md-2"><br>
                          <p><?php echo $info->kategori_asuransi ?></p>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-4"><br>
                          <font style="font-size: 16px;">Nomor Kartu Asuransi</font>
                        </div>
                        <div class="col-md-8"><br>
                          <p><?php echo $info->nomor_asuransi ?></p>
                        </div>
                        <div class="col-md-12"><br></div>
                        <div class="col-md-3">
                          <font style="font-size: 16px;">Foto Kartu Asuransi</font>
                        </div>
                        <div class="col-md-3" style="top:-23px; margin-left: 50px;"><br><button style="height: 35px; width: 130px; background-color: #f40049; color: white; border-radius: 5px;" class="btn btn-anim"><span style="font-weight: bold;">Download Foto</span></button></div>
                        <div class="col-md-1"><br></div>
                      </div>
                    </div>
                  <?php } ?>

                <?php endforeach;  ?>
              </div>
            </div>
          </div>


									
								</div>

							<div id="proses_bayar" class="tab-pane fade" style="margin-left: -20px">
								<div class="col-md-12">
									<div class="col-lg-4">
										<b>Diagnosa Dokter</b>
									</div>
									<div class="col-lg-8">
										<div class="form-group">
											<textarea name="diagnosa" class="form-control" style="resize:none;width:600px;height:200px;" rows="10" required readonly><?php echo $result->diagnosis; ?></textarea>
										</div>
									</div>
									<div class="col-lg-10">
										<table id="all_data_json" class="table">
											<thead>
												<tr>
													<th data-sortable="true">Elemen Gigi</th>
													<th data-sortable="true">Tindakan</th>
													<th data-sortable="true">Jumlah</th>
													<th data-sortable="true">Harga Satuan</th>
													<th data-sortable="true">Subtotal</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>46</td>
													<?php foreach ($layanan->result() as $key) : ?>
													<td><?php echo $key->layanan ?></td>
													<td><?php echo $key->jumlah ?>X</td>
													<td>Rp. <?php echo $key->harga ?></td>
													<td>Rp. <?= $key->subtotal ?></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-lg-10" style="background: #ccc; color: #000; padding: 7px 0 6px 10px;">
										<b>TOTAL : <p id="txttot" style="float: right; color: #000; margin: 0 20px 0 0;">Rp. <?= $key->subtotal ?></p></b>
									</div>
									<div class="col-lg-12"></div>
									<div class="col-lg-2" style="margin: 30px 0 10px 0;">
										Discount / Coupon :
									</div>
									<div class="col-lg-4" style="margin: 20px 0 10px 0;">
										<div class="form-group">
											<select class="form-control" name="diskon" id="diskon">
												<?php foreach ($diskon_pil->result() as $diskp) : ?>
													<option value="" disabled selected style="display: none;"><?= $diskp->nama_diskon  ?></option>
												<?php endforeach; ?>
												<?php foreach ($diskon->result() as $disk) : ?>
													<option value="<?= $disk->id_diskon ?>"><?= $disk->nama_diskon ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>

									<div class="col-lg-12"></div>

									<div class="col-lg-10" style="background: #f40049; color: #fff; padding: 7px 0 6px 10px;">
										<b style="padding: 5px 0 5px 0;"> GRAND TOTAL :
										<p style="float: right; color: #fff; margin-bottom: 0;">Rp. <input type="text" value="" name="grandtotal" id="grandtotal" style="float:right; color:#fff; margin-left: 3px;  width: 65px; border: 0px; background: #f40049;"></p></b>
										<input type="hidden" name="id_rekam_medis" value="$result->id_rekam_medis">
									</div>
									<?php endforeach; ?>

									<div class="col-lg-12">
										<button data-toggle="tab" href="#metode_pembayaran" type="button" class="btn salmon stil2" style="float: left;margin-top: 3%; background-color:#F40049; color:white">Kembali</button>
										<button type="submit" class="btn salmon stil3" style="float: right;margin-top: 3%; background-color:#F40049; color:white">Proses</button>
									</div>		
								</form>
								
								</div>
							</div>
							<?php endforeach ;?>
						</div>
					</div>

					

				</div>
			</div>
		</div> 
	</div>
</div>

<script type="text/javascript">
	window.onload = function() {
		var tot = parseInt(document.getElementById('subtotal').value);
		var x = parseInt(document.getElementById('cmb').value);
		var disk = parseInt(document.getElementById('txt').value);
		var hitung = (disk * tot) / 100;
		var jumlah = tot - hitung;

		// document.getElementById('grand').value = jumlah;
		if (!isNaN(jumlah)) {
			document.getElementById("hasil").innerHTML = jumlah;
		}
	}
</script>

<script type="text/javascript">
	window.onload = function() {
		var hasil;
		hasil = 1 + 3 + 5 + 7 + 9;
		document.getElementById("tempat_hasil").innerHTML = hasil;
	}
</script>
<script>
	$(document).ready(function() {
		grandtotal();
		$('#diskon').change(function() {
			// let a = $(this).val();
			// console.log(a);
			grandtotal();
		});
	});

	function grandtotal() {
		var diskon = $('#diskon').val();
		$.ajax({
			url: "<?= base_url('klinik/grandtotal/' . $result->id_rekam_medis) ?>",
			data: {
				diskon: diskon
			},
			success: function(data) {
				// console.log(data);
				$('#grandtotal').val(data);
			}
		});
	}
</script>