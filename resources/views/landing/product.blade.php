@extends('landing.layouts.app')

@section('title', 'Lista de Productos')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 75px;" >
   <div class="col-lg-10">
      <h2>Detalle del Producto</h2>
      <ol class="breadcrumb">
         <li>
            <a href="/">Inicio</a>
         </li>
         <li>
            <a href="{!! route('products.listByCategory', [$product->category_id])!!}" >{!! $product->category->name !!}</a>
         </li>
         <li class="active">
            <strong>Detalle</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="container">
   <div class="row">
      <div class="col-lg-7">
         <div class="product-images">
            <div class="carousel slide" id="carousel1" style="height:350px">
               <div class="carousel-inner" style="height: 350px">
                  
                  @foreach($product->images as $image)
                  <div class="item @if($image == $product->images[0]) active @endif " style="height: 350px">
                     <img style="height: 350px" alt="image" class="img-responsive" src="{{'../images/products/'.$image->name}}">
                  </div>
                  @endforeach
               </div>
               @if($product->images->count()>1) 
                  <a data-slide="prev" href="#carousel1" class="left carousel-control">
                  <span class="icon-prev"></span>
                  </a>
                  <a data-slide="next" href="#carousel1" class="right carousel-control">
                  <span class="icon-next"></span>
                  </a>
               @endif
            </div>
         </div>
      </div>
      <div class="col-lg-5">
         <div class="row">
            <h1 class="font-bold m-b-xs">
               {!! $product->name !!}
            </h1>
            <br>
            <h4>             @if (App::getLocale() == 'en')
                                    Short Description
                              @elseif (App::getLocale() == 'es')
                                    Descripción Breve
                              @endif</h4>
            <div class="text-primary">
                              @if (App::getLocale() == 'en')
                                    {!! $product->description2 !!}
                              @elseif (App::getLocale() == 'es')
                                    {!! $product->description !!}
                              @endif</h4>
               
            </div>
            <h2 class="product-main-price">
            </h2>
            <hr>
            <dl>
               <dt>Etiquetas</dt>
               @foreach($product->tags as $tag)
                           @if (App::getLocale() == 'en')
                                    <?php $tagname = $tag->name2 ?>
                              @elseif (App::getLocale() == 'es')
                                    <?php $tagname = $tag->name ?>
                              @endif
               <a href="{!! route('products.listByTag', [$tag->id]) !!}"><span class="label label-primary hvr-fade hvr-grow" >{!! $tagname!!}</span>&nbsp;</a>
               @endforeach
            </dl>
         </div>
         <div class="row">
            <div class="btn-group">
               
            </div>
         </div>
         <br>
         <div class="row pull-right">
            <div class"">
               <button class="btn btn-white btn-sm" data-toggle="modal" data-target="#myModal7"><i class="fa fa-envelope"></i>@if (App::getLocale() == 'en')
                                    Contact
                              @elseif (App::getLocale() == 'es')
                                    Contactar
                              @endif </button>
               @if(Auth::check())
               <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Solicitar alianza <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     @if(1==1) <!-- !Alliance.where(:user_id => current_user.id, :product_id => @product.id, :allytype => 1, :approval => [nil, true] ).exists? -->
                     <li><!-- link_to 'Técnica', alianza_path(@product, :type => 1), class: "font-bold" -->Técnica</li>
                     @else
                     <li>
                        <a href="javascript:AlertIt();" class="fa fa-check font-bold">Técnica</a>
                     </li>
                     @endif
                     @if(1==2) <!-- !Alliance.where(:user_id => current_user.id, :product_id => @product.id, :allytype => 2, :approval => [nil, true] ).exists? -->
                     <li><!-- link_to 'Financiera', alianza_path(@product, :type => 2), class: "font-bold" -->Financiera</li>
                     @else
                     <li>
                        <a href="javascript:AlertIt();" class="fa fa-check">Financiera</a>
                     </li>
                     @endif
                     
                     @if(1==3) <!-- !Alliance.where(:user_id => current_user.id, :product_id => @product.id, :allytype => 3, :approval => [nil, true] ).exists? -->
                     <li><!-- link_to 'Comercial', alianza_path(@product, :type => 3), class: "font-bold" -->Comercial</li>
                     @else
                     <li>
                        <script type="text/javascript">
                           function AlertIt() {
                           var answer = confirm ("Ya tienes este tipo de alianza.")
                           if (answer)
                          ;
                           }
                        </script>
                        <a href="javascript:AlertIt();" class="fa fa-check">Comercial</a>
                     </li>
                      @endif
                     
                  </ul>
               </div>
                   @else
               <a href="#">
               <button class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Registrarse</button>
               </a>
                   @endif
            </div>
         </div>
         <div class="modal fade" id="myModal7" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Mensaje</h4>
                  </div>
                  <div class="modal-body">
                    <%= form_for :mensaje, :html => {:class => "form" }  do |f| %>
                     <div class="row" style="padding-top: 22px">
                        <div class="col-md-offset-2 col-md-8" >
                           <h1 class="text-center">Contáctanos</h1>
                           <p class="text-center">Déjanos tu mensaje y te atenderemos a la brevedad</p>
                        </div>
                     </div> 
                     <div class="row">
                        <div class="col-md-offset-1 col-md-10" >
                           <div class="form-group">
                              <label class="control-label">Nombre</label>
                              <%= f.text_field :nombre,:required => true, :class => "form-control", :placeholder => "John Doe" %>
                           </div>
                           <div class="form-group">
                              <label class="control-label">Correo</label>
                              <%= f.text_field :correo,:required => true, :class => "form-control",  :placeholder => "ejemplo@mail.net", :class =>"form-control" %>
                           </div>
                           <div class="form-group">
                              <label class="control-label">Mensaje</label>
                              <%= f.text_area :mensaje,:required => true, :class => "form-control", :placeholder => "Escriba su mensaje..." %>
                           </div>
                           <div class ="col-lg-2 col-lg-offset-10">
                              <button class="btn btn-primary " type="submit">Enviar</button>
                           </div>
                        </div>
                     </div>
                     <% end %>
                     
                     
                  </div>
                  </br></br>
                        
                        
                 
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="navy-line"></div>
   <br>
   <div class="row">
      <div class="row">
         <div class="panel blank-panel">
            <div class="panel-heading">
               <div class="panel-options">
                  <ul class="nav nav-tabs">
                            @if (App::getLocale() == 'en')
                                    <li class="active"><a href="#tab-1" data-toggle="tab">Detail</a></li>
                              @elseif (App::getLocale() == 'es')
                                    <li class="active"><a href="#tab-1" data-toggle="tab">Detalle</a></li>
                              @endif
                     
                     <!-- <li class=""><a href="#tab-2" data-toggle="tab">Preguntas Frecuentes</a></li> -->
                  </ul>
               </div>
            </div>
            <div class="panel-body" style="border-bottom: 1px solid gray !important">
               <div class="tab-content" >
                  <div class="tab-pane active" id="tab-1" >
                     <div class="col-md-10 col-md-offset-1">
                        @if (App::getLocale() == 'en')
                                    {!! $product->detail2 !!}
                              @elseif (App::getLocale() == 'es')
                                    {!! $product->detail !!}
                              @endif
                        
                        
                     </div>
                  </div>
                  <div class="tab-pane" id="tab-2">
                     <div class="col-md-10 col-md-offset-1" style="background">
                        <% if @product.questions.empty? %>
                        <div class="label label-danger">
                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                           <strong>El producto no tiene asignada ninguna pregunta frecuente</strong> Disculpe la molestia, cualquier inquietud no dude en comunicarse con nosotros.
                        </div>
                        <% else %>
                        <% @product.questions.each do |question| %>
                        <div class="faq-item">
                           <div class="row">
                              <div class="col col-md-1">
                                 <a class="btn btn-circle btn-pregunta" style="margin: 10% 0px;" data-toggle="collapse" href="<%= '#'+question.id.to_s %>"><i class="fa fa-question fa-3x"></i></a>
                              </div>
                              <div class="col col-md-10">
                                 <a data-toggle="collapse" href="#<%= question.id.to_s %>" class="faq-question"><%= question.description %></a>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div id="<%= question.id.to_s %>" class="panel-collapse collapse ">
                                    <div class="faq-answer">
                                       <p>
                                          <%= question.answer %>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <% end %>
                        <% end %>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="navy-line"></div>
         <br>
         <div class"row">
            <div class"col-lg-12">
               <div class="fb-comments col-md-10 col-md-offset-1" data-width="100%" data-href="https://brezzaproject-cecheverria1.c9users.io" data-numposts="5"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="ibox-footer">
   <div id="fb-root"></div>
   <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=938437439571434";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
   </script>
</div>
@section('script')
<script type="text/javascript">
   $(window).load(function() {
   
       $('.product-images').slick({
           dots: true
       });
   
   });
   
</script>
@endsection


@endsection