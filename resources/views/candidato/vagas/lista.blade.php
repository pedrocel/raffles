@extends('layouts.candidato')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> Vagas</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="col-lg-6">
                            @foreach($vagas as $vaga)


                        <div class="col-md-12 col-sm-6 col-12">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="fas fa-graduation-cap" style="font-size: 48px;"></i></span>

                                <div class="info-box-content">

                                                <span class="info-box-text">{{$vaga->nome_vaga}}</span>

                                    <div style="float:right;" class="card-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu float-right" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">

                                                <center>
                                                                                <a  class="btn badge-info btn-sm"  href="#">
                                                                                    <i class="fas fa-edit">
                                                                                        &#160;   Detalhes &#160;
                                                                                    </i>

                                                                                </a>
                                                </center>
                                                <center>
                                                    {{--                                                                                        <a  class="btn btn-danger btn-sm" href="{{route('candidato.curriculo.curso.excluir.post', $curso->id)}}">--}}
                                                    {{--                                                                                        <i class="fas fa-trash">--}}
                                                    {{--                                                                                        </i>--}}

                                                    {{--                            {{Form::open(['route'=>['candidato.curriculo.curso.excluir.post', $curso->id],'method'=>'post','onSubmit'=>"if(!confirm('Deseja deletar esse tipo de documento?')){return false;}"])}}--}}
                                                    {{--                            <center>--}}
                                                    {{--                                <input type="hidden" name="id" value="{{$curso->id}}">--}}
                                                    {{--                                <button type="submit" class="btn red"><i class="fas fa-trash">  Excluir</i></button>--}}
                                                    {{--                            </center>--}}
                                                    {{--                            {{Form::close()}}--}}
                                                    {{--                                                                                        </a>--}}
                                                </center>


                                            </div>
                                        </div>

                                    </div>
                                    <span class="info-box-number">Setor: {{$vaga->setor->nome_setor}}</span>
                                    <h7></h7>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 99%"></div>
                                    </div>
                                    <span class="progress-description">

                                                                        Publicado em: {{\Carbon\Carbon::parse($vaga->createed_at)->format('d/m/Y')}}

                                                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                            @endforeach
                        </div>
{{--                    </div>--}}
                </section>

            </div>
        </section>
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







