
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
    <section class="content">
        <div class="container-fluid">

            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                                <div class="col-12">
                                    <img src="https://adminlte.io/themes/v3/dist/img/prod-1.jpg" class="product-image" alt="Product Image">

                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3 class="my-3">{{$rifa->premio}}</h3>
                                <p>Informações do produto a ser rifado</p>

                                <hr>
                                <h4>Quantidade: {{$rifa->quantidade}}</h4>

                                <div class="bg-gray py-2 px-3 mt-4">
                                    <h2 class="mb-0">
                                        R$100.00
                                    </h2>
{{--                                    <h4 class="mt-0">--}}
{{--                                        <small>Ex Tax: $80.00 </small>--}}
{{--                                    </h4>--}}
                                </div>

                                <div class="mt-4">
                                    <div class="btn btn-primary btn-lg btn-flat">
                                        <i class="fas fa-percent fa-lg mr-2"></i>
                                        51,6 vendidos
                                    </div>
                                </div>

{{--                                <div class="mt-4 product-share">--}}
{{--                                    <a href="#" class="text-gray">--}}
{{--                                        <i class="fab fa-facebook-square fa-2x"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="text-gray">--}}
{{--                                        <i class="fab fa-twitter-square fa-2x"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="text-gray">--}}
{{--                                        <i class="fas fa-envelope-square fa-2x"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="text-gray">--}}
{{--                                        <i class="fas fa-rss-square fa-2x"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

                            </div>
                        </div>
                        <div class="row mt-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Detalhes</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Informações</a>
                                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Sorteio</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Detalhes do produto que está sendo rifado</div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Informações sobre o sistema de rifas</div>
                                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> O produto será sorteado em um determinado dia</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>

            <div class="col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Bilhetes</h3>
                    </div>
                </div>
<center>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <a  class="btn bg-success-gradient btn-group-sm" style="margin-bottom: 20px">vendido</a>
                            <a  class="btn bg-gray btn-group-sm" style="margin-left: 20px; margin-bottom: 20px;">Disponivel</a>
                            <a  class="btn bg-warning btn-group-sm" style="margin-left: 20px; margin-bottom: 20px;">Reservado</a>
                            <thead>
                            <tr>
                                <!-- <th style="width: 10px">#</th> -->
                                <center> </center>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bilhetes as $rifa)

                                @if($rifa->id_status == 3)
                                    &nbsp
                                    <a  class="btn bg-success-gradient btn-group-sm" style="margin-bottom: 20px" href="{{route('public.raffle.comprar.get', $rifa->id)}}">{{$rifa->id}}</a>
                                    &nbsp
                                @elseif($rifa->id_status == 4)
                                    &nbsp
                                    <a  class="btn bg-warning btn-group-sm" style="margin-bottom: 20px" >{{$rifa->id}}</a>
                                    &nbsp
                                @else
                                    &nbsp
                                    <a  class="btn bg-gray btn-group-sm" style="margin-bottom: 20px" href="{{route('public.raffle.comprar.get', $rifa->id)}}">{{$rifa->id}}</a>
                                    &nbsp
                                @endif
                                {{--                                   </tr>--}}
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</center>
            </div>
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