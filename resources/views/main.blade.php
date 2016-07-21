@include('common._head')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            @include('common._header')
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
           @include('common._sidebar') 
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
         @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @include('common._footer')
    </div>
       @include('common._scripts')
    </body>
</html>
