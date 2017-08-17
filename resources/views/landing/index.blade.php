<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Add Your favicon here -->
      <!--<link rel="icon" href="landing/img/favicon.ico">-->
      <title>Brezza Project - Integrate y prospera</title>
      <!-- Bootstrap core CSS -->
      <link href="landing/css/bootstrap.min.css" rel="stylesheet">
      <!-- Animation CSS -->
      <link href="landing/css/animate.min.css" rel="stylesheet">
      <link href="landing/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Custom styles for this template -->
      <link href="landing/css/style.css" rel="stylesheet">
      <link href="landing/css/custom.css" rel="stylesheet">
   </head>
   <body id="page-top">
      @include('landing.layouts.navigation')
      <!--SLIDER Kev-->
      <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#inSlider" data-slide-to="0" class="active"></li>
            <li data-target="#inSlider" data-slide-to="1"></li>
            <li data-target="#inSlider" data-slide-to="2"></li>
            <li data-target="#inSlider" data-slide-to="3"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="container">
                  <div class="carousel-caption">
                     <!-- <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio
                        </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                        <a class="caption-link" href="#" role="button">Inspinia Theme</a>
                        </p>-->
                  </div>
                  <div class="carousel-image wow slideInRight">
                     <img src="landing/img/2-2.png" alt="laptop"/>
                  </div>
               </div>
               <!-- Set background for slide in css -->
               <div class="header-back one"></div>
            </div>
            <div class="item">
               <div class="container">
                  <div class="carousel-caption blank">
                     <!--   <h1>We create meaningful <br/> interfaces that inspire.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                  </div>
                  <div class="carousel-image wow slideInRight">
                     <img src="landing/img/1.png" alt="laptop"/>
                  </div>
               </div>
               <!-- Set background for slide in css -->
               <div class="header-back two"></div>
            </div>
            <div class="item">
               <div class="container">
                  <div class="carousel-caption blank">
                     <!--   <h1>We create meaningful <br/> interfaces that inspire.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                  </div>
                  <!--   <div class="carousel-image wow slideInRight">
                     <img src="landing/img/1.png" alt="laptop"/> 
                     </div>-->
               </div>
               <!-- Set background for slide in css -->
               <div class="header-back three"></div>
            </div>
            <div class="item">
               <div class="container">
                  <div class="carousel-caption blank">
                     <!--   <h1>We create meaningful <br/> interfaces that inspire.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                  </div>
                  <!--   <div class="carousel-image wow slideInRight">
                     <img src="landing/img/1.png" alt="laptop"/> 
                     </div>-->
               </div>
               <!-- Set background for slide in css -->
               <div class="header-back four"></div>
            </div>
         </div>
         <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform:  rotate(180deg);"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!--BENEFICIOS Car-->
      <section id="beneficios" class="services gray-section">
         <div class="row benefits">
            <div class="col-sm-3">
               <h2 style="color:#337ab7">Constante innovación</h2>
               <p align=justify>Creamos herramientas de alto valor
                  agregado que potencian la inteligencia de negocios y
                  la cooperación, apuntando a nichos desatendidos
                  dentro de las más novedosas tendencias en
                  economía integrativa, lo que asegura la
                  diferenciación y asertividad dentro de los mercados
                  mundiales.
               </p>
            </div>
            <div class="col-sm-3">
               <h2 style="color:#337ab7">Facilidades de integración</h2>
               <p align=justify>
                  Los intercambios de asistencia técnica
                  y comercial que promovemos responden a metas de
                  avance comprometido en tiempo y espacio, que
                  representan ahorros y ganancias para todos los
                  aliados que se articulan según sus funciones y
                  capacidades específicas.
               </p>
            </div>
            <div class="col-sm-3">
               <h2 style="color:#337ab7">Cooperación efectiva</h2>
               <p align=justify>
                  Los socios de proyectos y aliados
                  estratégicos de Brezza Project, S.A., pueden escoger
                  las formas de cooperación técnica y comercial que
                  más se ajusten a sus necesidades, que van desde la
                  articulación puntual en inversiones temporales hasta
                  la participación estable como socio de proyectos o
                  socio corporativo.         
               </p>
            </div>
            <div class="col-sm-3">
               <h2 style="color:#337ab7">Crecimiento sin límites</h2>
               <p align=justify>
                  El apoyo de diferentes aliados
                  estratégicos debidamente articulados, permite que
                  nuestros productos y servicios tengan una mayor
                  penetración de mercado con menor esfuerzo y
                  recursos en los procesos requeridos, lo cual se
                  traduce en estabilidad y escalabilidad financiera en
                  entornos complejos.
               </p>
            </div>
         </div>
      </section>
      <!--PRODUCTOS Kev-->
      <section  id="productos" class="container features">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="navy-line"></div>
               <h1>Más de 10 productos <br/> <span class="navy"> que cambiarán el mundo</span> </h1>
               <p>Brezza Project, intégrate y prospera</p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 text-center wow fadeInLeft">
               <div>
                  <i class="fa fa-tablet features-icon"></i>
                  <h2><a href="#" class="btn btn-primary">Aplicaciones</a> </h2>
                  <p>Desarrolladas por gente joven y con un mercado en continuo crecimiento</p>
               </div>
               <div class="m-t-lg">
                  <i class="fa fa-user features-icon"></i>
                  <h2><a href="#" class="btn btn-primary">Responsabilidad Social</a></h2>
                  <p>Ya no es una moda o tendencia, sino es un factor decisivo para el desarrollo sostenible de un país</p>
               </div>
            </div>
            <div class="col-md-6 text-center  wow zoomIn">
               <img src="landing/img/perspective.png" alt="dashboard" class="img-responsive">
            </div>
            <div class="col-md-3 text-center wow fadeInRight">
               <div>
                  <i class="fa fa-connectdevelop features-icon"></i>
                  <h2><a href="#" class="btn btn-primary">Franquicias</a></h2>
                  <p>Una de las claves para llevar con exito el negocio es el trabajo en equipo</p>
               </div>
               <div class="m-t-lg">
                  <i class="fa fa-skyatlas features-icon"></i>
                  <h2><a href="#" class="btn btn-primary">Multi-commerce</a></h2>
                  <p>Creando, desarrollando y/o adaptando nuestras estrategias para amoldarnos a los nuevos hábitos</p>
               </div>
            </div>
         </div>
      </section>
      <!--PORTAFOLIO Kev-->
      <section id="portafolio" class="gray-section team">
         <div class="container">
            <div class="row m-b-lg">
               <div class="col-lg-12 text-center">
                  <div class="navy-line"></div>
                  <h1>PORTAFOLIO</h1>
                  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
               </div>
            </div>
            <div class="row" style="margin-bottom: 40px;">
               <ul id="filters" class="clearfix">
                  <li><span class="filter active" data-filter=".tag1,.tag2,.tag3,.tag4,.tag5">Todos</span></li>
                  <li><span class="filter" data-filter=".tag1">Tag1</span></li>
                  <li><span class="filter" data-filter=".tag2">Tag2</span></li>
                  <li><span class="filter" data-filter=".tag3">Tag3</span></li>
                  <li><span class="filter" data-filter=".tag4">Tag4</span></li>
                  <li><span class="filter" data-filter=".tag5">Tag5</span></li>
               </ul>
               <div style=" height: 400px;vertical-align:middle;">
                  <div id="portfoliolist">
                     <a href="#">
                        <div class="portfolio tag1 tag3 tag5" data-cat="tag1 tag3 tag5">
                           <div class="portfolio-wrapper">
                              <img src="landing/img/avatar1.jpg" class="img-responsive" alt="producto1">
                              <div class="label">
                                 <div class="label-text" >
                     <a class="text-title" style="color:white !important">Producto1</a> 
                     <span class="text-category" style="color:white !important"><a href="#">Tag1 </a><a href="#">Tag3 </a></span>
                     </div>
                     <div class="label-bg"> </div>
                     </div>
                     </div>
                     </div>
                     </a>
                     <a href="#">
                        <div class="portfolio tag2 tag4 tag5" data-cat="tag2 tag4 tag5">
                           <div class="portfolio-wrapper">
                              <img src="landing/img/perspective.png" class="img-responsive" alt="producto1">
                              <div class="label">
                                 <div class="label-text" >
                     <a class="text-title" style="color:white !important">Producto2</a> 
                     <span class="text-category" style="color:white !important"><a href="#">Tag2 </a><a href="#">Tag4 </a><a href="#">Tag5</a></span>
                     </div>
                     <div class="label-bg"> </div>
                     </div>
                     </div>
                     </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
               </div>
            </div>
         </div>
      </section>
      <!--MEDIOS Car-->
      <section id="testimonials" class="navy-section testimonials" style="margin-top: 0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center wow zoomIn">
                  <i class="fa fa-comment big-icon"></i>
                  <h1>
                     Lo que dicen los medios
                  </h1>
                  <br>
                  <div class="testimonials-text">
                     <h5>"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)." </h5>
                  </div>
                  <small>
                  <strong>Adrian Garcia - 12.02.2014</strong>
                  </small>
               </div>
               <div class="btn-bar">
                  <div id="buttons">
                     <a id="prev" href="#">.</a>
                     <a id="next" href="#">.</a> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--WHOARE Car-->
      <section id="team" class="features">
         <div class="container">
            <div class="col-lg-12 text-center">
               <div class="navy-line"></div>
               <h1>Quiénes Somos</h1>
               <p>"Somos mas que un equipo de investigadores,somos economía integrativa"</p>
            </div>
            <div class="col-lg-6 text-center">
               <div class="col-lg-12 text-center m-t-n-lg wow zoomIn">
                  </br>
                  </br>
                  <p align="left"> <img src="landing/img/quienessomos.jpg" alt="Brezza"  class="img-responsive"></p>
               </div>
            </div>
            <div class="col-lg-6 text-center wow fadeInDown">
               <!--FILOSOFIA DE GESTION-->
               <br><br><br><br>
               <div class="accordion">
                  <div class="panel-group" id="accordion1">
                     <div class="panel panel-default">
                        <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" aria-expanded="true" href="#collapseOne1">
                           <div class="panel-heading actives">
                              <h3 class="panel-title">
                                 Brezza Project, S.A.
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                        </a>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse in">
                           <div class="panel-body">
                              <div class="media accordion-inner">
                                 <div class="media-body">
                                    <p><%= @whoare.brezzastory%> </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                              <h3 class="panel-title">
                                 Visión
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p><%= @whoare.vision %> </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                              <h3 class="panel-title">
                                 Misión
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p><%= @whoare.mission %> </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                              <h3 class="panel-title">
                                 Reseña histórica
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <%= image_tag "bz1.png" %>
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><span class="fa fa-play"></span>  Ver Video</button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                 <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Reseña histórica</h4>
                                       </div>
                                       <div class="modal-body">
                                          <iframe id="cartoonVideo" width="560" height="315" src="<%="//www.youtube.com/embed/"+@whoare.final_url %>" frameborder="0" allowfullscreen></iframe>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                              <h3 class="panel-title">
                                 Organización
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseFive1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p><%= @whoare.organigram %></p>
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">Organigrama</button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal2" role="dialog">
                                 <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Organigrama</h4>
                                       </div>
                                       <div class="modal-body">
                                          <p><%= @whoare.organigram %></p>
                                          <%= image_tag @whoare.organigrampic.url, :alt => "Organigrama", :title => "Organigrama", :class => "img-responsive" %>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/#accordion1-->
               </div>
            </div>
         </div>
         <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                     <h4 class="modal-title">Reseña Historica</h4>
                     <small class="font-bold">Intégrate y prospera.</small>
                  </div>
                  <div class="modal-body">
                     <figure align="center">
                        <iframe id="cartoonVideo" width="400" height="250" src="<%="//www.youtube.com/embed/"+@whoare.final_url %>" frameborder="0" allowfullscreen></iframe>
                     </figure>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--PASOS Car  blanco  -->
      <section class="cd-horizontal-timeline" id="Steps">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="navy-line"></div>
               <h1>Participar en nuestros proyectos es muy fácil</h1>
               <p>Cambia tu vida con nuestros innovadores proyectos en 5 simples pasos</p>
            </div>
         </div>
         <div class="timeline">
            <div class="events-wrapper">
               <div class="events col-md-offset-2 col-md-4">
                  <ul style="list-style:none;" >
                     <li><a href="#0" data-date="28/01/2014" class="selected">Paso 1</a></li>
                     <li><a href="#0" data-date="28/02/2014">Paso 2</a></li>
                     <li><a href="#0" data-date="28/03/2014">Paso 3</a></li>
                     <li><a href="#0" data-date="28/04/2014">Paso 4</a></li>
                     <li><a href="#0" data-date="28/05/2014">Paso 5</a></li>
                  </ul>
                  <span class="filling-line" aria-hidden="true"></span>
               </div>
               <!-- .events -->
            </div>
            <ul class="cd-timeline-navigation">
               <li style="list-style-type: none">
                  <a href="#0" class="prev" style="text-decoration:none">Prev
                  <i class="fa fa-chevron-left"></i>
                  </a>
               </li>
               <li style="list-style-type: none">
                  <a href="#0" class="next" style="text-decoration:none">Next
                  <i class="fa fa-chevron-right" style="display: initial"></i>
                  </a>
               </li>
            </ul>
            <!-- .events-wrapper -->
         </div>
         <!-- .timeline -->
         <div class="events-content">
            <ol style="list-style:none;">
               <li class="selected" data-date="28/01/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <%= image_tag @step.img.url, :alt => "Step 1", :class => "pasos-img"%>
                     </div>
                     <div class="col-md-9">
                        <h2>Paso 1. Escoge</h2>
                        <em>Selecciona el proyecto de tu interés</em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/02/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <%= image_tag @step.img1.url, :alt => "Step 2", :class => "pasos-img"%>
                     </div>
                     <div class="col-md-9">
                        <h2>Paso 2. Regístrate</h2>
                        <em>Llena el formulario de registro</em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/03/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <%= image_tag @step.img1.url, :alt => "Step 2", :class => "pasos-img"%>
                     </div>
                     <div class="col-md-9">
                        <h2>Paso 3. Evaluación</h2>
                        <em>Evaluaremos tu solicitud y te contactaremos </em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/04/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <%= image_tag @step.img1.url, :alt => "Step 2", :class => "pasos-img"%>
                     </div>
                     <div class="col-md-9">
                        <h2>Paso 4. Confirmación</h2>
                        <em>Valida tu información y confirma tu participación </em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/05/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <%= image_tag @step.img1.url, :alt => "Step 2", :class => "pasos-img"%>
                     </div>
                     <div class="col-md-9">
                        <h2>Paso 5. Certificado</h2>
                        <em>Recibe tu acreditación y haz el seguimiento correspondiente </em>
                     </div>
                  </div>
                  </br></br>
               </li>
            </ol>
         </div>
         <!-- .events-content -->
      </section>
      <!--CONTACTO Kev-->
      <section id="contact" class="gray-section contact">
         <div class="container">
            <div class="row m-b-lg">
               <div class="col-lg-12 text-center">
                  <div class="navy-line"></div>
                  <h1>Contáctanos</h1>
                  <p>Descripcion de la sección</p>
               </div>
            </div>
            <div class="row m-b-lg">
               <div class="col-lg-3 col-lg-offset-2">
                  <br><br>
                  <address align="center">
                     <strong><span class="navy">Brezza Project, S.A.</span></strong><br/>
                     “Barquisimeto, Lara, Venezuela”<br/>
                     <abbr title="Phone">Teléfono:</abbr> +58 (251) 2317335
                  </address>
                  <br><br>
                  <div class="col-lg-12 text-center">
                     <p class="m-t-sm">
                        Síguenos en nuestras redes sociales
                     </p>
                     <ul class="list-inline social-icon">
                        <li><a target="_blank" href="https://twitter.com/brezzaproject" title="Visitanos en Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="https://es-la.facebook.com/brezzaproject/" title="Visitanos en Facebook" ><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/brezzaproject/" title="Siguenos en Instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div>
                     
                     <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="John Doe">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Correo</label>
                        <input type="text" class="form-control" id="email" placeholder="correo@ejemplo.com">
                     </div>
                     <div class="form-group">
                        <label class="control-label">Mensaje</label>
                        <textarea class="form-control" rows="5" cols="50" style="resize:vertical;" id="comment" placeholder="Escriba su mensaje..."></textarea>
                     </div>
                     <button class="btn btn-primary" type="submit">Enviar</button>
                     
                  </div>
               </div>
            </div>

         </div>
      </section>
      <div class="row gray-section">
         <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
            @include('landing.layouts.foot')
         </div>
      </div>
      <script src="landing/js/jquery-2.1.1.js"></script>
      <script src="landing/js/pace.min.js"></script>
      <script src="landing/js/bootstrap.min.js"></script>
      <script src="landing/js/classie.js"></script>
      <script src="landing/js/cbpAnimatedHeader.js"></script>
      <script src="landing/js/wow.min.js"></script>
      <script src="landing/js/inspinia.js"></script>
      <script src="landing/js/custom.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
   </body>
</html>