@extends('admin.layouts.app')

@section('title', 'Agregar Categoría')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Categoría</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="/panel">Inicio</a>
         </li>
         <li>
            <a href="{{ route('categories.index') }}">Listado</a>
         </li>
         <li class="active">
            <strong class="text-blue">Registrar Categoría</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
                      @include('admin.layouts.error')
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h4 class="text-dark-blue"><strong>Categoría</strong></h4>
            </div>
            <div class="ibox-content">
               <div class="row">
                  <div class="col-sm-12">

    {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Descripcion', 'required']) }}
        </div>
        <div class="form-group">
            {!! Form::label('textinicio', 'Texto Inicio') !!}
            {{ Form::text('textinicio', null, ['class' => 'form-control', 'placeholder' => 'Texto Inicio...', 'required']) }}
        </div>
        <div class="form-group">
                        <label class="control-label">Ícono<label for="category_icon" class="control-label error" style="margin-bottom: 0px;"></label></label>
                        <select class="fa btn form-control" name="icon" id="category_icon">
                            <option value="fa-handshake-o"> &#xf2b5; fa-handshake-o </option>
                            <option value="fa-id-card-o"> &#xf2c3; fa-id-card-o </option>
                           	<option value="fa-user-circle"> &#xf2bd;  fa-user-circle </option>
                           	<option value="fa-area-chart"> &#xf1fe;  fa-area-chart</option>
                           	<option value="fa-balance-scale"> &#xf24e; fa-balance-scale </option>
                           	<option value="fa-bar-chart"> &#xf080;  fa-bar-chart</option>
                           	<option value="fa-ban"> &#xf05e; fa-ban</option>
                           	<option value="fa-barcode"> &#xf02a; fa-barcode </option>
                           	<option value="fa-bolt"> &#xf0e7; fa-bolt</option>
                           	<option value="fa-book"> &#xf02d; fa-book</option>
                           	<option value="fa-calendar"> &#xf073; fa-calenda</option>
                           	<option value="fa-calendar-check-o"> &#xf274; fa-calendar-check-o </option>
                           	<option value="fa-check"> &#xf00c; fa-check </option>
                           	<option value="fa-check-square-o"> &#xf046; fa-check-square-o </option>
                           	<option value="fa-clock-o"> &#xf017; fa-clock-o </option>
                           	<option value="fa-cloud-upload"> &#xf0ee; fa-cloud-upload </option>
                           	<option value="fa-cloud-download"> &#xf0ed; fa-cloud-download </option>
                           	<option value="fa-code-fork"> &#xf126; fa-code-fork </option>
                           	<option value="fa-coffee"> &#xf0f4; fa-coffee </option>
                           	<option value="fa-cogs"> &#xf085; fa-cogs</option>
                           	<option value="fa-compass"> &#xf14e; fa-compass  </option>
                           	<option value="fa-credit-card"> &#xf09d;  fa-credit-card</option>
                           	<option value="fa-diamond"> &#xf219; fa-diamond </option>
                           	<option value="fa-file-archive-o"> &#xf1c6;  fa-file-archive-o</option>
                           	<option value="fa-globe"> &#xf0ac; fa-globe</option>
                           	<option value="fa-users"> &#xf0c0; fa-users </option>
                           	<option value="fa-leaf"> &#xf06c; fa-leaf</option>
                           	<option value="fa-lock"> &#xf023; fa-lock</option>
                           	<option value="fa-line-chart"> &#xf201; fa-line-chart</option>
                           	<option value="fa-lightbulb-o"> &#xf0eb;  fa-lightbulb-o </option>
                           	<option value="fa-mobile"> &#xf10b; fa-mobile </option>
                           	<option value="fa-pie-chart"> &#xf200;  fa-pie-chart</option>
                           	<option value="fa-plug"> &#xf1e6; fa-plug</option>
                           	<option value="fa-share-alt"> &#xf1e0; fa-share-alt</option>f
                           	<option value="fa-star"> &#xf005; fa-strar</option>
                           	<option value="fa-user-o"> &#xf2c0;  fa-user-o</option>
                           	<option value="fa-file-o"> &#xf016;  fa-file-o</option>
                           </select>
                     </div>
                     <div class="form-group" align="center" >
                              <label class="control-label">Banner <label for="category_banner" class="control-label error" style="margin-bottom: 0px;"></label></label>
                              <label class="btn btn-sm btn-primary btn-file">
                              Buscar imagen... <input  name="banner" id="category_banner" type="file" hidden>
                              </label>
                           </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class'=> 'btn btn-primary'])  !!}
        </div>
    {!! Form::close() !!}

 </div>
               </div>
            </div>
         </div>
      </div>
      
   </div>
@endsection
<style>
   .btn-file {
   position: relative;
   overflow: hidden;
   }
   .btn-file input[type=file] {
   position: absolute;
   top: 0;
   right: 0;
   min-width: 100%;
   min-height: 100%;
   font-size: 100px;
   text-align: right;
   filter: alpha(opacity=0);
   opacity: 0;
   outline: none;
   background: white;
   cursor: inherit;
   display: block;
   }
</style>
@section('scripts')
<script type="text/javascript">
   $('#form-generic').validate({
     rules: {
       'mensaje[nombre]': {  
           required: true,
           solo_letras: true
       }
     }
   });
   
</script>

<script>
   $(document).ready( function() {
     $('.demo').each( function() {
       //
       // Dear reader, it's actually very easy to initialize MiniColors. For example:
       //
       //  $(selector).minicolors();
       //
       // The way I've done it below is just for the demo, so don't get confused
       // by it. Also, data- attributes aren't supported at this time...they're
       // only used for this demo.
       //
       $(this).minicolors({
         control: $(this).attr('data-control') || 'hue',
         defaultValue: $(this).attr('data-defaultValue') || '',
         format: $(this).attr('data-format') || 'hex',
         keywords: $(this).attr('data-keywords') || '',
         inline: $(this).attr('data-inline') === 'true',
         letterCase: $(this).attr('data-letterCase') || 'lowercase',
         opacity: $(this).attr('data-opacity'),
         position: $(this).attr('data-position') || 'bottom left',
         swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
         change: function(value, opacity) {
           if( !value ) return;
           if( opacity ) value += ', ' + opacity;
           if( typeof console === 'object' ) {
             console.log(value);
           }
         },
         theme: 'bootstrap'
       });
     });
   });
</script>
@endsection