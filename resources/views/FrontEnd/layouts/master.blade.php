<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    
    <!-- for-meta-tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-meta-tags-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" Department="" />
    <link href="{{asset('css/services.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/ziehharmonika.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/JiSlider.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/subscribe.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">

    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body>
@include('FrontEnd.includes.header')

@yield('content')

@include('FrontEnd.includes.footer')

<div id="loader" class="loader-container">
    <div class="loader">
        <p>Loading...</p>
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner"></div>
    </div>
</div>

<!-- Appointment -->
<div class="modal" id="appointment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Request For Appointment</h4>
            </div>
            <div class="modal-body" style="padding: 50px;">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <form method="POST" id="create_appointment_frm">                        
                            {{ csrf_field() }}
                            <input type="hidden" name="provider_id" value="" id="app_provider_id">
                            <input type="hidden" name="app_patient_id" value="" id="app_patient_id">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="@if(Auth::check()){{Auth::user()->firstname}} {{Auth::user()->lastname}}@endif" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="user_email" placeholder="Email Address" value="@if(Auth::check()){{Auth::user()->email}}@endif" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Visit Type</label>
                                        <select class="form-control" name="visit_type" required>
                                            <option selected disabled>Choose Type</option>
                                            <option value="Video Consultation">Video Consultation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Appointment Date</label>
                                        <div class='input-group date datepicker'>
                                            <input type='text' name="app_date" class="form-control" placeholder="YYYY-MM-DD" required >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                       
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Start At</label>
                                        <div class='input-group date start_timepicker'>
                                            <input type='text' name="start_time" class="form-control" placeholder="HH:MM:AM" required>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class='col-md-6 col-xs-12'>
                                    <div class="form-group">                                        
                                        <label>End At</label>
                                        <select name="end_time" class="form-control select2 dept_select2">
                                            <option value="15 minute">15 Minute</option>
                                            <option value="30 minute">30 Minute</option>
                                            <option value="45 minute">45 Minute</option>
                                        </select>
                                    
                                        {{-- <label>End Time</label>
                                        <div class='input-group date end_timepicker'>
                                            <input type='text' name="end_time" class="form-control" placeholder="HH:MM:PM" required>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Reason</label>
                                        <select name="reason" id="reason" class="form-control">
                                            <option value="">Enter Reson</option>
                                            <option value='Arthritis'>Arthritis</option>
                                            <option value='Asthma and respiratory and sinus infections'>Asthma and respiratory and sinus infections</option>
                                            <option value='Bronchitis'>Bronchitis</option>
                                            <option value='Colds and flu'>Colds and flu</option>
                                            <option value='Diarrhea or constipation'>Diarrhea or constipation</option>
                                            <option value='Infections'>Infections</option>
                                            <option value='Insect bites'>Insect bites</option>
                                            <option value='Pharyngitis'>Pharyngitis</option>
                                            <option value='Conjunctivitis (or pink eye)'>Conjunctivitis (or pink eye)</option>
                                            <option value='Rashes'>Rashes</option>
                                            <option value='Skin rashes, infections, or inflammation'>Skin rashes, infections, or inflammation</option>
                                            <option value='Sore throats'>Sore throats</option>
                                            <option value='Sprained or strained bones'>Sprained or strained bones</option>
                                            <option value='Bladder infections and UTIs'>Bladder infections and UTIs</option>
                                            <option value='Sports injuries'>Sports injuries</option>
                                            <option value='Other physical injuries'>Other physical injuries</option>
                                            <option value='Vomiting, heartburn, and nausea'>Vomiting, heartburn, and nausea</option>
                                            <option value='Joint aches and pain'>Joint aches and pain</option>
                                            <option value='Headaches'>Headaches</option>
                                            <option value='Small wounds and cuts'>Small wounds and cuts</option>
                                            <option value='Fever'>Fever</option>
                                            <option value='Others'>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Notes</label>
                                        <textarea class="form-control" name="notes" placeholder="Enter Notes..."></textarea>
                                    </div>
                                </div>
                            </div>                            
                            <div class="text-center" style="margin-bottom: 10px;">
                                @if((isset($isDoctor) && $isDoctor))
                                    <button type="button" id="find_doctor_btn" class="btn btn-warning"  data-action="{{route('app_find_patients')}}">
                                    Find Patient
                                     </button>
                                @else
                                    <button type="button" id="find_doctor_btn" class="btn btn-warning"  data-action="{{route('app_find_doctors')}}">
                                    Find Doctor
                                     </button>
                                @endif
                                <button type="submit" id="create_appointment_btn" class="btn btn-success" data-action="{{route('save_appointment_ajax')}}" style="display: none;">Make Appointment</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-12" id="find_provider_block"></div>
                            <div class="col-md-12">
                                <img src="{{url('public/images/front/appointment-page.png')}}" style="padding-top: 60px;" class="img-responsive" alt="Image missing" id="app-modal-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Appointment -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script src="{{asset('/js/jquery-2.2.3.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {"cache-control":"no-cache"},
        beforeSend: function(request) {
            return request.setRequestHeader("X-CSRF-Token", $("meta[name='csrf-token']").attr('content'));
        }
    });
</script>
<script src="{{asset('js/JiSlider.js')}}"></script>
<script>
    $(window).load(function () {
        let $slider = $('#JiSlider');
        if($slider.length){
            $slider.JiSlider({color: '#fff', start: 3, reverse: true,stay:100000}).addClass('ff');
        }else{
            $slider.JiSlider({color: '#fff', start: 0, reverse: false}).addClass('ff');
        }
        $('#JiSlider2').JiSlider({
            color: '#fff',
            start: 0,
            reverse: false,
            controller : false
        }).addClass('ff');
        $('#JiSlider-about').JiSlider({
            color: '#fff',
            start: 0,
            reverse: false,
        }).addClass('ff');
        $('#JiSlider-features').JiSlider({
            color: '#fff',
            start: 0,
            reverse: false,
        }).addClass('ff');
    })
</script>
{{--<script type="text/javascript">--}}

    {{--var _gaq = _gaq || [];--}}
    {{--_gaq.push(['_setAccount', 'UA-36251023-1']);--}}
    {{--_gaq.push(['_setDomainName', 'jqueryscript.net']);--}}
    {{--_gaq.push(['_trackPageview']);--}}

    {{--(function() {--}}
        {{--var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;--}}
        {{--ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';--}}
        {{--var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);--}}
    {{--})();--}}

{{--</script>--}}

<script src="{{asset('js/ziehharmonika.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.ziehharmonika').ziehharmonika({
            collapsible: true,
            prefix: ''
        });
    });
</script>
<!-- stats -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<script type="text/javascript">
    $(function(){
        $("#bars li .bar").each(function(key, bar){
            var percentage = $(this).data('percentage');

            $(this).animate({
                'height':percentage+'%'
            }, 1000);
        })
    })
</script>
<!-- Gallery-Tab-JavaScript -->
<script src="{{asset('js/cbpFWTabs.js')}}"></script>
<script>
    (function() {
        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });
    })();
</script>
<!-- //Gallery-Tab-JavaScript -->
<!-- Swipe-Box-JavaScript -->
<script src="{{asset('js/jquery.swipebox.min.js')}}"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //Swipe-Box-JavaScript -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Health Plus
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <img src="images/g9.jpg" alt=" " class="img-responsive" />
                    <p>Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam,
                        nisi ut aliquid ex ea commodi consequatur? Quis autem
                        vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur, vel illum qui
                        dolorem eum fugiat quo voluptas nulla pariatur.
                        <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                            esse quam nihil molestiae consequatur.</i></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->

<!-- flexSlider -->
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script src="{{asset('js/jarallax.js')}}"></script>
<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>

<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5af43a26227d3d7edc252091/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>

<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/sweetalert.js')}}"></script>
<script type="text/javascript">
    $('.datetimepicker').datetimepicker({
        format: 'YYYY-MM-DD hh:mm A',
        minDate: moment(),
    });

    $('.datepicker input').click(function(event){
       $('.datepicker').data("DateTimePicker").show();
    });    
    $('.datepicker').datetimepicker({
        format: 'YYYY-MM-DD',                
        minDate: moment()        
    });

    $('.start_timepicker input').click(function(event){
       $('.start_timepicker').data("DateTimePicker").show();
    });
    $('.start_timepicker').datetimepicker({
        format: 'hh:mm A',        
    });    

    $('.end_timepicker input').click(function(event){
       $('.end_timepicker').data("DateTimePicker").show();
    });
    $('.end_timepicker').datetimepicker({
        format: 'hh:mm A',        
    });    
</script>

<script src="{{asset('js/toastr.min.js')}}"></script>
<script type="text/javascript">
    toastr.options = {        
        'newestOnTop': true,
        'progressBar': true,        
        'preventDuplicates': false,
        'showDuration': '300',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',        
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut'
    };        
</script>

<script src="{{asset('js/custom.js')}}"></script>

<!--End of Tawk.to Script-->
</html>