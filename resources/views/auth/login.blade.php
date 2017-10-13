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
      
     
      
    <link rel="stylesheet" href="{!! secure_asset('../css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('../css/app.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('plugins/chosen/chosen.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('plugins/trumbowyg/ui/trumbowyg.min.css') !!}" />

    <link rel="stylesheet" href="{!! asset('../css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('plugins/chosen/chosen.css') !!}" />
    <link rel="stylesheet" href="{!! asset('plugins/trumbowyg/ui/trumbowyg.min.css') !!}" />
   </head>
    <body>
        <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <br><br><br><br><br><img alt="Logo" class="img-responsive" style="margin-top: -25px" src="/img/log-admin-topnav.png">

            </div>
            <h4>{{trans('app.welcome')}}</h4><br>
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
    </body>
</html>    
    

