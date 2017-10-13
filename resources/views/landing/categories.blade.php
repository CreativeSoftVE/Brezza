@extends('landing.layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 75px;" >
   <div class="col-lg-10">
      <h2>Brezza {!! $category->name !!}</h2>
      <ol class="breadcrumb">
         <li>
            <a href="/">Inicio</a>
         </li>
         <li class="active">
            <strong>{!! $category->name !!}</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight container">
   <div class="row">
      @foreach($products as $product)
      <div class="col-md-4">
         <div class="ibox">
            <div class="samesize ibox-content product-box">
               <div >
                  <a href="{{ route('products.frontView', $product->id)}}">
                  <img src="../landing/img/sector-agroalimentario.jpg" alt="Paso 1" class="img-responsive">
                 </a>
               </div>
               <div class="product-desc">
                  
                  @foreach($product->tags as $tag)
                              @if (App::getLocale() == 'en')
                                    <?php $tagname = $tag->name2 ?>
                              @elseif (App::getLocale() == 'es')
                                    <?php $tagname = $tag->name ?>
                              @endif
                  <a href="#" style="color: white" ><span class="label label-primary hvr-fade hvr-grow"> {!! $tagname !!}</span></a> &#160; @endforeach 
                  <a href="#" class="product-name"> {!! $product->name !!}</a>
                  <div class="small m-t-xs">
                     @if (App::getLocale() == 'en')
                                    {!! $product->description2 !!}
                              @elseif (App::getLocale() == 'es')
                                    {!! $product->description !!}
                              @endif
                     
                  </div>
                  <div class="m-t text-righ">
                     <a href="{{ route('products.frontView', $product->id)}}">
                     <span class="btn btn-xs btn-outline btn-success">Detalle <i class="fa fa-long-arrow-right"></i> </span>
                     </a>
                    @if (Auth::check())
               <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Solicitar alianza <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     @if(1==1) <!-- (!Alliance.where(:user_id => current_user.id, :product_id => product.id, :allytype => 1, :approval => [nil, true] ).exists?) -->
                     <li><!---->Tecnica</li>
                     @else
                     <li>
                        <a href="javascript:AlertIt();" class="fa fa-check font-bold">Técnica</a>
                     </li>
                     @endif
                     @if(1==2)<!-- (!Alliance.where(:user_id => current_user.id, :product_id => product.id, :allytype => 2, :approval => [nil, true] ).exists?) -->
                     <li><!-- /* link_to 'Financiera', alianza_path(product, :type => 2), class: "font-bold" */ --> Financiera</li>
                     @else
                     <li>
                        <a href="javascript:AlertIt();" class="fa fa-check">Financiera</a>
                     </li>
                     @endif
                     
                     @if(1==3)<!-- !Alliance.where(:user_id => current_user.id, :product_id => product.id, :allytype => 3, :approval => [nil, true] ).exists? -->
                     <li><!--link_to 'Comercial', alianza_path(product, :type => 3), class: "font-bold" -->Comercial</li>
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
               <button class="btn btn-default btn-sm"><i class="fa fa-user"></i> Registrarse</button>
               </a>
                  @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>

@endsection