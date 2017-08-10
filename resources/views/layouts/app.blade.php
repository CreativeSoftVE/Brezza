<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - @yield('title') </title>


    <link rel="stylesheet" href="{!! secure_asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! secure_asset('css/app.css') !!}" />

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->


<script src="{!! secure_asset('js/bootstrap.js') !!}" type="text/javascript"></script>
<script src="{!! secure_asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
