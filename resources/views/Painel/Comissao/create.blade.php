@extends('Painel.Layout.index')
  @section('content')
<!-- content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-10">
                <h1>
                    Cadastro de Comissão
                </h1>
            </div>
        </div>
        <form action="{{route('Painel.Comissao.store')}} " method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center align-items-center">
                <div class="col-10">
                        <h4>Licitação</h4>
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label >Código Sequencial:</label>
                        <input type="hidden" placeholder="{{$id_comissao_gerada}}" name="id" value="{{$id_comissao_gerada}}">
                        <input  type="text" class="form-control" disabled value="{{$id_comissao_gerada}}">
                        <small  class="form-text text-muted">Código sequencial é necessário.</small>
                        @csrf
                        @error('id')
                        <script>
                            aplicaBordaVermelha('id');
                        </script>
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label >Data:</label>
                        <input type="date" class="form-control" name="data"   id="data">
                        <small  class="form-text text-muted">A data de criação.</small>
                    @csrf
                    @error('data')
                    <script>
                        aplicaBordaVermelha('data');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label>Portaria:</label>
                        <input type="text" class="form-control" name="portaria" placeholder="Entre com a portaria" id="portaria">
                        <small  class="form-text text-muted">Numerero do portaria a ser cadastrado.</small>
                    </div>
                    @error('portaria')
                    <script>
                        aplicaBordaVermelha('portaria');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-10">
                    <div class="form-group">
                        <label >Validade:</label>
                        <input type="date" class="form-control" name="validade"   id="validade">
                        <small  class="form-text text-muted">A validade de criação.</small>
                    @csrf
                    @error('validade')
                    <script>
                        aplicaBordaVermelha('validade');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label >Tipo:</label>
                        <select class="form-control" id="tipo_comissao" name="tipo_comissao">
                            <option value="Permanente">Permanente</option>
                            <option value="Temporário">Temporário</option>
                        </select>
                        <small  class="form-text text-muted">A modalidade das licitações.</small>
                    </div>
                    @error('tipo_comissao')
                    <script>
                        aplicaBordaVermelha('tipo_comissao');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input id="file_comissao" type="file" name="file_comissao" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    @error('file_comissao')
                    <script>
                        aplicaBordaVermelha('file_comissao');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


            </div>



            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary" value="cadastrar" name="cadastrar">Cadastrar</button>
                </div>
            </div>
            </form>

        </div>
      </div>
    </section>

  @endsection

