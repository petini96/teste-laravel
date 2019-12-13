@extends('Painel.Layout.index')
  @section('content')
<!-- content -->
  <section class="content">
      <div class="container-fluid">
        <h1>
            Cadastro Público
        </h1>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-10">
                <form class="row align-items-center justify-content-center" action="/Painel/ConcorrenciaPublica/cadastrar" method="POST">
                            <div class="col-5">
                                <div class="form-group">
                                    <label >Objeto:</label>
                                    <input type="text" class="form-control"  placeholder="Entre com o objeto" name="objeto">
                                    <small  class="form-text text-muted">O objeto é o item principal a ser cadastrado.</small>
                                @csrf
                                @error('objeto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-5">
                                    <div class="form-group">
                                        <label>Data:</label>
                                        <input type="date" class="form-control" name="data" placeholder="Entre com a data">
                                        <small  class="form-text text-muted">A data é obrigatória para garantir a integridade.</small>
                                    </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label >Hora:</label>
                                    <input type="time" class="form-control" name="hora" placeholder="Entre com a hora">
                                    <small  class="form-text text-muted">A hora faz parte da composição de uma licitação.</small>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label >Processo:</label>
                                    <input type="text" class="form-control" name="processo" placeholder="Enter com o processo">
                                    <small  class="form-text text-muted">O processo é fundamental.</small>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label >Edital:</label>
                                    <input type="file" class="form-control" name="edital" placeholder="Enter email">
                                    <small class="form-text text-muted">Selecione o edital a ser cadastrado.</small>
                                </div>
                            </div>
                            <div class="col-5 text-center">
                                    <button type="submit" class="btn btn-primary" value="cadastrar" name="cadastrar">Cadastrar</button>
                            </div>



                        </form>
                </div>
            </div>

        </div>
      </div>
    </section>
<!-- end content -->
  @endsection

<!-- Small boxes (Stat box) -->
<!-- <div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>0</h3>
        <p>Nova Licitação: </p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div> -->
