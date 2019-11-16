  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
      </li> -->
      
    </ul>


      <div class="input-group input-group-sm w-100">
        <div class="input-group-append float-right">
          <a href="" class="float-right" onclick="event.preventDefault();document.getElementById('logout-form').submit()" >Sair</a>
        </div>
      </div>
  <form href="#" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
  </nav>
  <!-- /.navbar -->