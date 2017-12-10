<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - @yield('title') </title>
    
    <!-- favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
      <link rel="manifest" href="/favicons/manifest.json">
      <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#00257b">
      <meta name="theme-color" content="#ffffff">
      
    
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

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('admin.layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('admin.layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! secure_asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('js/bootstrap.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('plugins/chosen/chosen.jquery.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('plugins/trumbowyg/trumbowyg.js') !!}" type="text/javascript"></script>

<script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/bootstrap.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('plugins/chosen/chosen.jquery.js') !!}" type="text/javascript"></script>
<script src="{!! asset('plugins/trumbowyg/trumbowyg.js') !!}" type="text/javascript"></script>
@section('scripts')
@show

</body>
</html>
