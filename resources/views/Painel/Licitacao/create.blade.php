@extends('Painel.Layout.index')
  @section('content')
<!-- content -->

  <section class="content">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-10">
                <h1>
                    Cadastro de Licitação
                </h1>
            </div>
        </div>
        <form action="{{route('Painel.Licitacao.store')}} " method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center align-items-center">
                <div class="col-10">
                        <h4>Licitação</h4>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >Código Sequencial:</label>
                        <input type="hidden" placeholder="{{$id_licitacao_gerado}}" name="id" value="{{$id_licitacao_gerado}}">
                        <input  type="text" class="form-control" disabled value="{{$id_licitacao_gerado}}">
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
                <div class="col-4">
                    <div class="form-group">
                        <label>Edital:</label>
                        <input type="text" class="form-control" name="edital" placeholder="Entre com o número do Edital" id="edital">
                        <small  class="form-text text-muted">Numerero do edital a ser cadastrado.</small>
                    </div>
                    @error('edital')
                    <script>
                        aplicaBordaVermelha('edital');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >Numeração:</label>
                        <input type="text" id="numeracao" class="form-control " name="numeracao" placeholder="Enter com o processo">
                        <small  class="form-text text-muted">Numeração do Edital.</small>
                    </div>
                    @error('numeracao')
                    <script>
                        aplicaBordaVermelha('numeracao');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >Modalidade:</label>
                        <select class="form-control" id="id_modalidade" name="id_modalidade">
                            @foreach ($modalidades as $modalidade)
                                <option value="{{ $modalidade->id}}">{{ $modalidade->descricao}}</option>
                            @endforeach
                        </select>
                        <small  class="form-text text-muted">A modalidade das licitações.</small>
                    </div>
                    @error('id_modalidade')
                    <script>
                        aplicaBordaVermelha('id_modalidade');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label >Código do Usuário:</label>
                        <input type="hidden" name="id_usuario" placeholder="Enter com o processo" value="{{$user->id}}" id="id_usuario">
                        <input type="text" disabled class="form-control" name="id_usuario2" placeholder="Enter com o processo" value="{{$user->id}}">
                        <small  class="form-text text-muted">O código do usuário que esta logado.</small>
                    </div>
                    @error('id_usuario')
                    <script>
                        aplicaBordaVermelha('id_usuario');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-5">
                    <div class="form-group">
                        <label >Nome do Usuário:</label>
                        <input type="text" disabled class="form-control" name="nome_usuario" placeholder="Enter com o processo" value="{{$user->name}}">
                        <small  class="form-text text-muted">O nome do usuário que esta logado.</small>
                    </div>
                    @error('nome_usuario')
                    <script>
                        aplicaBordaVermelha('nome_usuario');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-10">
                    <hr>
                </div>

            </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-10">
                    <h4>Datas</h4>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label >Data de Criação:</label>
                    <input type="date" class="form-control" name="data_criacao"   id="data_criacao">
                    <small  class="form-text text-muted">A data de criação.</small>
                @csrf
                @error('data_criacao')
                <script>
                    aplicaBordaVermelha('data_criacao');
                </script>
                <p class="text-danger">{{ $message }}</p>
                @enderror


                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Data de Publicação:</label>
                    <input type="date"  id="data_publicacao" class="form-control" name="data_publicacao" placeholder="Entre com a data da publicação." >
                    <small  class="form-text text-muted">A data é obrigatória para garantir a integridade.</small>
                </div>
                @error('data_publicacao')
                <script>
                    aplicaBordaVermelha('data_publicacao');
                </script>
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-4">
                <div class="form-group">
                    <label >Data de Abertura:</label>
                    <input type="hidden"  name="data_abertura"  value="<?php print date('d/m/Y');?>">
                    <input disabled type="datetime" class="form-control"  placeholder="Enter com o processo" value="<?php print date('d/m/Y');?>">
                    <small  class="form-text text-muted">A data é obrigatória para garantir a integridade.</small>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label >Hora Criação:</label>
                    <input type="hidden" name="hora_criacao" value="<?php print date('H:i'); ?>">
                    <input type="time" class="form-control"  disabled placeholder="Enter com o processo" value="<?php print date('H:i'); ?>">
                    <small  class="form-text text-muted">O hora de criação é fundamental.</small>
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label >Hora Abertura:</label>
                    <input id="hora_abertura" type="time" class="form-control" name="hora_abertura" >
                    <small  class="form-text text-muted">Horas são fundamentais.</small>
                </div>
                @error('hora_abertura')
                <script>
                    aplicaBordaVermelha('hora_abertura');
                </script>
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-10">
                <hr>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center">
                    <div class="col-10">
                            <h4>Outras Informações</h4>
                    </div>

                    <div class="col-5 ">
                        <div class="col-12">
                            <div>
                                <div class="form-group">
                                    <label >Local de licitação:</label>
                                    <select class="form-control"  name="id_local">
                                        @foreach ($locais as $local)
                                            <option value="{{ $local->id}}">{{ $local->logradouro}}</option>
                                        @endforeach
                                    </select>

                                    <small  class="form-text text-muted">Local de licitação é necessário.</small>
                                    @csrf
                                    @error('objeto')
                                        <div class="alert alert-danger">{{ $$message  }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-5 ">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Objeto:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="objeto"></textarea>
                            </div>
                            <small  class="form-text text-muted">Cadastro do objeto.</small>
                    </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Local de Entrega:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="local_entrega"></textarea>
                        </div>
                        <small  class="form-text text-muted">Local de Eentrega.</small>
                </div>
                <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Prazo de Entrega</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="prazo_entrega"></textarea>
                        </div>
                        <small  class="form-text text-muted">Prazo de Entrega.</small>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Condições de Pagamento</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="condicoes_pagamento"></textarea>
                        </div>
                        <small  class="form-text text-muted">Condições de Pagamento.</small>
                    </div>

                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Validade de Proposta </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="validade_proposta"></textarea>
                        </div>
                        <small  class="form-text text-muted">Validade de proposta.</small>
                    </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">

                    <div class="form-group">
                        <label >Código da Comissão:</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_comissao">
                            @foreach ($comissoes as $comissao)
                                <option value="{{ $comissao->id}}">{{ $comissao->tipo_comissao}}</option>
                            @endforeach
                        </select>
                        <small  class="form-text text-muted">Código Comissão.</small>
                    </div>


                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label >Processo Administrativo:</label>

                        <input type="text" class="form-control" id="processo_administrativo" placeholder="Enter com o processo" name="processo_administrativo">
                        <small  class="form-text text-muted">Processo Administrativo.</small>
                    </div>
                    @error('processo_administrativo')
                    <script>
                        aplicaBordaVermelha('processo_administrativo');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-10">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input id="file_edital" type="file" name="file_edital" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                        @error('file_edital')
                        <script>
                            aplicaBordaVermelha('file_edital');
                        </script>
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

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

