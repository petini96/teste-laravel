<!DOCTYPE html>
<html>
@includeIf('Painel.Layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@includeIf('Painel.Layout.header')
@includeIf('Painel.Layout.sidebar_lateral')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Painel Administrativo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Página Principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @includeIf('Painel.Layout.footer')

  
</div>
<!-- ./wrapper -->
@includeIf('Painel.Layout.javascript')

</body>
</html>