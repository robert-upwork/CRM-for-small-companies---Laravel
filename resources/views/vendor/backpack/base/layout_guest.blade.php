<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('backpack::inc.head')
</head>
<body class="hold-transition {{ config('backpack.base.skin') }} fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper no-margin no-padding">

        <!-- Content Header (Page header) -->
         @yield('header')

        <!-- Main content -->
        <section class="content">

          @yield('content')

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer m-l-0 text-sm">
        @include('backpack::inc.footer')
      </footer>
    </div>
    <!-- ./wrapper -->

    @yield('before_scripts')
    @stack('before_scripts')

    @include('backpack::inc.scripts')
    @include('backpack::inc.alerts')

    @yield('after_scripts')
    @stack('after_scripts')
    <script>
        $.ajax({
            type:'get',
            url:'https://ipinfo.io/json?token=ec390afea81cee',
            dataType: "jsonp",
            success:function(resp){
                console.log(resp);
                $("input[name='country']").val(resp['country']);
            },
            fail:function(error){
                console.log(error);
            }
        });

    </script>
    <!-- JavaScripts -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
