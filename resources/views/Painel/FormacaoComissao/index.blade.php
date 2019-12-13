@extends('Painel.Layout.index')
  @section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function showHint(str) {
        if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
        } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        // .phpgethint.php?q=" + str, true
        xmlhttp.open("GET", "/Painel/FormacaoComissao/nome/"+str, true);
        xmlhttp.send();
        }
    }
</script>



@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-10">
            <h1>
                Formação de Comissão
            </h1>
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <ul class="my-5">
                        @foreach($comissao as $c)
                            <li><strong>Id comissão:</strong>{{$c->id}}</li>
                            <li><strong>Tipo de Comissão:</strong>{{$c->tipo_comissao}}</li>
                            <li><strong>Data:</strong>{{ $c->data }}</li>
                            <li><strong>Portaria:</strong>{{ $c->portaria }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="my-5">
                        <p>
                            <strong>Membros:</strong>
                        </p>
                        @foreach($membro_comissao as $d)
                            <li>{{$d->nome}}</li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>
            
            
        </div>
        <div class="col-10">
            <p><b>Digite o nome do membro abaixo:</b></p>
            <form>
            Nome do Membro: <input type="text" onkeyup="showHint(this.value)" id="input-membro">
            </form>
            <p>Sugestão: </p>
            <div  class="card">
                    <div class="card-header">
                        <h3>Membros</h3>
                    </div>
                <div class="card-body">
                    <ol id="txtHint" style="list-style-type:none;">

                    </ol>
                </div>
            </div>
        </div>

        <div class="col-10 card">
            <div class="card-header">
                <h3>Grupo</h3>
            </div>
        <form action="{{route('Painel.FormacaoComissao.store')}}" method="POST">
            @csrf
            <div class="row card-body ">
                <div id="grupo-alunos" class="col-5">
                        {{-- nomes --}}
                         @foreach($membro_comissao as $d)
                         <div class="row justify-content-center align-items-center">
                            <div class="col-5">
                                <input class="entrada" type="hidden" name="entrada[]" value="{{$d->id}}">
                                <p>{{$d->nome}}</p>
                            </div>
                            <div class="col-5">
                                <span style="font-size:2em;">
                                    <a onclick="remove(this)">
                                        <i class="fas fa-eraser ml-5"></i>
                                    </a>
                                </span>
                            </div>
                         </div>
                            
                        @endforeach 

                </div>
                <div id="grupo-alunos2" class="col-5">
                    {{-- icones   --}}

                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Confirmar</button>
                <button class="btn btn-warning  ">Cancelar</button>
            </div>
        </form>
        </div>
        <script>


            var adicionaMembro = function (elemento){
                // alert(elemento.value);
                var x = document.getElementsByClassName("entrada");
                $existe = false;

                if(x[0] === undefined){
                    // COLUNA COM DADOS DO MEMBRO
                    var node = document.createElement("INPUT");
                    node.className = "entrada";
                    node.setAttribute("type","hidden");
                    node.setAttribute("name","entrada[]");
                    node.setAttribute("value",elemento.value);

                    var nodeP = document.createElement("P");
                    nodeP.innerText =elemento.textContent;

                    var nodeDiv2 = document.createElement("div");
                    nodeDiv2.className = "col-5";
                    nodeDiv2.appendChild(node);
                    nodeDiv2.appendChild(nodeP);
                    // COLUNA COM DADOS DO MEMBRO


                    // CRIAÇÃO DA SEGUNDA COLUNA ICONE
                    var nodeIcon = document.createElement("I");
                    nodeIcon.className = "fas fa-eraser ml-5";

                    var nodeA = document.createElement("A");
                    // nodeA.setAttribute("href","#");
                    nodeA.setAttribute("onclick","remove(this)");
                    nodeA.appendChild(nodeIcon);

                    var nodeSpan = document.createElement("SPAN");
                    nodeSpan.setAttribute("style","font-size:2em;");
                    nodeSpan.appendChild(nodeA);

                    var nodeDivIcon = document.createElement("div");
                    nodeDivIcon.className = "col-5";
                    nodeDivIcon.appendChild(nodeSpan);
                    // CRIAÇÃO DA SEGUNDA COLUNA ICONE
                    
                    //INCLUSÃO NA LINHA
                    var nodeRow = document.createElement("div");
                    nodeRow.className = "row justify-content-center align-items-center";
                    nodeRow.appendChild(nodeDiv2);
                    nodeRow.appendChild(nodeDivIcon);

                    document.getElementById("grupo-alunos").appendChild(nodeRow);
                     //INCLUSÃO 

                    var list = document.getElementById("ui-widget-content");
                    list.parentNode.removeChild(list);

                }else{
                    for (i = 0; i < x.length; i++) {
                        if(x[i].value == elemento.value){
                            alert("Já existe esse membro...");
                            $existe = true;
                        }
                    }
                    if(!$existe){

                    // COLUNA COM DADOS DO MEMBRO
                    var node = document.createElement("INPUT");
                    node.className = "entrada";
                    node.setAttribute("type","hidden");
                    node.setAttribute("name","entrada[]");
                    node.setAttribute("value",elemento.value);

                    var nodeP = document.createElement("P");
                    nodeP.innerText =elemento.textContent;

                    var nodeDiv2 = document.createElement("div");
                    nodeDiv2.className = "col-5";
                    nodeDiv2.appendChild(node);
                    nodeDiv2.appendChild(nodeP);
                    // COLUNA COM DADOS DO MEMBRO


                    // CRIAÇÃO DA SEGUNDA COLUNA ICONE
                    var nodeIcon = document.createElement("I");
                    nodeIcon.className = "fas fa-eraser ml-5";

                    var nodeA = document.createElement("A");
                    // nodeA.setAttribute("href","#");
                    nodeA.setAttribute("onclick","remove(this)");
                    nodeA.appendChild(nodeIcon);

                    var nodeSpan = document.createElement("SPAN");
                    nodeSpan.setAttribute("style","font-size:2em;");
                    nodeSpan.appendChild(nodeA);

                    var nodeDivIcon = document.createElement("div");
                    nodeDivIcon.className = "col-5";
                    nodeDivIcon.appendChild(nodeSpan);
                    // CRIAÇÃO DA SEGUNDA COLUNA ICONE
                    
                    //INCLUSÃO NA LINHA
                    var nodeRow = document.createElement("div");
                    nodeRow.className = "row justify-content-center align-items-center";
                    nodeRow.appendChild(nodeDiv2);
                    nodeRow.appendChild(nodeDivIcon);

                    document.getElementById("grupo-alunos").appendChild(nodeRow);
                     //INCLUSÃO 

                    var list = document.getElementById("ui-widget-content");
                    list.parentNode.removeChild(list);

                    }
                }
                document.getElementById("input-membro").textContent = "";
            }

            
            function remove(link) { 
                link.parentNode.parentNode.parentNode.remove();
                // console.log(link.parentNode);
                // console.log(document.getElementById('txtHint').children);
                var x = document.getElementById('txtHint');
                x.innerHTML= "";
                var y = document.getElementById('input-membro');
                y.value = "";
                // document.getElementById('txtHint').children.remove;
                // <li id="ui-widget-content" onclick="adicionaMembro(this)" value="333">Tayron Silva</li>
            }
        </script>
        
    </div>
</div>

 @endsection


