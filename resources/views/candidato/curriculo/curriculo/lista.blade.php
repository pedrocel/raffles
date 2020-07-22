@extends('layouts.candidato')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> Meu Curriculo</h1>
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
                <!-- Left col -->
                <section class="col-lg-7">

                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados Pessoais</h3>
                            <div class="card-tools">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="direct-chat-messages">
                                <h6><center>Nome: {{$usuario->name}}</center></h6>
                                <h6><center>Email: {{$usuario->email}}</center></h6>
                                <h6><center>CPF - RG</center></h6>
                                <h6><center>Telefone:</center></h6>
                                <h6><center>Linkedin:</center></h6>
                                <h6><center>ENDEREÇO</center></h6>
                                <h6><center><li>Rua: numero</li></center></h6>
                                <h6><center><li>Logadouro</li></center></h6>
                            </div>
                        </div>
                    </div>

                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h5 class="car  d-title">Cursos Extra</h5>
                            <div class="card-tools">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="direct-chat-messages">
                                @foreach($cursos as $curso)
                                    @if($curso ->curso->tipoCurso->nome_tipo_curso == "Curso Extra")
                                        <div class="col-lg-12 col-6">
                                            <div class="small-box bg-white-gradient">
                                                <div class="inner">
                                                    <h5>{{$curso->curso->nome_curso}}</h5>
                                                    <li>{{$curso->curso->tipoCurso->nome_tipo_curso}}</li>
                                                    <li>{{$curso->curso->instituicao}}</li>
                                                    <li>{{$curso->curso->inicio_curso}}</li>
                                                    <li>{{$curso->curso->fim_curso}}</li>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <section class="col-lg-5 connectedSortable">
                    <div class="small-box bg-primary-gradient">
                        <div class="card-header">
                            <h4 class="boox-title">Graduação</h4>
                        </div>
                        <div class="inner">
                            @foreach($cursos as $curso)
                                @if($curso ->curso->tipoCurso->nome_tipo_curso != "Curso Extra")
                            <div class="col-lg-12 col-6">
                                <div class="small-box bg-primary-gradient">
                                    <div class="inner">
                                        <h5>{{$curso->curso->nome_curso}}</h5>
                                        <li>{{$curso->curso->tipoCurso->nome_tipo_curso}}</li>
                                        <li>{{$curso->curso->instituicao}}</li>
                                        <li>{{$curso->curso->inicio_curso}}</li>
                                        <li>{{$curso->curso->fim_curso}}</li>
                                    </div>
                                </div>
                            </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="small-box bg-info-gradient">
                        <div class="card-header">
                            <h4 class="card-title">Experiências Profissionais</h4>
                        </div>
                        <div class="inner">
                            @foreach($experiencias as $experiencia)
                                <div class="col-lg-12 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info-gradient">
                                        <div class="inner">
                                            <h5>{{$experiencia->experiencia->nome_empresa}}</h5>
                                            <li>{{$experiencia->experiencia->cargo}}</li>
                                            <li>{{$experiencia->experiencia->funcao}}</li>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="small-box bg-success-gradient">
                        <div class="card-header">
                            <h4 class="card-title">Idiomas</h4>
                        </div>
                        <div class="inner">
                            @foreach($idiomas as $idioma)
                                <div class="col-lg-12">
                                    <div class="small-box bg-success-gradient">
                                        <div class="inner">
                                            <h6>{{$idioma->idioma->idioma}} Nivel {{$idioma->idioma->nivel}}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
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



