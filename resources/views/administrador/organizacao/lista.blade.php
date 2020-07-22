
@extends('layouts.master') 
@section('content')


      <div class="content-wrapper">
                  <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="content-header">

            <div class="col-sm-12">
                    <div class="card card-primary">
                      <div class="card-header">
                            <h3 class="card-title">Lista de Organizações</h3>
                      </div>
                    </div>

                  <div class="card">  
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <!-- <th style="width: 10px">#</th> -->
                            <th><center>Nome da Organização</center></th>
                            <th><center>Rota da Organização</center></th>
                            <th><center>Tipo da Organização</center></th>
                            <th style="width: 20px"><center>Status</center></th>
                            <th style="width: 40px"><center>Editar</center></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($organizacoes as $organizacao)
                          <tr>
                            <td><center>{{$organizacao->nome_organizacao}}</center></td>
                            <td><center>{{$organizacao->rota_organizacao}}</center></td>
                            <td><center>{{$organizacao->tipoOrganizacao->tipo_organizacao}}</center></td>
                            @if($organizacao->ativo == 1)
                            <td><center><button class="btn btn-primary">Desativar</center></td>
                            @else
                            <td><center><button class="btn btn-primary">Ativar</center></td>
                            @endif
                            <td><center><button class="btn btn-primary">Editar</center></button>

                          </tr>
                        @endforeach        
                        </tbody>
                      </table>
                          </div>
                        {{$organizacoes->appends(request()->all())->render()}}
                        </div>
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