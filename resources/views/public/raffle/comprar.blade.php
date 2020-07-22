
@extends('layouts.masterPublic')
@section('content')


    <nav class="navbar navbar-expand navbar-light navbar-white">
        <div class="container">

            <span class="brand-text font-weight-light">e-Rifas</span>
            </a>
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Help
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">FAQ</a>
                        <a class="dropdown-item" href="#">Support</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="{{ route('register') }}" class="nav-link">Registrar</a>
                            </li>
                        @endauth
                    </div>
            @endif
            <!-- Notifications Dropdown Menu -->
            </ul>
        </div>
    </nav>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="content-header">
                                        <div class="col-sm-12">
                                            <div class="card card-primary">
                                            {{--                                                <div class="card-header">--}}
                                            {{--                                                    <h5 style="font-size: x-large">Editar Curso--}}
                                            {{--                                                        <a  href="{{route('candidato.curriculo.curso.lista.get')}}" class="btn-sm" style="float:right;">--}}
                                            {{--                                                            <h5>Voltar</h5>--}}
                                            {{--                                                        </a>--}}
                                            {{--                                                    </h5>--}}
                                            {{--                                                    </a>--}}
                                            {{--                                                </div>--}}
                                            <!-- /.card-header -->
                                                <!-- form start -->
                                                <!-- <form role="form"> -->
                                                <div class="card-body">
                                                    {{Form::open(['route' => ['public.raffle.comprar.post', $bilhete], 'method' => 'post'])}}
                                                    @if($errors->any())
                                                        <div class="card-body">
                                                            <div class="alert alert-danger alert-dismissible">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <h5><i class="icon fas fa-ban"></i> Alerta</h5>

                                                                @foreach($errors->all() as $error)
                                                                    {{ $error }}<br>
                                                                @endforeach

                                                            </div>
                                                        </div>

                                                    @elseif(session()->has('success'))
                                                        {{ session('success') }}
                                                    @endif

                                                    <div class="form-group">
                                                        <div class="row">


                                                            <div class="col-12">
                                                                <label for="comprador_nome">Nome</label>
                                                                <input type="text" id="comprador_nome" name="comprador_nome"  class="form-control" placeholder="Insira o nome do comprador">
                                                            </div>

                                                            <div class="col-12"><br>
                                                                <label for="comprador_telefone">Telefone</label>
                                                                <input type="text" id="comprador_telefone" name="comprador_telefone"  class="form-control" placeholder="Insira o telefone do comprador">
                                                            </div>

                                                            <div class="col-5">
                                                                <br>
                                                                <button type="submit" class="btn btn-primary">Solicitar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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

    {!!  Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js')!!}
    <script type="text/javascript">
        $("#data").mask("00/00/0000");
        $("#data1").mask("00/00/0000");
    </script>
@stop
