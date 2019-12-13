<!-- Main Sidebar Container -->
<style>
#dropdown-lateral{
    display: none;
    color: white;
}
ul{
    list-style-type: none;
}
.li-hover:hover{
    background-color:rgba(255,255,255,.1);

}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/Painel" class="brand-link">
      <img src="{{asset('img/somar.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SOMAR</span>
    </a>
    <a href="/Painel" class="brand-link brand-text">
        <p class="text-white text-center " style="opacity:70%">Transparência </p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <p class="text-white">
                    {{$user->name}}
            </p>

          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- <li class="nav-item has-treeview">
               <a href="{{route('Painel.Licitacao.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Cadastrar Licitação
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
              </li> --}}

             <!-- Listar -->
             <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Licitações
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" onmouseenter="dropdownLateralOpen()" onmouseleave="dropdownLateralClose()">
                    {{-- {{route('Painel.Licitacao.index')}} --}}
                    <a href="{{route('Painel.Licitacao.create')}}" class="nav-link">
                      {{-- <i class="far fa-circle nav-icon"></i> --}}
                      <p>Cadastrar</p>
                    </a>
                    {{-- <div id="dropdown-lateral">
                        <ul>
                            <li class="li-hover">2018</li>
                            <li class="li-hover">2019</li>
                            <li class="li-hover">2020</li>
                        </ul>
                    </div> --}}
                  </li>
                  <li class="nav-item" >
                    <a href="{{route('Painel.Licitacao.index')}}" class="nav-link">
                      {{-- <i class="far fa-circle nav-icon"></i> --}}
                      <p>Listar</p>
                    </a>
                    {{-- <div id="">
                        <ul>
                            <li class="li-hover">2018</li>
                            <li class="li-hover">2019</li>
                            <li class="li-hover">2020</li>
                        </ul>
                    </div> --}}
                  </li>






                </ul>
              </li>

              <!-- SEGUNDA OPÇÃO SIDEBAR -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                  <p class="ml-3">
                    Comissão
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" onmouseenter="dropdownLateralOpen()" onmouseleave="dropdownLateralClose()">

                    <a href=" {{route('Painel.Comissao.create')}}" class="nav-link">
                      {{-- <i class="far fa-circle nav-icon"></i> --}}
                      <p>Cadastrar</p>
                    </a>
                    {{-- <div id="dropdown-lateral">
                        <ul>
                            <li class="li-hover">2018</li>
                            <li class="li-hover">2019</li>
                            <li class="li-hover">2020</li>
                        </ul>
                    </div> --}}
                  </li>
                  <li class="nav-item" >
                    <a href="{{route('Painel.Comissao.index')}}" class="nav-link">
                      {{-- <i class="far fa-circle nav-icon"></i> --}}
                      <p>Listar</p>
                    </a>
                    {{-- <div id="">
                        <ul>
                            <li class="li-hover">2018</li>
                            <li class="li-hover">2019</li>
                            <li class="li-hover">2020</li>
                        </ul>
                    </div> --}}
                  </li>


                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{route('Painel.FormacaoComissao.index')}}" class="nav-link">
                        <i class="fas fa-users"></i>
                    <p class="ml-3">
                    Formar Comissão
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                </a>

                </li>

              <!-- TERCEIRA OPÇÃO SIDEBAR -->

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                        <i class="fas fa-user "></i>
                  <p class="ml-3">
                    Membro
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" onmouseenter="dropdownLateralOpen()" onmouseleave="dropdownLateralClose()">
                    {{-- {{route('Painel.Licitacao.index')}} --}}
                    <a href="" class="nav-link">
                        {{-- <i class="fas fa-user-plus"></i> --}}
                      <p> Cadastrar</p>
                    </a>
                    {{-- <div id="dropdown-lateral">
                        <ul>
                            <li class="li-hover">2018</li>
                            <li class="li-hover">2019</li>
                            <li class="li-hover">2020</li>
                        </ul>
                    </div> --}}
                  </li>
                  <li class="nav-item" >
                    <a href="" class="nav-link">
                      {{-- <i class="far fa-circle nav-icon"></i> --}}
                      <p>Listar</p>
                    </a>
                    {{-- <div id="">
                        <ul>
                            <li class="li-hover">2018</li>
                            <li class="li-hover">2019</li>
                            <li class="li-hover">2020</li>
                        </ul>
                    </div> --}}
                  </li>






                </ul>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script>
  var dropdownLateralOpen = function(){
    var x = document.getElementById("dropdown-lateral");
    x.classList.add("d-block");
  }
  var dropdownLateralClose = function(){
    var x = document.getElementById("dropdown-lateral");
    x.classList.remove("d-block");
  }
  </script>
