@extends('layouts.candidato')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="content-header">
                <div class="content-header">
                    <div class="content-header">
                        <div class="content-header">
                            <div class="content-header">
                                <div class="content-header">
                                    <div class="content-header">
                                        <div class="col-sm-12">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h5>Lista de Idiomas   <a  href="{{route('candidato.curriculo.idioma.novo.get')}}" class="btn-sm btn-secondary" style="float:right;"> <h5>Adicionar Novo Idioma</h5></a> </h5>
                                                    </a>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <!-- <form role="form"> -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        @foreach($idiomas as $idioma)
                                                            <div class="col-md-12 col-sm-6 col-12">
                                                                <div class="info-box bg-info">
                                                                    <span class="info-box-icon"><i class="fas fa-file" style="font-size: 48px;"></i></span>

                                                                    <div class="info-box-content">

                                                                        <span class="info-box-text">{{$idioma->idioma->idioma}} - id: {{$idioma->idioma->id}}</span>

                                                                        <div style="float:right;" class="card-tools">
                                                                            <!-- button with a dropdown -->
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fas fa-bars"></i></button>
                                                                                <div class="dropdown-menu float-right" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">

                                                                                    <center>
                                                                                        <a  class="btn badge-info btn-sm"  href="{{route('candidato.curriculo.idioma.editar.get', $idioma->idioma->id)}}">
                                                                                            <i class="fas fa-edit">
                                                                                                &#160;   Editar &#160;
                                                                                            </i>

                                                                                        </a>
                                                                                    </center>
                                                                                    <center>
                                                                                        {{--                                                                                        <a  class="btn btn-danger btn-sm" href="{{route('candidato.curriculo.curso.excluir.post', $curso->id)}}">--}}
                                                                                        {{--                                                                                        <i class="fas fa-trash">--}}
                                                                                        {{--                                                                                        </i>--}}

                                                                                        {{--                                                                                        {{Form::open(['route'=>['candidato.curriculo.curso.excluir.post', $curso->id],'method'=>'post','onSubmit'=>"if(!confirm('Deseja deletar esse tipo de documento?')){return false;}"])}}--}}
                                                                                        <center>
                                                                                            {{--                                                                                            <input type="hidden" name="id" value="{{$curso->id}}">--}}
                                                                                            {{--                                                                                            <button type="submit" class="btn red"><i class="fas fa-trash">  Excluir</i></button>--}}
                                                                                        </center>
                                                                                        {{--                                                                                        {{Form::close()}}--}}
                                                                                        {{--                                                                                        </a>--}}
                                                                                    </center>


                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        {{--                                                                    <td class="project-actions text-right">--}}
                                                                        {{--                                                                        <a style="float:right;" class="btn btn-danger btn-sm" href="#">--}}
                                                                        {{--                                                                            <i class="fas fa-trash">--}}
                                                                        {{--                                                                            </i>--}}
                                                                        {{--                                                                            Delete--}}
                                                                        {{--                                                                        </a>--}}
                                                                        {{--                                                                    </td>--}}
                                                                        <span class="info-box-number">Nivel: {{$idioma->idioma->nivel}}</span>

                                                                        <h7></h7>

                                                                        <div class="progress">
                                                                            <div class="progress-bar" style="width: 99%"></div>
                                                                        </div>

                                                                    </div>
                                                                    <!-- /.info-box-content -->
                                                                </div>
                                                                <!-- /.info-box -->
                                                            </div>
                                                            <!-- /.col -->

                                                            <!-- /.col -->

                                                            <!-- /.col -->

                                                            <!-- /.col -->
                                                        @endforeach
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
