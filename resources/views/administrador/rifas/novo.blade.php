
@extends('layouts.master')
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
                                                    <h5 style="font-size: x-large">Nova Rifa
{{--                                                        <a  href="{{route('candidato.curriculo.curso.lista.get')}}" class="btn-sm" style="float:right;">--}}
{{--                                                            <h5>Voltar</h5>--}}
{{--                                                        </a>--}}
                                                    </h5>
                                                    </a>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <!-- <form role="form"> -->
                                                <div class="card-body">
                                                    {{Form::open(['route' => 'administrador.rifas.novo.post', 'method' => 'post'])}}
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


                                                            <div class="col-8">
                                                                <label for="cep">Prêmio</label>
                                                                <input type="text" id="premio" name="premio"  class="form-control" placeholder="Insira o nome do premio">
                                                            </div>

                                                            <div class="col-8"><br>
                                                                <label for="cep">Quantidade</label>
                                                                <input type="text" id="quantidade" name="quantidade" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" placeholder="Insira a quantidade de bilhetes">
                                                            </div>

{{--                                                            <div class="col-8"><br>--}}
{{--                                                                <label for="concluido">Concluido</label>--}}
{{--                                                                <input type="checkbox" id="concluido" name="concluido">--}}
{{--                                                            </div>--}}


{{--                                                            <div class="col-8"><br>--}}
{{--                                                                <label>Inicio do Curso</label>--}}
{{--                                                                <div class="input-group">--}}
{{--                                                                    <div class="input-group-prepend">--}}
{{--                                                                        <span class="input-group-text"><i class="far fa-calendar"></i></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <input type="date" name="inicio_curso" class="form-control" placeholder="Exemplo 10/05/2015">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}


{{--                                                            <div class="col-8"><br>--}}
{{--                                                                <label>Fim do Curso</label>--}}
{{--                                                                <div class="input-group">--}}
{{--                                                                    <div class="input-group-prepend">--}}
{{--                                                                        <span class="input-group-text"><i class="far fa-calendar"></i></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <input type="date" name="fim_curso" class="form-control" placeholder="Exemplo 10/05/2020">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

                                                            <div class="col-5">
                                                                <br>
                                                                <button type="submit" class="btn btn-primary">Salvar</button>
                                                            </div>
                                                        </div>
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

            <script>
                $(function () {

                    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
                    //Datemask2 mm/dd/yyyy
                    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
                    //Money Euro
                    $('[data-mask]').inputmask()

                })
            </script>
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
