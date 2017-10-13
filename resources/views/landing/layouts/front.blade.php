<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <title>Brezza Project - Intégrate y prospera</title>
      <!-- favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
      <link rel="manifest" href="/favicons/manifest.json">
      <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#00257b">
      <meta name="theme-color" content="#ffffff">
      
      <!-- meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Encubamos tu idea de negocio con el mejor equipo de profesionales. Brezza Project, intégrate y prospera ">
      <meta name='keywords' content='brezza, project, proyectos, emprendimiento, innovación, encubadora'>
      <meta name="robots" content="index,follow" />
      <link rel="canonical" href="https://brezza-cecheverria1.c9users.io" />
      <meta name="author" content="CreativeSoft C.A." />
      <meta name="owner" content="Brezza Project S.A." />
      
      <!-- Facebook metadata-->
      <meta property="og:url" content="https://brezza-cecheverria1.c9users.io" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Brezza Project - Intégrate y prospera" />
      <meta property="og:description" content="Esta es una breve descripcion que aparecerá en facebook al ser compartido" />
      <meta property="og:image" content="https://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
      
      <!-- Twitter metadata-->
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:site" content="@brezzaproject" />
      <meta name="twitter:creator" content="@brezzaproject" />
      <meta property="og:url" content="https://brezza-cecheverria1.c9users.io" />
      <meta property="og:title" content="Brezza Project - Intégrate y prospera" />
      <meta property="og:description" content="Esta es una breve descripcion que aparecerá en twitter al ser compartido" />
      <meta name="twitter:image" content="http://graphics8.nytimes.com/images/2012/02/19/us/19whitney-span/19whitney-span-articleLarge.jpg">
      
    
    <link rel="stylesheet" href="{!! secure_asset('../css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('../css/app.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('plugins/chosen/chosen.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('plugins/trumbowyg/ui/trumbowyg.min.css') !!}" />

    <link rel="stylesheet" href="{!! asset('../css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('plugins/chosen/chosen.css') !!}" />
    <link rel="stylesheet" href="{!! asset('plugins/trumbowyg/ui/trumbowyg.min.css') !!}" />

      <!-- CSS Core Styles -->
      <link href="../landing/css/bootstrap.min.css" rel="stylesheet">
      <link href="../landing/css/animate.min.css" rel="stylesheet">
      <link href="../landing/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      
      
      <!-- Custom styles for this template -->
      <link href="../landing/css/style.css" rel="stylesheet">
      <link href="../landing/css/custom.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div class="preloader" id="preloader"><span class="preloader-gif"></span></div>
      @include('landing.layouts.lang')
      @include('landing.layouts.navigation')
      @yield('content')
       
         
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
      <script src="../landing/js/pace.min.js"></script>
      <script src="../landing/js/classie.js"></script>
      <script src="../landing/js/cbpAnimatedHeader.js"></script>
      <script src="../landing/js/wow.min.js"></script>
      <script src="../landing/js/inspinia.js"></script>
      <script src="../landing/js/custom.js"></script>
     
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
   margin-left: $sidebar-width;
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
         </body>
</html>