
<!DOCTYPE html>
<html lang="en">

<!-- INICIO head -->
<head>
	<title>SOMAR Site </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('Framework_view/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/css/util.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('Framework_view/css/main.css')}}">
<!--===============================================================================================-->
</head>
<!-- FIM Head -->


<!-- INICIO javascript -->
<style>
    .dropdown-lateral{
        
        .teste{
            display: "";
        }
    }
    #teste{
        display: none;
    }
   
</style>
<script>
    var dropdownLateral = function(){
        // alert("vava");
        var x = document.getElementById('teste');
        x.classList.add("dropdown-lateral");
    }
</script>
<!-- FIM javascript -->



<body class="animsition">

    <div id="teste">

    </div>


	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop ">
			<div class="topbar">
				<div class="content-topbar container  h-100" >
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Máricá, MS
							</span>

							<img class="m-b-1 m-rl-8" src="{{ asset('Framework_view/images/icons/icon-night.png')}}" alt="IMG">

							<span>
								Máxima 32° Mínima 21°
							</span>
						</span>
					</div>

					<div class="right-topbar">
						<a href="#" target="_blank">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#" target="_blank">
							<span class="fab fa-instagram"></span>
						</a>

						<a href="#" target="_blank">
							<span class="fab fa-youtube" ></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.html"><img src="{{asset('Framework_view/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
				</div>
				<!-- FIM logo Mobile -->



				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
			<!-- FIM Header Mobile -->



			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Maricá, RJ
							</span>

							<img class="m-b-1 m-rl-8" src="{{ asset('Framework_view/images/icons/icon-night.png')}}" alt="IMG">

							<span>
								Máxima 35° Mínima 28°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="#" class="left-topbar-item">
							Sobre a SOMAR
						</a>

						<a href="#" class="left-topbar-item">
							Licitações
						</a>

						<a href="#" class="left-topbar-item">
							Contato
						</a>

					</li>

					<li class="right-topbar">
						<a href="#" target="_blank">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#" target="_blank">
							<span class="fab fa-instagram"></span>
						</a>

						<a href="#" target="_blank">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index.html">Licitações</a>
						<ul class="sub-menu-m">
                            <li><a href="index.html">Concorrência pública</a></li>
							<li><a href="index.html">Convite</a></li>
							<li><a href="home-02.html">Pregão</a></li>
							<li><a href="home-03.html">Tomada de preço</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="category-01.html">Quem somos ?</a>
					</li>

					<li>
						<a href="category-02.html">Contato </a>
					</li>

					
					
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.html"><img src="{{asset('Framework_view/images/icons/somar.png')}}" alt="LOGO" style="width: 60%"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					<a href="#"><img src="{{asset('Framework_view/images/banner_nav.jpg')}}" alt="IMG"></a>
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.html">
							<img src="{{asset('Framework_view/images/icons/logo-01.png')}}" alt="LOGO">
						</a>

						<ul class="main-menu">
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">Sobre a Somar</a>
                            </li>
							<li class="main-menu-active">
								<a href="index.html">Licitações</a>
								<ul class="sub-menu">
									<li ><a href="index.html" onmouseenter="dropdownLateral()" >Concorrência pública</a></li>
									<li><a href="home-02.html">Convite 2019</a></li>
                                    <li><a href="home-03.html">Pregão 2019</a></li>
                                    <li><a href="home-03.html">Tomada de preços</a></li>
                                </ul>
                                
							</li>
                            <li>
                                <a href="">Contato</a>
                            </li>
						
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>
	<!-- FIM header -->


	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					Notícias SOMAR:
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Nova Orla inaugurada.
					</span>
					
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Aniversário da cidade e mais obras inauguradas.
					</span>

					<span class="dis-inline-block slide100-txt-item animated visible-false">
						A SOMAR vai iniciar novas obras.
					</span>
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Buscar">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>
	<!-- FIM headline -->


		
	<!-- INICIO banners superiores -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-6 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(Framework_view/images/banner_up_esquerdo.jpg);">
						<a href="" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								SOMAR
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
									Em breve acompanhe o lançamento de todas as obras realizadas pela SOMAR
								</a>
							</h3>


						</div>
					</div>
				</div>

				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						<div class="col-12 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(Framework_view/images/banner_up_direito.jpg);">
								<a href="" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										Prefeitura de Maricá
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
											Acesse o site da prefeitura de Maricá
										</a>
									</h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(Framework_view/images/banner_up_minileft.jpg);">
								<a href="" class="dis-block how1-child1 trans-03"></a>


							</div>
						</div>

						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(Framework_view/images/banner_up_minileft.jpg);">
								<a href="" class="dis-block how1-child1 trans-03"></a>


							</div>
						</div>




					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIM banners superiores -->
	
	

	<!-- Footer -->
	<footer>
		

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					 © 2019

					<a href="#" class="f1-s-1 cl10 hov-link1" style="color: #ba8b00" target="_blank">Mister Desenvolvimento Web.</a>


				</span>
			</div>
		</div>
	</footer>
	<!-- FIM footer -->


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<script src=" {{ asset('Framework_view/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src=" {{ asset('Framework_view/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src=" {{ asset('Framework_view/vendor/bootstrap/js/popper.js')}}"></script>
	<script src=" {{ asset('Framework_view/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src=" {{ asset('Framework_view/js/main.js')}}"></script>

</body>
</html>