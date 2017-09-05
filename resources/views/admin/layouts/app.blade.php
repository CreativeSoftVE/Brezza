<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - @yield('title') </title>

    
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
