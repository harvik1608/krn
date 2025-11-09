@extends('include.header')
@section('content')
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
</div>
<script>
	var page_title = "Dashboard";
</script>
@endsection
