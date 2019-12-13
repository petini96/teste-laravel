@extends('Painel.Layout.index')
  @section('content')
<!-- content -->
  <section class="content">
      <div class="container-fluid">
          <div class="row align-items-center justify-content-center">
                <div class="col-10">
                    <h1>
                        Edição de Licitação
                    </h1>
                </div>
          </div>
        @foreach ($licitacao as $item)
        <form action="{{route('Painel.Licitacao.update', $item->licitacao_id)}} " method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center">
            <div class="col-10">
                    <h4>Licitação</h4>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label >Código Sequencial:</label>
                    <input type="hidden" value="{{$item->licitacao_id}}" name="id">
                    <input type="text" disabled class="form-control"  id="id" placeholder="{{$item->licitacao_id}}"  value="{{$item->licitacao_id}}">
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
                        <input type="text" id="edital" class="form-control" name="edital" placeholder="{{$item->licitacao_edital}}" value="{{$item->licitacao_edital}}">
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
                        <input id="numeracao" type="text" class="form-control" name="numeracao" placeholder="{{$item->licitacao_numeracao}}" value="{{$item->licitacao_numeracao}}">
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
                                <option value="{{ $modalidade->id}}"
                                @if($modalidade->id == $item->modalidade_id)
                                    selected="selected"
                                @endif
                                >{{ $modalidade->descricao }}</option>
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
                    <input type="hidden" value="{{$item->usuario_id}}" name="id_usuario">
                        <input id="id_usuario" type="text" class="form-control" disabled placeholder="{{$item->usuario_id}}" value="{{$item->usuario_id}}">
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
                            <input type="hidden" value="{{$item->usuario_name}}" name="nome_usuario">
                            <input id="" type="text"  class="form-control" placeholder="{{$item->usuario_name}}" value="{{$item->usuario_name}}">
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
                        <input id="data_criacao" type="date" class="form-control"  name="data_criacao" value="{{$item->licitacao_data_criacao}}">
                        <small  class="form-text text-muted">A data de criação.</small>
                    @csrf

                    </div>
                    @error('data_criacao')
                    <script>
                        aplicaBordaVermelha('data_criacao');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Data de Publicação:</label>
                        <input id="data_publicacao" type="date"   class="form-control" name="data_publicacao" value="{{$item->licitacao_data_publicacao}}">
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
                        <input type="hidden" value="{{$item->licitacao_data_abertura}}" name="data_abertura">
                        <input id="data_abertura" disabled type="date" class="form-control" value="{{$item->licitacao_data_abertura}}">
                        <small  class="form-text text-muted">A data é obrigatória para garantir a integridade.</small>
                    </div>
                    @error('data_abertura')
                    <script>
                        aplicaBordaVermelha('data_abertura');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >Hora Criação:</label>
                    <input type="hidden" value="{{$item->licitacao_hora_criacao}}" name="hora_criacao">
                        <input id="hora_criacao" type="time" disabled class="form-control" value="{{$item->licitacao_hora_criacao}}" >
                        <small  class="form-text text-muted">O hora de criação é fundamental.</small>
                    </div>
                    @error('hora_criacao')
                    <script>
                        aplicaBordaVermelha('hora_criacao');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-3">
                        <div class="form-group">
                            <label >Hora Abertura:</label>
                            <input id="hora_abertura" type="time" class="form-control" name="hora_abertura"  value="{{$item->licitacao_hora_abertura}}">
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
                                <select id="id_local" class="form-control"  name="id_local">
                                    @foreach ($locais as $local)
                                    <option value="{{ $local->id}}"
                                        @if($local->id == $item->local_id)
                                            selected="selected"
                                        @endif
                                        >{{ $local->logradouro }}</option>
                                    @endforeach
                                </select>

                                <small  class="form-text text-muted">Local de licitação é necessário.</small>
                                @csrf
                            </div>
                            @error('id_local')
                            <div class="alert alert-danger">{{ $message }}</div>
                            <script>
                                aplicaBordaVermelha('id_local');
                            </script>
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-5 ">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Objeto:</label>
                        <textarea id="objeto" class="form-control" id="objeto" rows="3" name="objeto" placeholder="{{ $item->licitacao_objeto}}"> {{ $item->licitacao_objeto}}</textarea>
                    </div>
                    @error('objeto')
                    <script>
                        aplicaBordaVermelha('objeto');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <small  class="form-text text-muted">Cadastro do objeto.</small>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Local de Entrega:</label>
                            <textarea class="form-control" id="local_entrega" rows="3" name="local_entrega" placeholder="{{ $item->licitacao_local_entrega}}"> {{ $item->licitacao_local_entrega}}</textarea>
                        </div>
                        @error('local_entrega')
                        <script>
                            aplicaBordaVermelha('local_entrega');
                        </script>
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <small  class="form-text text-muted">Local de Eentrega.</small>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Prazo de Entrega</label>
                        <textarea class="form-control" id="prazo_entrega" rows="3" name="prazo_entrega" placeholder="{{ $item->licitacao_prazo_entrega}}">{{ $item->licitacao_prazo_entrega}}</textarea>
                    </div>
                    @error('prazo_entrega')
                    <script>
                        aplicaBordaVermelha('prazo_entrega');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <small  class="form-text text-muted">Prazo de Entrega.</small>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Condições de Pagamento</label>
                            <textarea class="form-control" id="condicoes_pagamento" rows="3" name="condicoes_pagamento" placeholder="{{ $item->licitacao_condicoes_pagamento}}">{{ $item->licitacao_condicoes_pagamento}}</textarea>
                        </div>
                        @error('condicoes_pagamento')
                        <script>
                            aplicaBordaVermelha('condicoes_pagamento');
                        </script>
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <small  class="form-text text-muted">Condições de Pagamento.</small>
                    </div>

                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Validade de Proposta </label>
                            <textarea class="form-control" id="validade_proposta" rows="3" name="validade_proposta" placeholder="{{$item->licitacao_validade_proposta}}">{{$item->licitacao_validade_proposta}}</textarea>
                        </div>
                        @error('validade_proposta')
                        <script>
                            aplicaBordaVermelha('validade_proposta');
                        </script>
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <small  class="form-text text-muted">Validade de proposta.</small>
                    </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="form-group">
                        <label >Código da Comissão:</label>
                        <select id="id_comissao" class="form-control"  name="id_comissao" >
                            @foreach ($comissoes as $comissao)
                            <option value="{{ $comissao->id}}"
                                @if($comissao->id == $item->comissao_id)
                                    selected="selected"
                                @endif
                                >{{ $comissao->tipo_comissao }}</option>
                            @endforeach
                        </select>

                        <small  class="form-text text-muted">Código Comissão.</small>
                    </div>
                    @error('id_comissao')
                    <script>
                        aplicaBordaVermelha('id_comissao');
                    </script>
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
                <div class="col-5">
                    <div class="form-group">
                        <label >Processo Administrativo:</label>

                        <input id="processo_administrativo" type="text" class="form-control"  placeholder="Enter com o processo" name="processo_administrativo" placeholder="{{$item->licitacao_processo_administrativo}}" value="{{$item->licitacao_processo_administrativo}}">
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

            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary" value="cadastrar" name="cadastrar">Cadastrar</button>
                </div>
            </div>

            </div>

            </form>
            @endforeach
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
