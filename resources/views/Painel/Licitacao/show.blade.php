@extends('Painel.Layout.index')
  @section('content')



    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-10 my-3">
                <h1>
                    Visualização
                </h1>
            </div>

                @foreach ($licitacao as $item)
                <div class="card col-5">
                        <div class="card-header text-white" style="background-color:#343a40">
                            <h4>
                                Licitação
                            </h4>
                        </div>
                        <div class="card-body">
                                <P>
                                    <strong>Edital: </strong>{{ $item->licitacao_edital }} <br>
                                    <strong>Numeração:</strong>{{ $item->licitacao_numeracao }}<br>
                                    <strong>Data_criacao:</strong>{{ $item->licitacao_data_criacao }}<br>
                                    <strong>Data_publicacao:</strong>{{ $item->licitacao_data_publicacao }}<br>
                                    <strong>Data_abertura:</strong>{{ $item->licitacao_data_abertura }}<br>
                                    <strong>Hora_criacao:</strong>{{ $item->licitacao_hora_criacao }}<br>
                                    <strong>Hora_abertura:</strong>{{ $item->licitacao_hora_abertura }}<br>
                                    <strong>Objeto: </strong>{{ $item->licitacao_objeto  }}<br>
                                    <strong>Local_entrega: </strong>{{ $item->licitacao_local_entrega  }}<br>
                                    <strong>Prazo_entrega: </strong>{{ $item->licitacao_prazo_entrega  }}<br>
                                    <strong>Condicoes_pagamento:</strong>{{ $item->licitacao_condicoes_pagamento  }}<br>
                                    <strong>Validade_proposta:</strong>{{ $item->licitacao_validade_proposta  }}<br>
                                    <strong>Processo_administrativo:</strong>{{ $item->licitacao_processo_administrativo  }}<br>
                                </P>
                                <a href="/{{ $item->licitacao_file_edital }}" alt="" style="color:#343A40">
                                    <span style="font-size:4em";>
                                        <i class="fas fa-file-pdf"></i>
                                    </span>
                                </a>
                        </div>
                </div>


                <div class="card col-5">
                    <div class="card-header  text-white" style="background-color:#343a40">
                            <h4>
                            Comissão
                        </h4>
                    </div>
                    <div class="card-body">
                            <p>
                                <strong>Id:</strong>{{ $item->comissao_id  }}<br/>
                                <strong>Data:</strong>{{ $item->comissao_data }}<br/>
                                <strong>Portaria:</strong>{{ $item->comissao_portaria  }}<br/>
                                <strong>Validade:</strong>{{ $item->comissao_validade }}<br/>
                                <strong>Tipo de Comissão:</strong>{{ $item->comissao_tipo_comissao }}<br/>
                                <strong>Arquivo:</strong>{{ $item->comissao_arquivo }}<br/>
                                <strong>Arquivo Atual:</strong>{{ $item->comissao_arquivo_atual }}<br/>
                                <strong>Criado:</strong>{{ $item->comissao_created_at }}<br/>
                                <strong>Modificado:</strong> {{ $item->comissao_updated_at }}<br/>
                            </p>
                    </div>
                </div>





                <div class="card col-5" >
                    <div class="card-header text-white" style="background-color:#343a40">
                            <h4>
                                Local
                            </h4>
                    </div>
                    <div class="card-body">
                            <p>
                                <strong>Id:</strong>{{ $item->local_id  }}<br/>
                                <strong>Logradouro:</strong>{{ $item->local_logradouro  }}<br/>
                                <strong>Número:</strong>{{ $item->local_numero  }}<br/>
                                <strong>Complemento:</strong>{{ $item->local_complemento  }}<br/>
                                <strong>Bairro:</strong> {{ $item->local_bairro  }}<br/>
                            </p>
                    </div>
                </div>
                <div class="card col-5">
                    <div class="card-header  text-white" style="background-color:#343a40">
                            <h4>
                                Usuário
                            </h4>
                    </div>
                    <div class="card-body">
                            <P>
                                <strong>Id:</strong>{{ $item->usuario_id  }}<br/>
                                <strong>Nome:</strong>{{ $item->usuario_name  }}<br/>
                                <strong>Email:</strong>{{ $item->usuario_email  }}<br/>
                            </P>
                    </div>
                </div>


                <div class="col-10 my-5">
                    <form action="{{route('Painel.Licitacao.destroy', $item->licitacao_id )}}" method="POST">

                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">
                            Excluir
                        </button>

                    <a class="btn btn-warning " href="{{route('Painel.Licitacao.edit', $item->licitacao_id)}}">
                        Editar
                    </a>
                    <button class="btn btn-primary ">
                        Voltar
                    </button>
                    </form>
                </div>
                @endforeach
        </div>
    </div>


@endsection
