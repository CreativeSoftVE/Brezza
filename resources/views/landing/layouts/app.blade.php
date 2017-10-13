<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - @yield('title') </title>

    
    <link rel="stylesheet" href="{!! secure_asset('../css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('../css/app.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('plugins/chosen/chosen.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('plugins/trumbowyg/ui/trumbowyg.min.css') !!}" />

    <link rel="stylesheet" href="{!! asset('../css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('plugins/chosen/chosen.css') !!}" />
    <link rel="stylesheet" href="{!! asset('plugins/trumbowyg/ui/trumbowyg.min.css') !!}" />

      <link href="../landing/css/style.css" rel="stylesheet">
      <link href="../landing/css/custom.css" rel="stylesheet">
      
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <div class="preloader" id="preloader"><span class="preloader-gif"></span></div>
     
       
            <!-- Page wrapper -->
             @include('landing.layouts.lang')
              @include('landing.layouts.front_navigation')

            <!-- Main view  -->
            @yield('content')
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59d080363910e8ac"></script> 
            <!-- Footer -->
            @include('admin.layouts.footer')

        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! secure_asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('js/bootstrap.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('plugins/chosen/chosen.jquery.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('plugins/trumbowyg/trumbowyg.js') !!}" type="text/javascript"></script>

<script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/bootstrap.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('plugins/chosen/chosen.jquery.js') !!}" type="text/javascript"></script>
<script src="{!! asset('plugins/trumbowyg/trumbowyg.js') !!}" type="text/javascript"></script>
 <script src="../landing/js/custom.js"></script>
     
      <script src="//cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
   
      <script src="../landing/js/wow.min.js"></script>
      <script src="{{ asset('js/share.js') }}"></script>
@section('scripts')
@show


<style type="text/css">
    .links-redes-app {
position: fixed;
float: right;
left: 97%;
top: 90px;
margin: 0;
z-index: 1000;
list-style: none;
li {
margin: 0px 0px 10px;
width: 250px;
height: 55px;
float: left;
position: relative;
display: block;
border-color: #000000;
border-width: 0px;
border-radius: 10px;
box-shadow: 0 0 5px rgba(0,0,0,.2);
background-color: #FFFFFF;
}
li:hover {
transform: translateX(-110px);
transition: transform .3s;
}
li a {
display: block;
position: relative;
line-height: 18px;
margin-left: 15px;
color: #0e9aef;
text-decoration: none;
}
.android:hover{
transform: translateX(-170px);
transition: transform .3s;
}
.android:hover a{
color: red;
}
li a span i {
font-size: 35px;
}
li a .icon-telf,li a .text-telf {
position: relative;
}
li a .icon-telf {
top: 10px;
margin-right: 5px;
}
li a .text-telf {
font-size: 20px;
padding: 0px 0px 0px 15px;
top: 5px;
}

@media (max-width:1600px){

left: 96%;
}
@media (max-width:1366px) {

left: 93%;
}
@media (max-width:1240px) {

left: 92%;
}
@media (max-width:1100px){

left: 91%;
}
@media (max-width:1050px){

left: 91%;
}
@media (max-width:870px){

left: 92%;
}
@media (max-width:767px){

display: none;
}
}

</style>
      <script type="text/javascript" >
            $(document).ready(function() {  
               $("#rellenob").hide(); 
                $('button#btnmodal12').click(function() {
                    $('#thenav').css('z-index', '0px');
                    $('.navbar').css('z-index', '0px');
                     $("nav.navbar-default").hide();
                     
                     $("#rellenob").show();
                });
                $('#myModal2').on('hidden.bs.modal', function () {
                       $("nav.navbar-default").show();
                       $("#rellenob").hide();  
                  })
                $('#closemodal12').click(function() {
                     
                });
                     
            });
         </script>
         <style type="text/css">
   /* FOOTER */
   .footer {
   background: none repeat scroll 0 0 white;
   border-top: 1px solid #e7eaec;
   bottom: 0;
   left: 0;
   padding: 10px 20px;
   position: fixed;
   right: 0;
   }
   .footer.fixed_full {
   position: fixed;
   bottom: 0;
   left: 0;
   right: 0;
   z-index: 1000;
   padding: 10px 20px;
   background: white;
   border-top: 1px solid #e7eaec;
   }
   .footer.fixed {
   position: fixed;
   bottom: 0;
   left: 0;
   right: 0;
   z-index: 1000;
   padding: 10px 20px;
   background: white;
   border-top: 1px solid #e7eaec;
   margin-left:  220px;
   }
</style>
<script type="text/javascript">
   $(function() {
   
       $('body').addClass('landing-page');
       $('body').attr('id', 'page-top');
   
       $('body').scrollspy({
           target: '.navbar-fixed-top',
           offset: 80
       });
   
       // Page scrolling feature
       $('a.page-scroll').bind('click', function(event) {
           var link = $(this);
           $('html, body').stop().animate({
               scrollTop: $(link.attr('href')).offset().top - 50
           }, 500);
           event.preventDefault();
           $("#navbar").collapse('hide');
       });
   
       var cbpAnimatedHeader = (function() {
           var docElem = document.documentElement,
                   header = document.querySelector( '.navbar-default' ),
                   didScroll = false,
                   changeHeaderOn = 170;
           function init() {
               window.addEventListener( 'scroll', function( event ) {
                   if( !didScroll ) {
                       didScroll = true;
                       setTimeout( scrollPage, 250 );
                   }
               }, false );
           }
           function scrollPage() {
               var sy = scrollY();
               if ( sy >= changeHeaderOn ) {
                   $(header).addClass('navbar-scroll')
               }
               else {
                   $(header).removeClass('navbar-scroll')
               }
               didScroll = false;
           }
           function scrollY() {
               return window.pageYOffset || docElem.scrollTop;
           }
           init();
   
       })();
   
   
       // Activate WOW.js plugin for animation on scrol
       new WOW().init();
   
   
   });
   
</script>

         
<script type="text/javascript">
// Config box


// Enable/disable fixed sidebar
$('#fixedsidebar').click(function (){
    if ($('#fixedsidebar').is(':checked')){
        $("body").addClass('fixed-sidebar');
        $('.sidebar-collapse').slimScroll({
            height: '100%',
            railOpacity: 0.9
        });

        if (localStorageSupport){
            localStorage.setItem("fixedsidebar",'on');
        }
    } else{
        $('.sidebar-collapse').slimscroll({destroy: true});
        $('.sidebar-collapse').attr('style', '');
        $("body").removeClass('fixed-sidebar');

        if (localStorageSupport){
            localStorage.setItem("fixedsidebar",'off');
        }
    }
});

// Enable/disable collapse menu
$('#collapsemenu').click(function (){
    if ($('#collapsemenu').is(':checked')){
        $("body").addClass('mini-navbar');
        SmoothlyMenu();

        if (localStorageSupport){
            localStorage.setItem("collapse_menu",'on');
        }

    } else{
        $("body").removeClass('mini-navbar');
        SmoothlyMenu();

        if (localStorageSupport){
            localStorage.setItem("collapse_menu",'off');
        }
    }
});

// Enable/disable boxed layout
$('#boxedlayout').click(function (){
    if ($('#boxedlayout').is(':checked')){
        $("body").addClass('boxed-layout');
        $('#fixednavbar').prop('checked', false);
        $('#fixednavbar2').prop('checked', false);
        $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
        $("body").removeClass('fixed-nav');
        $("body").removeClass('fixed-nav-basic');
        $(".footer").removeClass('fixed');
        $('#fixedfooter').prop('checked', false);

        if (localStorageSupport){
            localStorage.setItem("fixednavbar",'off');
        }

        if (localStorageSupport){
            localStorage.setItem("fixednavbar2",'off');
        }

        if (localStorageSupport){
            localStorage.setItem("fixedfooter",'off');
        }


        if (localStorageSupport){
            localStorage.setItem("boxedlayout",'on');
        }
    } else{
        $("body").removeClass('boxed-layout');

        if (localStorageSupport){
            localStorage.setItem("boxedlayout",'off');
        }
    }
});

// Enable/disable fixed footer
$('#fixedfooter').click(function (){
    if ($('#fixedfooter').is(':checked')){
        $('#boxedlayout').prop('checked', false);
        $("body").removeClass('boxed-layout');
        $(".footer").addClass('fixed');

        if (localStorageSupport){
            localStorage.setItem("boxedlayout",'off');
        }

        if (localStorageSupport){
            localStorage.setItem("fixedfooter",'on');
        }
    } else{
        $(".footer").removeClass('fixed');

        if (localStorageSupport){
            localStorage.setItem("fixedfooter",'off');
        }
    }
});

// SKIN Select
$('.spin-icon').click(function (){
    $(".theme-config-box").toggleClass("show");
});

// Default skin
$('.s-skin-0').click(function (){
    $("body").removeClass("skin-1");
    $("body").removeClass("skin-2");
    $("body").removeClass("skin-3");
});

// Blue skin
$('.s-skin-1').click(function (){
    $("body").removeClass("skin-2");
    $("body").removeClass("skin-3");
    $("body").addClass("skin-1");
});

// Inspinia ultra skin
$('.s-skin-2').click(function (){
    $("body").removeClass("skin-1");
    $("body").removeClass("skin-3");
    $("body").addClass("skin-2");
});

// Yellow skin
$('.s-skin-3').click(function (){
    $("body").removeClass("skin-1");
    $("body").removeClass("skin-2");
    $("body").addClass("skin-3");
});

if (localStorageSupport){
    var collapse = localStorage.getItem("collapse_menu");
    var fixedsidebar = localStorage.getItem("fixedsidebar");
    var fixednavbar = localStorage.getItem("fixednavbar");
    var fixednavbar2 = localStorage.getItem("fixednavbar2");
    var boxedlayout = localStorage.getItem("boxedlayout");
    var fixedfooter = localStorage.getItem("fixedfooter");

    if (collapse == 'on'){
        $('#collapsemenu').prop('checked','checked')
    }
    if (fixedsidebar == 'on'){
        $('#fixedsidebar').prop('checked','checked')
    }
    if (fixednavbar == 'on'){
        $('#fixednavbar').prop('checked','checked')
    }
    if (fixednavbar2 == 'on'){
        $('#fixednavbar2').prop('checked','checked')
    }
    if (boxedlayout == 'on'){
        $('#boxedlayout').prop('checked','checked')
    }
    if (fixedfooter == 'on') {
        $('#fixedfooter').prop('checked','checked')
    }
}

</script>
</body>
</html>
