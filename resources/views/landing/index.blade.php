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
      
      <!-- CSS Core Styles -->
      <link href="landing/css/bootstrap.min.css" rel="stylesheet">
      <link href="landing/css/animate.min.css" rel="stylesheet">
      <link href="landing/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      
      
      <!-- Custom styles for this template -->
      <link href="landing/css/style.css" rel="stylesheet">
      <link href="landing/css/custom.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div class="preloader" id="preloader"><span class="preloader-gif"></span></div>
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
               <img src="landing/img/imagen-central.png" alt="dashboard" class="img-responsive">
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
      <section id="portafolio" class="gray-section team ">
         <div class="container">
            <div class="row m-b-lg">
               <div class="col-lg-12 text-center">
                  <div class="navy-line"></div>
                  <h1>PORTAFOLIO</h1>
                  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
               </div>
            </div>
            <div class="row wow slideInRight" style="margin-bottom: 40px;">
               <ul id="filters" class="clearfix">
                  <li><span class="filter active" data-filter=".tag1,.tag2,.tag3,.tag4,.tag5">Todos</span></li>
                  <li><span class="filter" data-filter=".tag1">Ecologia</span></li>
                  <li><span class="filter" data-filter=".tag2">Tag2</span></li>
                  <li><span class="filter" data-filter=".tag3">Mercado</span></li>
                  <li><span class="filter" data-filter=".tag4">Tag4</span></li>
                  <li><span class="filter" data-filter=".tag5">Tag5</span></li>
               </ul>
               <div style=" height: 400px;vertical-align:middle;">
                  <div id="portfoliolist">
                     <a href="#">
                        <div class="portfolio tag1 tag3 tag5" data-cat="tag1 tag3 tag5">
                           <div class="portfolio-wrapper">
                              <img src="landing/img/brezza-energy.jpg" class="img-responsive" alt="producto1">
                              <div class="label">
                                 <div class="label-text" >
                     <a class="text-title" style="color:white !important">Brezza Energy</a> 
                     <span class="text-category" style="color:white !important"><a href="#">Ecologia </a><a href="#">Mercado </a><a href="#">Tag5 </a></span>
                     </div>
                     <div class="label-bg"> </div>
                     </div>
                     </div>
                     </div>
                     </a>
                     <a href="#">
                        <div class="portfolio tag2 tag4 tag5" data-cat="tag2 tag4 tag5">
                           <div class="portfolio-wrapper">
                              <img src="landing/img/sector-agroalimentario.jpg" class="img-responsive" alt="producto1">
                              <div class="label">
                                 <div class="label-text" >
                     <a class="text-title" style="color:white !important">Sector Agroalimentario</a> 
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
                  <p align="left"><img src="landing/img/quienessomos.jpg" alt="Brezza"  class="img-responsive"></p>
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
                                    <p align=justify>Red de investigadores formados en áreas multidisciplinarias que pone
en marcha el ingenio y la integración innovadora, para cooperar y apalancar la
transición de nuestras sociedades a modos de vida y de negocios más sustentables.</p>
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
                              <p align=justify>Destacar en la generación de productos y servicios innovadores que
dinamicen diferentes nichos de mercado, en torno a los nuevos modos de
participación social, la nueva arquitectura financiera mundial y el desarrollo local.</p>
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
                              <p align=justify>Facilitar el intercambio de información y la integración entre
personas, organizaciones y mercados, a través del diseño y puesta en
funcionamiento de innovaciones tecnológicas que contribuyan a su vez con el
incremento de la eficiencia, el mejoramiento continuo, la transparencia y la calidad
de vida en los segmentos y espacios hacia los que enfocamos nuestra cooperación.</p>
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
                              <p align=justify>La organización responde a criterios de
estructura circular, por comité y en red, según la dinámica de sus requerimientos.</p>
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" id="btnmodal12" data-target="#myModal2">Organigrama</button>
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
                                          <p align=justify>El equipo de Brezza Project, s.a., trabaja en torno a una estructura matricial
por cuanto todos los departamentos participan en el ciclo de vida de los proyectos y
productos de la corporación. La organización responde también a criterios de
estructura circular, por comité y en red, según la dinámica de sus requerimientos.</p>
                                          <img class="img-responsive" alt="Organigrama" title="Organigrama" src="landing/img/Organigrama.png">
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" id="closemodal12"  class="btn btn-primary" data-dismiss="modal">Cerrar</button>
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
                        <iframe id="cartoonVideo" width="560" height="315" src="https://www.youtube.com/embed/qfNmyxV2Ncw" frameborder="0" allowfullscreen></iframe> frameborder="0" allowfullscreen></iframe>
                     </figure>
                  </div>
                  <div class="modal-footer">
                     <button type="button"  class="btn btn-white" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
               </div>
            </div>
         </div>
         
      </section>
      <section id="rellenob" display="none">
         <div class="row" >
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
         <div class="timeline wow zoomIn">
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
         <div class="events-content ">
            <ol style="list-style:none;">
               <li class="selected" data-date="28/01/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <img src="landing/img/avatar1.jpg" alt="Paso 1" class="pasos-img">
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
         
   </body>
   
</html>