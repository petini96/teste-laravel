@extends('Painel.Layout.index')
  @section('content')


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<style>
    .mystyle{
        position: relative;
        animation-name: example;
        animation-duration: 1s;
    }
    @keyframes example {
        0%   { left:0%;}
        /* 25%  { left:25%;}
        50%  { left:50%;}
        75%  { left:75%;} */
        100% { left:100%;}
    }
</style>
<script>
    function mostraMembro(id,elemento) {
        var token = document.getElementById("csrf-token");

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                elemento.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "/Painel/FormacaoComissao/MembrosAjax/"+id+"/elemento/"+elemento.id + "/token/"+token.value, true);
        xmlhttp.send();
    }

    function fecharCard(elemento){
        // element.parentNode.removeChild(element);
        elemento.classList.add("mystyle");
        setTimeout(function () {
            elemento.remove();
        }, 1000);
    }
</script>

<section>
    <div class="container-fluid">
        {{-- <div class="card-header">
            <h3 class="card-title">Listagem de Licitação</h3>
        </div> --}}

        <div class="row align-items-center w-100 justify-content-center">
            <div class="col-11">
            <!-- <form action="{{route('Painel.FormacaoComissao.index')}}" method="POST">
            @csrf -->
                <table id="example1" class="table table-striped ">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <thead class=" text-white" style="background-color:#343A40;">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Data</th>
                            <th scope="col">Portaria</th>
                            <th scope="col">Tipo_comissao</th>
                            <th scope="col">Arquivo</th>
                            <th scope="col">Arquivo_atual</th>
                            <th >Mais</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                        
                        @foreach ($comissao as $sub)
                        
                        <tr >
                            <th scope="row">{{ $sub->id }}</th>
                            <th>{{ $sub->data }}</th>
                            <th>{{ $sub->portaria }}</th>
                            <th>{{ $sub->tipo_comissao }}</th>
                            {{-- <th>{{ $sub->arquivo }}</th>
                            <th >{{$sub->arquivo_atual }}</th> --}}
                            <th>
                                <a href="/{{ $sub->arquivo }}" alt="Edital download" style="color:#343A40">
                                    <span style="font-size:2em";>
                                        <i class="fas fa-file-pdf"></i>
                                    </span>
                                </a>
                            </th>
                            <th>
                                <a href="/{{ $sub->arquivo_atual }}" alt="Edital download" style="color:#343A40">
                                    <span style="font-size:2em";>
                                        <i class="fas fa-file-pdf"></i>
                                    </span>
                                </a>
                            </th>
                            <th >
                                    {{-- {{$sub->id}}, this.value --}}
                                <span style="font-size: 2em;" id="pai">
                                    <a onclick="mostraMembro({{$sub->id}}, this.parentElement.parentElement.parentElement.nextElementSibling.children[0])">
                                        <i class="fas fa-search"></i>
                                    </a>

                                </span>

                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" id="membros-ajax">

                            </th>
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
                        </tr>
                    </tfoot>
                </table>
                <!-- </form> -->
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
