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
               <li><a class="page-scroll" href="#page-top">{{ trans('app.home') }}</a></li>
               <li><a class="page-scroll" href="#productos">{{ trans('app.products') }}</a></li>
               <li><a class="page-scroll" href="#team">{{ trans('app.aboutus') }}</a></li>
               <li><a class="page-scroll" href="#contact">{{ trans('app.contact') }}</a></li>
               
              <!-- <li><a class="page-scroll" href="#contact">Administración</a></li> -->
               
               <li>
                  <a class="page-scroll" data-toggle="modal" data-target="#myModal7">{{ trans('app.login') }}</a>
                  <div class="modal fade" id="myModal7" role="dialog">
                     <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Iniciar Sesión</h4>
         </div>
         <div class="modal-body">
            
            <p>
                {{trans('app.note')}}
            </p>
            <form class="m-t" role="form" action="#">
                <div class="form-group">
                    <input id="email" type="email" class="form-control" placeholder="{{trans('app.email')}}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group">
                     <input id="password" type="password" class="form-control" placeholder="{{trans('app.pass')}}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{ route('password.request') }}"><small>{{trans('app.forgot')}}</small></a>
                <p class="text-muted text-center"><small>{{trans('app.textl1')}}</small></p>
    
            </form>
            <p class="m-t"> <small>© 2016-2017 Brezza Project S.A.</small> </p>
        </div>
    </div>    
    
         </div>
                  </div>
               </li>
               
            </ul>
         </div>
      </div>
   </nav>
</div><!-- Modal -->



<style type="text/css">
    .links-redes-app {
position: fixed;
float: right;
left: 97%;
top: 90px;
margin: 0;
z-index: 1000;
list-style: none;

li {
margin: 0px 0px 10px;
width: 250px;
height: 55px;
float: left;
position: relative;
display: block;
border-color: #000000;
border-width: 0px;
border-radius: 10px;
box-shadow: 0 0 5px rgba(0,0,0,.2);
background-color: #FFFFFF;
}
li:hover {
transform: translateX(-110px);
transition: transform .3s;
}
li a {
display: block;
position: relative;
line-height: 18px;
margin-left: 15px;
color: $skin-1-color;
text-decoration: none;
}
.android:hover{
transform: translateX(-170px);
transition: transform .3s;
}
.android:hover a{
color: red;
}
li a span i {
font-size: 35px;
}
li a .icon-telf,li a .text-telf {
position: relative;
}
li a .icon-telf {
top: 10px;
margin-right: 5px;
}
li a .text-telf {
font-size: 20px;
padding: 0px 0px 0px 15px;
top: 5px;
}

@media (max-width:1600px){

left: 96%;
}
@media (max-width:1366px) {

left: 93%;
}
@media (max-width:1240px) {

left: 92%;
}
@media (max-width:1100px){

left: 91%;
}
@media (max-width:1050px){

left: 91%;
}
@media (max-width:870px){

left: 92%;
}
@media (max-width:767px){

display: none;
}
}

</style>