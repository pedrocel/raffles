
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
                <h3 class="card-title">Nova Organização</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
             
                       <div class="card-body">
                          {{Form::open(['route' => 'administrador.organizacao.novo.post', 'method' => 'post'])}}
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
                                     <label for="endereco">Nome da Organização</label>
                                     <input type="text" id="nome_organizacao" name="nome_organizacao" class="form-control" required placeholder="Insira o nome da Organização">
                                 </div>
                                 
                 
                                 <div class="col-8"><br>
                                     <label for="numero">Rota da Organização</label>
                                     <input type="text" id="rota_organizacao"  name="rota_organizacao" class="form-control" required placeholder="Insira o nome da rota da organizacao">
                                 </div>
                                 
                           
                                  

                                 <div class="col-8"><br>
                                     <label for="cep">Foto da organizacao</label>
                                     <input type="text" id="foto_organizacao" name="foto_organizacao" class="form-control" required placeholder="Insira a foto da organização">
                                 </div>
                               
                                 <div class="col-8"><br>
                                 <label for="tipo_organizacao">Tipo da organizacao</label>

                                          <select class="form-control" name="tipo_organizacao" id="tipo_organizacao">
                                    <option value="">- Categoria -</option>
                                    @foreach($tipo_org as $org)
                                        <option value="{{$org->id}}">- {{$org->tipo_organizacao}} -</option>
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