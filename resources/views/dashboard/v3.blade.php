@extends('layouts.master')
@include('layouts.footer')

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
    <div class="content-header">
    <div class="content-header">
    <div class="content-header">

      <div class="col-sm-12">
        <div class="card card-primary">
          <div class="card-header">
                <h3 class="card-title">Dados Pessoais</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                       <div class="card-body">
                         <div class="form-group">
                            <div class="row">
                                 <div class="col-8">
                                     <label for="endereco">Endereço</label>
                                     <input type="text" id="endereco" class="form-control" placeholder="Endereco">
                                 </div>
                 
                                 <div class="col-4">
                                     <label for="numero">Numero</label>
                                     <input type="text" id="numero" class="form-control" placeholder="Numero">
                                 </div>
                  
                                 <div class="col-5">
                                     <label for="cep">Cep</label>
                                     <input type="text" id="cep" class="form-control" placeholder="cep">
                                 </div>
                               
                                 <div class="col-5">
                                      <label>Cidade</label>
                                          <select class="form-control">
                                            <option>Maceio</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                          </select>
                                 </div>

                                 <div class="col-2">
                                      <label>Estado</label>
                                          <select class="form-control">
                                            <option>AC</option>
                                            <option>AL</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                          </select>
                                 </div>

                                 <div class="col-3">
                                      <label>Genero</label>
                                          <select class="form-control">
                                            <option>Masculino</option>
                                            <option>Feminimo</option>
                                            <option>Gay</option>
                                            <option>Lesbica</option>
                                            <option>Pablo Vittar</option>
                                          </select>
                                 </div>

                                 <div class="col-3">
                                      <label>Etnia</label>
                                          <select class="form-control">
                                            <option>Preto</option>
                                            <option>Branco</option>
                                            <option>Amarelo</option>
                                            <option>Verde</option>
                                            <option>Mulata</option>
                                          </select>
                                 </div>

                                 <div class="col-3">
                                     <label for="telefone1">Telefone</label>
                                     <input type="text" id="telefone1" class="form-control" placeholder="Telefone">
                                 </div>

                                 <div class="col-3">
                                     <label for="telefone1">Telefone Extra</label>
                                     <input type="text" id="telefone2" class="form-control" placeholder="Telefone">
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
    </div>
    </div>
    </div>


@endsection

@section('javascript')
<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/dist/plugins/chart.js/Chart.min.js"></script>
<script src="/dist/js/demo.js"></script>
<script src="/dist/js/pages/dashboard3.js"></script>
@stop