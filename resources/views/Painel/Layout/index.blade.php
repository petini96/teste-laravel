<!DOCTYPE html>
<html>
@includeIf('Painel.Layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@includeIf('Painel.Layout.header')
@includeIf('Painel.Layout.sidebar_lateral')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1 class="m-0 text-dark">Painel Administrativo</h1>
            @if(isset($urlAtual))
              <small>{{$urlAtual}}</small>
            @else
              <small> Página Principal</small>
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Painel</a></li>
              @if(isset($urlAtual))
              <li class="breadcrumb-item active">{{$urlAtual}}</li>
              @else
                <li class="breadcrumb-item active">Página Principal</li>
              @endif

            </ol>
          </div>
        </div>
      </div>
    </div>


    @yield('content')
  </div>

  <!-- /.content-wrapper -->
  @includeIf('Painel.Layout.footer')


</div>
<!-- ./wrapper -->
@includeIf('Painel.Layout.javascript')

</body>
</html>
