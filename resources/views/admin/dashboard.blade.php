@extends('include.header')
@section('content')
<div class="row sales-cards">
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-primary flex-fill mb-4">
			<div class="mb-2">
				<img src="{{ asset('assets/img/icons/total-sales.svg') }}" alt="img">
			</div>
			<h3 class="counters" data-count="10000.00">10,000+</h3>
			<p>No of Total Sales</p>
			<i data-feather="rotate-ccw" class="feather-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"></i>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-secondary flex-fill mb-4">
			<div class="mb-2">
				<img src="{{ asset('assets/img/icons/purchased-earnings.svg') }}" alt="img">
			</div>
			<h3 class="counters" data-count="800.00">800+</h3>
			<p>No of Total Sales</p>
			<i data-feather="rotate-ccw" class="feather-16" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"></i>
		</div>
	</div>
</div>
<script>
	var page_title = "Dashboard";
</script>
@endsection
