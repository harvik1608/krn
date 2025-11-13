<?php 
	use App\Models\Service;

	if (!function_exists('preview')) {
	    function preview($data)
	    {
	        echo "<pre>";
	        print_r ($data);
	        exit;
	    }
	}

	if (!function_exists('services')) {
	    function services()
	    {
	        $services = Service::select("id","name","slug")->where("is_active",1)->get();
	        return $services;
	    }
	}

	if (!function_exists('format_date')) {
	    function format_date($date)
	    {
	        return date('d M, Y',strtotime($date));
	    }
	}