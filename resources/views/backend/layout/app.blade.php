<!DOCTYPE html>
<html lang="en">
    <!-- Head section -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard</title>
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('backend/css/ajax_libs_toastr.js_latest_toastr.css') }}">
        <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('backend/js/use.fontawesome.com_releases_v6.1.0_js_all.js') }}" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <!--header Navbar -->
        @include('backend.layout.header')

        <div id="layoutSidenav">
            <!--Side Navbar -->
            @include('backend.layout.sideNave')

            <div id="layoutSidenav_content">
                <main>
                    <!--start main content -->
                    @yield('content')
                    <!--end main content -->
                </main>
                <!--footer -->
                @include('backend.layout.footer')
            </div>
        </div>
        <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/scripts.js')}}"></script>
        <script src="{{ asset('backend/js/cdnjs.cloudflare.com_ajax_libs_Chart.js_2.8.0_Chart.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('backend/js/cdn.jsdelivr.net_npm_simple-datatables@latest.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/assets/js/ajax_libs_toastr.js_latest_toastr.min.js')}}"></script>

        <script src="{{ asset('backend/js/ajax_libs_toastr.js_latest_toastr.min.js') }}"></script>
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;

               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;

               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;

               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
            @endif
           </script>
    </body>
</html>
