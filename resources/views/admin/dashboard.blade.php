@extends('include.header')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
	#map {
		height: 75vh;
		width: 100%;
	}
</style>
<div class="row sales-cards">
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-primary flex-fill mb-4">
			<div class="mb-2">
				
			</div>
			<h3 class="counters" data-count="{{ $total_faqs }}">{{ $total_faqs }}</h3>
			<p>TOTAL FAQ</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-secondary flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_blogs }}">{{ $total_blogs }}</h3>
			<p>TOTAL BLOG</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-success flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_services }}">{{ $total_services }}</h3>
			<p>TOTAL SERVICE</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-info flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_projects }}">{{ $total_projects }}</h3>
			<p>TOTAL PROJECT</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-info flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_inquiries }}">{{ $total_inquiries }}</h3>
			<p>TOTAL INQUIRY</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-success flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_reasons }}">{{ $total_reasons }}</h3>
			<p>TOTAL REASON</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-secondary flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_pdfs }}">{{ $total_pdfs }}</h3>
			<p>TOTAL PDF</p>
		</div>
	</div>
	<div class="col-xl-12 col-sm-12 col-12 d-flex">
		<div id="map"></div>
	</div>
</div>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
	var page_title = "Dashboard";
	const locations = <?php echo $locations; ?>;
	const map = L.map('map').setView([locations[0].lat, locations[0].lng], 12);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '© OpenStreetMap contributors'
	}).addTo(map);

	const myIcon = L.icon({
		iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
		iconSize:     [40, 40],
		iconAnchor:   [20, 40],
		popupAnchor:  [0, -35]
	});

	locations.forEach(loc => {
		L.marker([loc.lat, loc.lng], { icon: myIcon }).addTo(map).bindPopup(`<strong>${loc.name}</strong>`);
	});
</script>
@endsection
