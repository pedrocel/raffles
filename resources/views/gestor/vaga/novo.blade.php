
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
                                                    <h3 class="card-title">Nova Vaga</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <!-- <form role="form"> -->

                                                <div class="card-body">
                                                    {{Form::open(['route' => ['vagas', $id_organizacao], 'method' => 'post'])}}
                                                    @if($errors->any())
                                                        @foreach($errors->all() as $error)
                                                            {{ $error }}
                                                        @endforeach
                                                    @elseif(session()->has('success'))
                                                        {{ session('success') }}
                                                    @endif

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-8"><br>
                                                                <label for="nome_vaga">Nome da Vaga</label>
                                                                <input type="text" id="nome_vaga" name="nome_vaga" class="form-control" required placeholder="Insira o titulo da vaga">
                                                            </div>


                                                            <div class="col-8"><br>
                                                                <label for="requisitos">Requisitos</label>
                                                                <input type="text" id="requisitos"  name="requisitos" class="form-control" required placeholder="Requisitos da vaga">
                                                            </div>

                                                            <div class="col-8"><br>
                                                                <label for="id_setor">Setor da Vaga</label>

                                                                <select class="form-control" name="id_setor" id="id_setor">
                                                                    <option value="">- Setor -</option>
                                                                    @foreach($setores as $setor)
                                                                        <option value="{{$setor->id}}">- {{$setor->nome_setor}} -</option>
                                                                    @endforeach
                                                                    <br>
                                                                </select>
                                                            </div>

                                                        </div> <!--fim da row -->
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
