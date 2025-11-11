@extends('include.header')
@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>General Settings</h4>
        <h6>(<span class='mandadory'>*</span>) indicates required field.</h6>
    </div>
</div>
<form action="{{ route('admin.submit.general-settings') }}" method="POST" enctype="multipart/form-data" id="mainForm">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>General Settings</h4>
                </div>
                <div class="card-body profile-body">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_name" id="app_name" value="{{ isset($app_name) ? $app_name : '' }}" autofocus />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Email<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_email" id="app_email" value="{{ isset($app_email) ? $app_email : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Phone<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_phone" id="app_phone" value="{{ isset($app_phone) ? $app_phone : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Theme Color<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_theme_color" id="app_theme_color" value="{{ isset($app_theme_color) ? $app_theme_color : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Founder Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_founder_name" id="app_founder_name" value="{{ isset($app_founder_name) ? $app_founder_name : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">App. Helpline No.<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_helpline_no" id="app_helpline_no" value="{{ isset($app_helpline_no) ? $app_helpline_no : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Years of experience<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="year_of_experience" id="year_of_experience" value="{{ isset($year_of_experience) ? $year_of_experience : '' }}" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Positive Feedback (%)<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="positive_feedback" id="positive_feedback" value="{{ isset($positive_feedback) ? $positive_feedback : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">App. Address<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_address" id="app_address" value="{{ isset($app_address) ? $app_address : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">App. Youtube Video URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="app_video" id="app_video" value="{{ isset($app_video) ? $app_video : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Facebook URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="facebook_url" id="facebook_url" value="{{ isset($facebook_url) ? $facebook_url : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Twitter URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="twitter_url" id="twitter_url" value="{{ isset($twitter_url) ? $twitter_url : '' }}" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Linkedin URL<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-control" name="linkedin_url" id="linkedin_url" value="{{ isset($linkedin_url) ? $linkedin_url : '' }}" />
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">About Us Title<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="about_us_title" id="about_us_title">{{ isset($about_us_title) ? $about_us_title : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">About Us<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="about_us" id="about_us">{{ isset($about_us) ? $about_us : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Why Choose Us Title<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="why_choose_us_title" id="why_choose_us_title">{{ isset($why_choose_us_title) ? $why_choose_us_title : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Why Choose Us<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="why_choose_us" id="why_choose_us">{{ isset($why_choose_us) ? $why_choose_us : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Service Title<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="service_title" id="service_title">{{ isset($service_title) ? $service_title : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Service<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="service" id="service">{{ isset($service) ? $service : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Insight Title<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="insight_title" id="insight_title">{{ isset($insight_title) ? $insight_title : '' }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Insight<span class="text-danger ms-1">*</span></label>
                            <textarea class="form-control" name="insight" id="insight">{{ isset($insight) ? $insight : '' }}</textarea>
                        </div>
                        <h2>Banner Image</h2>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(1920x1280)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="banner_image" id="banner_image">
                                @if(isset($banner) && $banner != "")
                                    <img src="{{ asset('uploads/'.$banner) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_banner" value="{{ isset($banner) ? $banner : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>About Us Image</h2>
                        <div class="col-lg-6 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(505x384)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="about_image_1" id="about_image_1">
                                @if(isset($about_image_1) && $about_image_1 != "")
                                    <img src="{{ asset('uploads/'.$about_image_1) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_about_image_1" value="{{ isset($about_image_1) ? $about_image_1 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(383x290)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="about_image_2" id="about_image_2">
                                @if(isset($about_image_2) && $about_image_2 != "")
                                    <img src="{{ asset('uploads/'.$about_image_2) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_about_image_2" value="{{ isset($about_image_2) ? $about_image_2 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Why Choose Image</h2>
                        <div class="col-lg-3 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(394x300)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="why_choose_1" id="why_choose_1">
                                @if(isset($why_choose_1) && $why_choose_1 != "")
                                    <img src="{{ asset('uploads/'.$why_choose_1) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_why_choose_1" value="{{ isset($why_choose_1) ? $why_choose_1 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(302x300)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="why_choose_2" id="why_choose_2">
                                @if(isset($why_choose_2) && $why_choose_2 != "")
                                    <img src="{{ asset('uploads/'.$why_choose_2) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_why_choose_2" value="{{ isset($why_choose_2) ? $why_choose_2 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(474x351)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="why_choose_3" id="why_choose_3">
                                @if(isset($why_choose_3) && $why_choose_3 != "")
                                    <img src="{{ asset('uploads/'.$why_choose_3) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_why_choose_3" value="{{ isset($why_choose_3) ? $why_choose_3 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(222x351)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="why_choose_4" id="why_choose_4">
                                @if(isset($why_choose_4) && $why_choose_4 != "")
                                    <img src="{{ asset('uploads/'.$why_choose_4) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_why_choose_4" value="{{ isset($why_choose_4) ? $why_choose_4 : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Testimonial Image</h2>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(960x771)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="testimonial" id="testimonial">
                                @if(isset($testimonial) && $testimonial != "")
                                    <img src="{{ asset('uploads/'.$testimonial) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_testimonial" value="{{ isset($testimonial) ? $testimonial : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Video Image</h2>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(1920x1080)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="video" id="video">
                                @if(isset($video) && $video != "")
                                    <img src="{{ asset('uploads/'.$video) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_video" value="{{ isset($video) ? $video : '' }}" />
                                @endif
                            </div>
                        </div>
                        <h2>Contact Us Image</h2>
                        <div class="col-lg-12 mb-3">
                            <div class="file-drop mb-3 text-center">
                                <span class="avatar avatar-sm bg-primary text-white mb-2">
                                    <i class="ti ti-upload fs-16"></i>
                                </span>
                                <h6 class="mb-2"><small>(635x611)</small></h6>
                                <p class="fs-12 mb-0"></p>
                                <input type="file" name="contact_us_image" id="contact_us_image">
                                @if(isset($contact_us_image) && $contact_us_image != "")
                                    <img src="{{ asset('uploads/'.$video) }}" style="width: 100px;height: 100px;" class="img img-thumbnail img-responsive" />
                                    <input type="hidden" name="old_contact_us_image" value="{{ isset($contact_us_image) ? $contact_us_image : '' }}" />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
	var page_title = "General Settings";
    $(document).ready(function(){
        $("#mainForm").submit(function(e){
            e.preventDefault();

            if($("#mainForm").valid()) {
                $.ajax({
                    url: $("#mainForm").attr("action"),
                    type: $("#mainForm").attr("method"),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend:function(xhr){
                        xhr.setRequestHeader("csrf-token", $("input[name=_csrf]").val());
                        $("#mainForm button[type=submit]").html('<div class="spinner-border spinner-border-sm text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>').attr("disabled",true);
                    },
                    success:function(response){
                        if(response.success) {
                            show_toast("Success!",response.message,"success");
                            setTimeout(function(){
                                window.location.reload();
                            },3000);
                        }
                    },
                    error: function(xhr, status, error) {
                        $("#mainForm button[type=submit]").html("SUBMIT").attr("disabled",false);
                        if (xhr.status === 400) {
                            const res = xhr.responseJSON;
                            show_toast("Oops!",res.message,"error");
                        } else {
                            show_toast("Oops!","Something went wrong","error");
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
