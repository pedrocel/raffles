
@extends('layouts.masterPublic')
@section('content')

    <nav class="navbar navbar-expand navbar-light navbar-white" style="background-image:url({{url('dist/img/fundo.jpg')}})">
        <div class="container" style=" background-color: transparent; ">
            <a href="/" class="navbar-brand">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <h1 class="glow">e-RIFAS</h1>
            </a>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="{{ route('login') }}"  class="glow">LOGIN</a>
                            </li>
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="{{ route('register') }}"  class="glow">   REGISTRO</a>
                            </li>
                        @endauth
                    </div>
            @endif
                <!-- Notifications Dropdown Menu -->
            </ul>
        </div>
    </nav>
{{--    <img src="dist/img/fundo.png" >--}}
{{--    <img src="dist/img/fundo.jpg" >--}}
    <!-- Content Header (Page header) -->
{{--    <center><img src="https://rifeme.com.br/wp-content/uploads/2020/04/cureamarina.jpeg"></center>--}}
    <section class="content" style=" background-image:url({{url('dist/img/fundo.jpg')}})">
        <h1 class="glow">____________________________________________________________________________________________</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="background-color: transparent; border-radius: 25px">
                        <div class="card-body" >
                            <div class="row">
                                @foreach($rifas as $rifa)
                                    <div class="col-sm-4">
                                        <div class="position-relative p-3 bg-gray" style="margin-bottom: 20px; width: auto; height: auto; border-radius: 25px;" >
                                            <img src="https://www.w3schools.com/css/paris.jpg" width="auto" height="auto" style="border-radius: 8px">

                                            <div class="ribbon-wrapper">
                                                <br>
                                                <b>Prêmio: </b>{{$rifa->premio}}
                                            </div>
{{--                                            <center><img src="https://rifeme.com.br/wp-content/uploads/2020/04/cureamarina.jpeg"></center>--}}
                                            Quantidade: {{$rifa->quantidade}} <br>
                                            Vendidos: {{$rifa->quantidade}} <br>
                                            <small>Status: {{$rifa->status->nome_status}}</small><br><br>
                                            <a  class="restaurant-box-footer btn" style="margin-bottom: 20px; " href="{{route('public.raffle.bilhetes.get', $rifa->id)}}">COMPRAR RIFA</a>
                                        </div>

                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="/dist/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/dist/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/dist/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/dist/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
@stop