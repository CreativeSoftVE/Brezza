@extends('admin.layouts.app')

@section('title', 'Editar producto '.$product->name)

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Productos</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('products.index') }}">Productos</a>
         </li>
         <li class="active">
            <strong class="text-blue">Editar</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            @include('admin.layouts.error')
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h4 class="text-dark-blue">
                    <strong>Editar producto {!! $product->name !!}</strong>
                    </h4>
                </div>
                <div class="ibox-content">
                    <div class="ibox float-e-margins">
                        <div class="row">
                            {!! Form::open(['route' => ['products.update', $product], 'method' => 'PUT', 'files' =>true]) !!}
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                                    <div class="col-10">
                                    {!! Form::text('name',$product->name,['class'=>'form-control', 'placeholder'=>'Nombre del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                                    <div class="col-10">
                                    {!! Form::text('name2',$product->name2,['class'=>'form-control', 'placeholder'=>'Nombre del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción</label>
                                    <div class="col-10">
                                    {!! Form::textarea('description',$product->description,['class'=>'form-control trumbo', 'placeholder'=>'Descripción del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Description</label>
                                    <div class="col-10">
                                    {!! Form::textarea('description2',$product->description2,['class'=>'form-control trumbo', 'placeholder'=>'Descripción del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Detalle</label>
                                    <div class="col-10">
                                    {!! Form::textarea('detail',$product->detail,['class'=>'form-control trumbo', 'placeholder'=>'Descripción del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Detail</label>
                                    <div class="col-10">
                                    {!! Form::textarea('detail2',$product->detail2,['class'=>'form-control trumbo', 'placeholder'=>'Descripción del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Categoria</label>
                                    <div class="col-10">
                                        {!! Form::select('category_id', $categories, $product->category->id,['class'=>'form-control select-category','placeholder'=>'Selecciona una opción' , 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Etiquetas</label>
                                    <div class="col-10">
                                        {!! Form::select('tags[]', $tags, $product_tags,['class'=>'form-control select-tag','multiple' , 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Imagen</label>
                                    <div class="col-10">
                                        {!! Form::file('image') !!}
                                    </div>
                                </div>
                                 <div class="form-group">
                                    
                                    <div class="col-10">
                                        {!! Form::submit('Guardar',['class'=>'btn btn-primary','multiple' , 'require']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript" src="{!! asset('plugins/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
<script type="text/javascript" src="{!! secure_asset('plugins/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
<script>
    var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
    tinymce.init(editor_config);
</script>
@endsection