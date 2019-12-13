@extends('Painel.Layout.index')
  @section('content')


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif



<section>
    <div class="container-fluid">
        {{-- <div class="card-header">
            <h3 class="card-title">Listagem de Licitação</h3>
        </div> --}}

        <div class="row align-items-center w-100 justify-content-center">
            <div class="col-11">
                <table id="example1" class="table table-striped ">
                    <thead class=" text-white" style="background-color:#343A40;">
                        <tr>
                            <th scope="col">Cód. Sequencial</th>
                            <th scope="col">Edital</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Numeração</th>
                            <th scope="col">Data da Publicação</th>
                            <th scope="col">Local Licitação</th>
                            <th scope="col">Objeto</th>
                            {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 106px;">Local de Entrega</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 106px;">Código da comissão</th> --}}
                            <th >Processo administrativo</th>
                            <th >Mais</th>
                            {{-- <th width="280px">Ação</th> --}}
                        {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 106px;">Rendering engine</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 141px;">Browser</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 123px;">Platform(s)</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 88px;">Engine version</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending" style="width: 58px;">CSS grade</th> --}}
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($licitacao as $sub)
                            <tr >
                                <th scope="row">{{ ++$i }}</th>
                                <th>{{ $sub->edital }}</th>
                                <th>{{ $sub->id_modalidade }}</th>

                                <th>{{ $sub->numeracao }}</th>
                                {{-- <th>{{ $sub->id_usuario }}</th>
                                <th>{{ $sub->data_criacao }}</th> --}}
                                <th>{{ $sub->data_publicacao }}</th>
                                {{-- <th>{{ $sub->data_abertura }}</th>
                                <th>{{ $sub->hora_criacao }}</th>
                                <th>{{ $sub->hora_abertura }}</th> --}}
                                <th>{{ $sub->id_local }}</th>
                                <th>{{ $sub->objeto }}</th>
                                {{-- <th>{{ $sub->local_entrega }}</th> --}}
                                {{-- <th>{{ $sub->prazo_entrega }}</th>
                                <th>{{ $sub->condicoes_pagamento }}</th>
                                <th>{{ $sub->validade_proposta }}</th>
                                <th>{{ $sub->id_local }}</th>
                                <th>{{ $sub->id_comissao }}</th> --}}
                                {{-- <th>{{ $sub->id_comissao }}</th> --}}

                                <th>{{ $sub->processo_administrativo }}</th>
                                <th>
                                    <span style="font-size: 2em;">
                                        <a href="{{ route('Painel.Licitacao.show', $sub->id) }}"><i class="fas fa-search"></i></a>
                                    </span>
                                </th>
                                    {{-- <th class="sorting_1">

                                        <form action="" method="POST">

                                            <a class="btn btn-info" href="">Show</a>

                                            <a class="btn btn-primary" href="">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </th> --}}
                            </tr>
                            @endforeach

                    </tbody>
                    <tfoot >
                        <tr>
                            <th >Código Sequencial</th>
                            <th >Edital</th>
                            <th >Modalidade</th>
                            <th >Numeração</th>
                            <th >Data de Publicação</th>
                            <th >Local de Licitação</th>
                            <th >Objeto</th>
                            <th >Processo Administrativo</th>
                            <th >Mais</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</section>

{{-- <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Mostrar mais
    </a>

    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
</div> --}}
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
