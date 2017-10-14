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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
      <!-- Custom styles for this template -->
      <link href="landing/css/style.css" rel="stylesheet">
      <link href="landing/css/custom.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div class="preloader" id="preloader"><span class="preloader-gif"></span></div>
      @include('landing.layouts.lang')
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
      <!--  X BENEFICIOS-->
      <section id="beneficios" class="services gray-section">
         <div class="row benefits">
            <div class="col-sm-3">
               <h2 style="color:#337ab7">
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> titulo12 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> titulo1 }}
                  @endif
               </h2>
               <p align=justify>
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> descripcion12 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> descripcion1 }}
                  @endif
               </p>
            </div>
            <div class="col-sm-3">
               <h2 style="color:#337ab7">
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> titulo22 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> titulo2 }}
                  @endif
               </h2>
               <p align=justify>
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> descripcion22 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> descripcion2 }}
                  @endif
               </p>
            </div>
            <div class="col-sm-3">
               <h2 style="color:#337ab7">
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> titulo32 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> titulo3 }}
                  @endif
               </h2>
               <p align=justify>
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> descripcion32 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> descripcion3 }}
                  @endif         
               </p>
            </div>
            <div class="col-sm-3">
               <h2 style="color:#337ab7">
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> titulo42 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> titulo4 }}
                  @endif
               </h2>
               <p align=justify>
                  @if (App::getLocale() == 'en')
                  {{ $benefits -> descripcion42 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $benefits -> descripcion4 }}
                  @endif
               </p>
            </div>
         </div>
      </section>
      <!--  X PRODUCTOS-->
      <section  id="productos" class="container features">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="navy-line"></div>
               <h1>{{ trans('app.titlepro') }} <br/> <span class="navy"> {{ trans('app.titlepro2') }}</span> </h1>
               <p>{{ trans('app.descriptionpro') }}</p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 text-center wow fadeInLeft">
               <div>
                  <i class="fa fa-tablet features-icon"></i>
                  <h2><a href="/categories/1" class="btn btn-primary"> @if (App::getLocale() == 'en')
                     Apps
                     @elseif (App::getLocale() == 'es')
                     {{ $categories[0]->name }}
                     @endif</a> 
                  </h2>
                  <p>Desarrolladas por gente joven y con un mercado en continuo crecimiento</p>
               </div>
               <div class="m-t-lg">
                  <i class="fa fa-user features-icon"></i>
                  <h2><a href="/categories/2" class="btn btn-primary"> @if (App::getLocale() == 'en')
                     Social Responsability
                     @elseif (App::getLocale() == 'es')
                     {{ $categories[1]->name }}
                     @endif</a> 
                  </h2>
                  <p>Ya no es una moda o tendencia, sino es un factor decisivo para el desarrollo sostenible de un país</p>
               </div>
            </div>
            <div class="col-md-6 text-center  wow zoomIn">
               <img src="landing/img/imagen-central.png" alt="dashboard" class="img-responsive">
            </div>
            <div class="col-md-3 text-center wow fadeInRight">
               <div>
                  <i class="fa fa-connectdevelop features-icon"></i>
                  <h2><a href="/categories/3" class="btn btn-primary"> @if (App::getLocale() == 'en')
                     Franchises
                     @elseif (App::getLocale() == 'es')
                     {{ $categories[2]->name }}
                     @endif</a> 
                  </h2>
                  <p>Una de las claves para llevar con exito el negocio es el trabajo en equipo</p>
               </div>
               <div class="m-t-lg">
                  <i class="fa fa-skyatlas features-icon"></i>
                  <h2><a href="/categories/4" class="btn btn-primary"> @if (App::getLocale() == 'en')
                     Multi-commerce
                     @elseif (App::getLocale() == 'es')
                     {{ $categories[3]->name }}
                     @endif</a> 
                  </h2>
                  <p>Creando, desarrollando y/o adaptando nuestras estrategias para amoldarnos a los nuevos hábitos</p>
               </div>
            </div>
         </div>
      </section>
      <!--  X PORTAFOLIO-->
      <section id="portafolio" class="gray-section team ">
         <div class="container">
            <div class="row m-b-lg">
               <div class="col-lg-12 text-center">
                  <div class="navy-line"></div>
                  <h1>{{ trans('app.titleport') }}</h1>
                  <p>{{ trans('app.descriptionport') }}</p>
               </div>
            </div>
            <div class="row wow slideInRight" style="margin-bottom: 40px;">
               <ul id="filters" class="clearfix">
                  <?php $lostags = '';?>
                  @if (App::getLocale() == 'en')
                  @foreach($tags as $tag)
                  <?php 
                     if ($tag!=$tags->last()){
                        $lostags = $lostags.'.'.$tag->name2.',';
                     }
                     else{
                        $lostags = $lostags.'.'.$tag->name2;
                     }
                     ?>
                  @endforeach             
                  @elseif (App::getLocale() == 'es')
                  @foreach($tags as $tag)
                  <?php 
                     if ($tag!=$tags->last()){
                        $lostags = $lostags.'.'.$tag->name.',';
                     }
                     else{
                        $lostags = $lostags.'.'.$tag->name;
                     }
                     ?>
                  @endforeach              
                  @endif
                  <li><span class="filter active" data-filter=".tag1,.tag2,.tag3,.tag4,.tag5,<?= $lostags ?>">Todos</span></li>
                  <li><span class="filter" data-filter=".tag1">Ecologia</span></li>
                  <li><span class="filter" data-filter=".tag2">Tag2</span></li>
                  <li><span class="filter" data-filter=".tag3">Mercado</span></li>
                  <li><span class="filter" data-filter=".tag4">Tag4</span></li>
                  @foreach ($tags as $tag)
                  @if (App::getLocale() == 'en')
                  <?php $tagname = $tag->name2 ?>
                  @elseif (App::getLocale() == 'es')
                  <?php $tagname = $tag->name ?>
                  @endif
                  <li><span class="filter" data-filter=".<?= $tagname ?>"><?= $tagname ?></span></li>
                  @endforeach
               </ul>
               <div style=" height: 400px;vertical-align:middle;">
                  <div id="portfoliolist2">
                     <a href="#">
                        <div class="portfolio tag1 tag3 tag5 Mercado" data-cat="tag1 tag3 Mercado">
                           <div class="portfolio-wrapper">
                              <img src="landing/img/brezza-energy.jpg"  class="img-responsive" alt="producto1">
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
                              <img src="landing/img/sector-agroalimentario (2).jpg" class="img-responsive" alt="producto1">
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
                     @foreach($products as $product)
                     <a href="{{ route('products.frontView', $product->id)}}">
                        <?php $mistags = '';?>
                        @foreach($product->tags as $tag)
                        @if (App::getLocale() == 'en')
                        <?php $tagname = $tag->name2 ?>
                        @elseif (App::getLocale() == 'es')
                        <?php $tagname = $tag->name ?>
                        @endif
                        <?php $mistags = $mistags.' '.$tagname;
                           ?>
                        @endforeach
                        <div class="portfolio <?= $mistags; ?> " data-cat="<?= $mistags; ?>">
                           <div class="portfolio-wrapper">
                              <img src="landing/img/sector-agroalimentario.jpg" class="img-responsive" alt="producto1">
                              <div class="label">
                                 <div class="label-text" >
                     <a href="{{ route('products.frontView', $product->id)}}" class="text-title" style="color:white !important"><?= $product->name; ?></a> 
                     <span class="text-category" style="color:white !important">@foreach($product->tags as $tag)
                     @if (App::getLocale() == 'en')
                     <?php $tagname = $tag->name2 ?>
                     @elseif (App::getLocale() == 'es')
                     <?php $tagname = $tag->name ?>
                     @endif
                     <a href="{{ route('products.listByTag', $tag->id)}}"><?= $tagname; ?></a>
                     @endforeach
                     </span>
                     </div>
                     <div class="label-bg"> </div>
                     </div>
                     </div>
                     </div>
                     </a>
                     @endforeach
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                  <p>{{ trans('app.descriptionport2') }}</p>
               </div>
            </div>
         </div>
      </section>
      <!--MEDIOS-->
      <section id="testimonials" class="navy-section testimonials" style="margin-top: 0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center wow zoomIn">
                  <i class="fa fa-comment big-icon"></i>
                  <h1>
                     {{ trans('app.medios') }}
                  </h1>
                  <br>
                  <div id="slides">
                     <ul>
                        <li class="slide">
                           <div class="quoteContainer">
                              <p class="quote-phrase"><span class="quote-marks">"</span>
                                 I could not stop staring! Company A's Web Solutions are by far the most elegant solutions, you can't beat their quality and attention to detail!
                                 <span class="quote-marks">"</span>
                              </p>
                           </div>
                           <div class="authorContainer">
                              <p class="quote-author">Andy Fakename // CEO: Andy's Camping Supplies</p>
                           </div>
                        </li>
                        <li class="slide">
                           <div class="quoteContainer">
                              <p class="quote-phrase"><span class="quote-marks">"</span>Carl Fakeguy, was the most helpful designer I've ever hired. He listened to my ideas and advised against things that could negatively affect my CEO. Company A is by far the most generous and helpful company, 5/5!<span class="quote-marks">"</span>
                              </p>
                           </div>
                           <div class="authorContainer">
                              <p class="quote-author">Janice Falsename</p>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!--<div class="testimonials-text">
                     <h5>"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)." </h5>
                     </div>
                     <small>
                     <strong>Adrian Garcia - 12.02.2014</strong>
                     </small>-->
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
      <!-- X WHOARE-->
      <section id="team" class="features">
         <div class="container">
            <div class="col-lg-12 text-center">
               <div class="navy-line"></div>
               <h1>
                  @if (App::getLocale() == 'en')
                  {{ $whoares -> titulo2 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $steps -> titulo1 }}
                  @endif
               </h1>
               <p>
                  @if (App::getLocale() == 'en')
                  {{ $whoares -> descripcion2 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $whoares -> descripcion1 }}
                  @endif
               </p>
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
                        <div class="panel-heading actives">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" aria-expanded="true" href="#collapseOne1">
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
                                    <p align=justify>
                                       @if (App::getLocale() == 'en')
                                       {{ $whoares -> text1 }}
                                       @elseif (App::getLocale() == 'es')
                                       {{ $whoares -> texto1 }}
                                       @endif
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                              <h3 class="panel-title">
                                 {{ trans('app.vision') }}
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p align=justify>D
                                 @if (App::getLocale() == 'en')
                                 {{ $whoares -> text2 }}
                                 @elseif (App::getLocale() == 'es')
                                 {{ $whoares -> texto2 }}
                                 @endif
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                              <h3 class="panel-title">
                                 {{ trans('app.mission') }}
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p align=justify>
                                 @if (App::getLocale() == 'en')
                                 {{ $whoares -> text3 }}
                                 @elseif (App::getLocale() == 'es')
                                 {{ $whoares -> texto3 }}
                                 @endif
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <a style="text-decoration:none" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                              <h3 class="panel-title">
                                 {{ trans('app.organization') }}
                                 <i class="fa fa-angle-right pull-right"></i>
                              </h3>
                           </a>
                        </div>
                        <div id="collapseFive1" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p align=justify>
                                 @if (App::getLocale() == 'en')
                                 {{ $whoares -> text4 }}
                                 @elseif (App::getLocale() == 'es')
                                 {{ $whoares -> texto4 }}
                                 @endif
                              </p>
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" id="btnmodal12" data-target="#myModal2">{{ trans('app.organigram') }}</button>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal2" role="dialog">
                                 <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">{{ trans('app.organigram') }}</h4>
                                       </div>
                                       <div class="modal-body">
                                          <p align=justify>
                                             {{ trans('app.textorg') }}
                                          </p>
                                          <img class="img-responsive" alt="Organigrama" title="Organigrama" src="landing/img/Organigrama.png">
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" id="closemodal12"  class="btn btn-primary" data-dismiss="modal">{{ trans('app.close') }}</button>
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
      </section>
      <section id="rellenob" display="none">
         <div class="row" >
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
      </section>
      <!--  X STEPS -->
      <section class="cd-horizontal-timeline" id="Steps">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="navy-line"></div>
               <h1>
                  @if (App::getLocale() == 'en')
                  {{ $steps -> titulo2 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $steps -> titulo1 }}
                  @endif
               </h1>
               <p>
                  @if (App::getLocale() == 'en')
                  {{ $steps -> descripcion2 }}
                  @elseif (App::getLocale() == 'es')
                  {{ $steps -> descripcion1 }}
                  @endif
               </p>
            </div>
         </div>
         <div class="timeline wow zoomIn">
            <div class="events-wrapper">
               <div class="events col-md-offset-2 col-md-4">
                  <ul style="list-style:none;" >
                     <li><a href="#0" data-date="28/01/2014" class="selected">{{ trans('app.step1') }}</a></li>
                     <li><a href="#0" data-date="28/02/2014">{{ trans('app.step2') }}</a></li>
                     <li><a href="#0" data-date="28/03/2014">{{ trans('app.step3') }}</a></li>
                     <li><a href="#0" data-date="28/04/2014">{{ trans('app.step4') }}</a></li>
                     <li><a href="#0" data-date="28/05/2014">{{ trans('app.step5') }}</a></li>
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
                        <img src="{{ $steps -> img1 }}" alt="Paso 1" class="pasos-img">
                     </div>
                     <div class="col-md-9">
                        <h2>
                           @if (App::getLocale() == 'en')
                           {{ $steps -> paso12 }}
                           @elseif (App::getLocale() == 'es')
                           {{ $steps -> paso11 }}
                           @endif
                        </h2>
                        <em>
                        @if (App::getLocale() == 'en')
                        {{ $steps -> desc12 }}
                        @elseif (App::getLocale() == 'es')
                        {{ $steps -> desc11 }}
                        @endif
                        </em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/02/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <img src="{{ $steps -> img2 }}" alt="Paso 2" class="pasos-img">
                     </div>
                     <div class="col-md-9">
                        <h2> 
                           @if (App::getLocale() == 'en')
                           {{ $steps -> paso22 }}
                           @elseif (App::getLocale() == 'es')
                           {{ $steps -> paso21 }}
                           @endif
                        </h2>
                        <em>
                        @if (App::getLocale() == 'en')
                        {{ $steps -> desc22 }}
                        @elseif (App::getLocale() == 'es')
                        {{ $steps -> desc21 }}
                        @endif
                        </em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/03/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <img src="{{ $steps -> img3 }}" alt="Paso 3" class="pasos-img">
                     </div>
                     <div class="col-md-9">
                        <h2> 
                           @if (App::getLocale() == 'en')
                           {{ $steps -> paso32 }}
                           @elseif (App::getLocale() == 'es')
                           {{ $steps -> paso31 }}
                           @endif
                        </h2>
                        <em>
                        @if (App::getLocale() == 'en')
                        {{ $steps -> desc32 }}
                        @elseif (App::getLocale() == 'es')
                        {{ $steps -> desc31 }}
                        @endif
                        </em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/04/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <img src="{{ $steps -> img4 }}" alt="Paso 4" class="pasos-img">
                     </div>
                     <div class="col-md-9">
                        <h2> 
                           @if (App::getLocale() == 'en')
                           {{ $steps -> paso42 }}
                           @elseif (App::getLocale() == 'es')
                           {{ $steps -> paso41 }}
                           @endif
                        </h2>
                        <em>
                        @if (App::getLocale() == 'en')
                        {{ $steps -> desc42 }}
                        @elseif (App::getLocale() == 'es')
                        {{ $steps -> desc41 }}
                        @endif
                        </em>
                     </div>
                  </div>
                  </br></br>
               </li>
               <li data-date="28/05/2014">
                  <div class="row">
                     <div class="col-md-offset-1 col-md-2">
                        </br></br>
                        <img src="{{ $steps -> img5 }}" alt="Paso 5" class="pasos-img">
                     </div>
                     <div class="col-md-9">
                        <h2>
                           @if (App::getLocale() == 'en')
                           {{ $steps -> paso52 }}
                           @elseif (App::getLocale() == 'es')
                           {{ $steps -> paso51 }}
                           @endif
                        </h2>
                        <em>
                        @if (App::getLocale() == 'en')
                        {{ $steps -> desc52 }}
                        @elseif (App::getLocale() == 'es')
                        {{ $steps -> desc51 }}
                        @endif
                        </em>
                     </div>
                  </div>
                  </br></br>
               </li>
            </ol>
         </div>
         <!-- .events-content -->
      </section>
      <!--  X CONTAC-->
      <section id="contact" class="gray-section contact">
         <div class="container">
            <div class="row m-b-lg">
               <div class="col-lg-12 text-center">
                  <div class="navy-line"></div>
                  <h1>
                     @if (App::getLocale() == 'en')
                     {{ $contacts -> titulo2 }}
                     @elseif (App::getLocale() == 'es')
                     {{ $contacts -> titulo1 }}
                     @endif
                  </h1>
                  <p>
                     @if (App::getLocale() == 'en')
                     {{ $contacts -> descripcion2 }}
                     @elseif (App::getLocale() == 'es')
                     {{ $contacts -> descripcion1 }}
                     @endif 
                  </p>
               </div>
            </div>
            <div class="row m-b-lg">
               <div class="col-lg-3 col-lg-offset-2">
                  <br><br>
                  <address align="center">
                     <strong><span class="navy">{{ $contacts -> nombreCompania }}</span></strong><br/>
                     @if (App::getLocale() == 'en')
                     {{ $contacts -> direccion2 }}
                     @elseif (App::getLocale() == 'es')
                     {{ $contacts -> direccion1 }}
                     @endif <br/>
                     <abbr title="Phone">
                     {{ trans('app.phone') }}:
                     </abbr> +58 (0251) {{ $contacts -> telefono1 }}
                  </address>
                  <br><br>
                  <div class="col-lg-12 text-center">
                     <p class="m-t-sm">
                        {{ trans('app.follow') }}
                     </p>
                     <ul class="list-inline social-icon">
                        <li><a target="_blank" href="{{ $contacts -> twitter1}}" title="Visitanos en Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="{{ $contacts -> facebook1}}" title="Visitanos en Facebook" ><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="{{ $contacts -> instagram1}}" title="Siguenos en Instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div>
                     <div class="form-group">
                        <label class="control-label">{{ trans('app.name') }}</label>
                        <input type="text" class="form-control" id="nombre" placeholder="{{ trans('app.textname') }}">
                     </div>
                     <div class="form-group">
                        <label class="control-label">{{ trans('app.email') }}</label>
                        <input type="text" class="form-control" id="email" placeholder="{{ trans('app.textemail') }}">
                     </div>
                     <div class="form-group">
                        <label class="control-label">{{ trans('app.message') }}</label>
                        <textarea class="form-control" rows="5" cols="50" style="resize:vertical;" id="comment" placeholder="{{ trans('app.textcontent') }}"></textarea>
                     </div>
                     <button class="btn btn-primary" type="submit">{{ trans('app.send') }}</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--  X FOOTER-->
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
      <script type="text/javascript">
         // Config box
         
         // Enable/disable fixed top navbar
         $('#fixednavbar').click(function (){
             if ($('#fixednavbar').is(':checked')){
                 $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
                 $("body").removeClass('boxed-layout');
                 $("body").addClass('fixed-nav');
                 $('#boxedlayout').prop('checked', false);
         
                 if (localStorageSupport){
                     localStorage.setItem("boxedlayout",'off');
                 }
         
                 if (localStorageSupport){
                     localStorage.setItem("fixednavbar",'on');
                 }
             } else{
                 $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
                 $("body").removeClass('fixed-nav');
                 $("body").removeClass('fixed-nav-basic');
                 $('#fixednavbar2').prop('checked', false);
         
                 if (localStorageSupport){
                     localStorage.setItem("fixednavbar",'off');
                 }
         
                 if (localStorageSupport){
                     localStorage.setItem("fixednavbar2",'off');
                 }
             }
         });
         
         // Enable/disable fixed top navbar
         $('#fixednavbar2').click(function (){
             if ($('#fixednavbar2').is(':checked')){
                 $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
                 $("body").removeClass('boxed-layout');
                 $("body").addClass('fixed-nav').addClass('fixed-nav-basic');
                 $('#boxedlayout').prop('checked', false);
         
                 if (localStorageSupport){
                     localStorage.setItem("boxedlayout",'off');
                 }
         
                 if (localStorageSupport){
                     localStorage.setItem("fixednavbar2",'on');
                 }
             } else {
                 $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
                 $("body").removeClass('fixed-nav').removeClass('fixed-nav-basic');
                 $('#fixednavbar').prop('checked', false);
         
                 if (localStorageSupport){
                     localStorage.setItem("fixednavbar2",'off');
                 }
                 if (localStorageSupport){
                     localStorage.setItem("fixednavbar",'off');
                 }
             }
         });
         
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
      <?php $lostags = '';?>
      @if (App::getLocale() == 'en')
      @foreach($tags as $tag)
      <?php 
         if ($tag!=$tags->last()){
            $lostags = $lostags.'.'.$tag->name2.',';
         }
         else{
            $lostags = $lostags.'.'.$tag->name2;
         }
         ?>
      @endforeach             
      @elseif (App::getLocale() == 'es')
      @foreach($tags as $tag)
      <?php 
         if ($tag!=$tags->last()){
            $lostags = $lostags.'.'.$tag->name.',';
         }
         else{
            $lostags = $lostags.'.'.$tag->name;
         }
         ?>
      @endforeach              
      @endif
      <script type="text/javascript">
         /*///////////////////////////////// 
         PORTFOLIO
         ////////////////////////////////*/
         
         
         $(function () {
              
          var filterList = {
          
              init: function () {
              
                  // MixItUp plugin
                  // http://mixitup.io
                  $('#portfoliolist2').mixItUp({
                      selectors: {
                    target: '.portfolio',
                    filter: '.filter' 
                },
                load: {
                    filter: '.tag1,.tag2,.tag3,.tag4,.tag5,<?= $lostags ?>' // show app tab on first load
                  }     
                  });                             
              }
          };
          // Run the show!
          filterList.init();
          
         }); 
         
         
         $(function(){ // on first doc ready we instantiate mixitup
          $('#portfoliolist2').mixItUp(); // an instance now exists in the session memory
         });
         $(window).on('page:before-change', function(){ 
          $('#portfoliolist2').mixItUp('destroy'); // destroy the instance
         });
         $(window).on('page:load', function(){
          $('#portfoliolist2').mixItUp(); // We can now reinstantiate without being blocked
         });
         
                  
      </script>
      <!--SLIDER DE MEDIOS - SCRIPT -->
      <script type="text/javascript" >
         $(document).ready(function () {
         //rotation speed and timer
         var speed = 9000;
         
         var run = setInterval(rotate, speed);
         var slides = $('.slide');
         var container = $('#slides ul');
         var elm = container.find(':first-child').prop("tagName");
         var item_width = container.width();
         var previous = 'prev'; //id of previous button
         var next = 'next'; //id of next button
         slides.width(item_width); //set the slides to the correct pixel width
         container.parent().width(item_width);
         container.width(slides.length * item_width); //set the slides container to the correct total width
         container.find(elm + ':first').before(container.find(elm + ':last'));
         resetSlides();
         
         
         //if user clicked on prev button
         
         $('#buttons a').click(function (e) {
           //slide the item
           
           if (container.is(':animated')) {
               return false;
           }
           if (e.target.id == previous) {
               container.stop().animate({
                   'left': 0
               }, 1500, function () {
                   container.find(elm + ':first').before(container.find(elm + ':last'));
                   resetSlides();
               });
           }
           
           if (e.target.id == next) {
               container.stop().animate({
                   'left': item_width * -2
               }, 1500, function () {
                   container.find(elm + ':last').after(container.find(elm + ':first'));
                   resetSlides();
               });
           }
           
           //cancel the link behavior            
           return false;
           
         });
         
         //if mouse hover, pause the auto rotation, otherwise rotate it    
         container.parent().mouseenter(function () {
           clearInterval(run);
         }).mouseleave(function () {
           run = setInterval(rotate, speed);
         });
         
         
         function resetSlides() {
           //and adjust the container so current is in the frame
           container.css({
               'left': -1 * item_width
           });
         }
         
         });
         //a simple function to click next link
         //a timer will call this function, and the rotation will begin
         
         function rotate() {
         $('#next').click();
         }
         
      </script>
   </body>
</html>