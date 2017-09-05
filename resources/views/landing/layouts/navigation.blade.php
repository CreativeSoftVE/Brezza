<div id="thenav"  class="navbar-wrapper">
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
         <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="" href="/">
            <img width="240" height="40" class="navbar-brand" src="landing/img/logo-nav.png">
            
            </a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a class="page-scroll" href="#page-top">Inicio</a></li>
               <li><a class="page-scroll" href="#productos">Productos</a></li>
               <li><a class="page-scroll" href="#team">Nosotros</a></li>
               <li><a class="page-scroll" href="#contact">Contacto</a></li>
               
              <!-- <li><a class="page-scroll" href="#contact">Administración</a></li> -->
               
               <li><a class="page-scroll disabled" data-toggle="modal" data-target="#myModal7">Iniciar Sesión</a>
               
               </li>
               
            </ul>
         </div>
      </div>
   </nav>
</div><!-- Modal -->
<div class="modal fade" id="myModal7" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Iniciar Sesión</h4>
         </div>
         <div class="modal-body">
            <%= form_for(User.new, :url => user_session_path) do |f| %>
            <div class="field">
               <div class="col-md-offset-3 col-md-6" style="padding-top: 52px">
                  <%= image_tag "bz1.png", :class => "img-responsive"%>
               </div>
            </div>
            <div class="field">
               <div class="col-md-offset-1 col-md-10" style="padding-top: 32px">
                  <%= f.label :email %><br />
                  <%= f.email_field :email, autofocus: true, :class => "form-control", :placeholder => "usuario@ejemplo.com"  %>
               </div>
            </div>
            <div class="field" style="padding-top: 172px">
               <div class="col-md-offset-1 col-md-10">
                  <%= f.label :password %><br />
                  <%= f.password_field :password, autocomplete: "off", :class => "form-control" %>
               </div>
            </div>
            <br>
            <div class="actions text-center" style="padding-top: 92px">
               <%= submit_tag 'Iniciar Sesión' , class: "btn btn-primary m-b" %>
            </div>
            <% end %>
         </div>
         <div class="modal-footer">
            <p>¿No eres miembro? <a href="/users/sign_up">Registrate</a></p>
            <p>¿Olvidaste tu <a href="/users/password/new">Clave?</a></p>
         </div>
      </div>
   </div>
</div>
