@extends('landing.layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
            $("#wizard").steps();
        </script>
        <div id="wizard">
             <h1>First Step</h1>
    <div>First Content</div>
 
    <h1>Second Step</h1>
    <div>Second Content</div>
        </div>

<br><br><br><br>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">

            <div class="ibox-content">
                <h2>
                    Registrate en BrezzaProject
                </h2>
                <p>
                    Crea tu cuenta y descubre todo lo que puedes hacer.
                </p>

                <form id="form" action="#" class="wizard-big">
                    <h1>Presentate</h1>
                    <fieldset>
                        <%= form_for(resource, as: resource_name, url: registration_path(resource_name), :html => { :class =>"m-t", multipart: true})  do |f| %>
                        <%= devise_error_messages! %>
                        <h2>Datos personales</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre </label>
                                    <%= f.text_field :firstname,autofocus: true, class: "form-control" %>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Apellido </label>
                                    <%= f.text_field :lastname, class: "form-control" %>
                                </div>
                                <div class="form-group">
                                    <label>Ciudad </label>
                                     <input class="ff_elem form-control" type="hidden" name="direccion[ciudad]" id="geobytescity"/>
                                     <input class="ff_elem form-control" type="text" name="ff_nm_from[]" value="" id="f_elem_city"/>
                                </div>
                                <div class="form-group">
                                    <label>Estado </label>
                                    <input class="ff_elem" type="hidden" name="direccion[estado]" id="geobytesregion"/>
                                </div>
                                <div class="form-group">
                                    <label>Pais </label>
                                    <input class="ff_elem" type="hidden" name="direccion[pais]" id="geobytescountry"/>
                                </div>
                                
                                
                                
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Teléfono </label>
                                    <%= f.text_field :phone, class: "form-control" %>
                                </div>
                                <div class="form-group">
                                    <label>Correo </label>
                                    <%= f.email_field :email, class: "form-control" %>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña </label>
                                    <%= f.password_field :password, autocomplete: "off",  class: "form-control" %>
                                </div>
                                <div class="form-group">
                                    <label>Confirmar contraseña </label>
                                    <%= f.password_field :password_confirmation, autocomplete: "off", class: "form-control" %>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <div style="margin-top: 20px">
                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h1>Cuentanos más...</h1>
                    <fieldset>
                        <h2>Adjunta documentos para validar tu información</h2>
                        <div class="row">
                            <br><br>
                            <div class="col-lg-6">
                                <div class="form-group">
                                     <label class="btn btn-sm btn-primary">
                                              Documento de identidad... <input  name="user[document]" id="product_document" type="file" hidden>
                                     </label> 
                                </div>
                                <div class="form-group">
                                    <label class="btn btn-sm btn-primary">
                                          Curriculum Vitae (pdf)... <input  name="user[cv]" id="product_cv" type="file" hidden>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="btn btn-sm btn-primary">
                                              Foto de perfil de usuario... <input  name="user[avatar]" id="product_avatar" type="file" hidden>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox"><label> <input type="checkbox"><i></i> Acepto términos y políticas </label></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
<% end %>
</div>
</div>
<br><br><br>

<% content_for :javascript do %>
<% end %>

@endsection

@section('scripts')
<script type="text/javascript">


$(function() {

    $("#wizard").steps();
    $("#form").steps({
        bodyTag: "fieldset",
        onStepChanging: function (event, currentIndex, newIndex) {
            // Always allow going backward even if the current step contains invalid fields!
            if (currentIndex > newIndex) {
                return true;
            }

            // Forbid suppressing "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age").val()) < 18) {
                return false;
            }

            var form = $(this);

            // Clean up if user went backward before
            if (currentIndex < newIndex) {
                // To remove error styles
                $(".body:eq(" + newIndex + ") label.error", form).remove();
                $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
            }

            // Disable validation on fields that are disabled or hidden.
            form.validate().settings.ignore = ":disabled,:hidden";

            // Start validation; Prevent going forward if false
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            // Suppress (skip) "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                $(this).steps("next");
            }

            // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                $(this).steps("previous");
            }
        },
        onFinishing: function (event, currentIndex) {
            var form = $(this);

            // Disable validation on fields that are disabled.
            // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
            form.validate().settings.ignore = ":disabled";

            // Start validation; Prevent form submission if false
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            var form = $(this);

            // Submit form input
            form.submit();
        }
    }).validate({
                errorPlacement: function (error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });

});

</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
@endsection
