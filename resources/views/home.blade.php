@extends('layouts.default')

@section('home_ative')
    Active
@stop

@section('content')

@include('layouts.menu_home')

<!-- ======== @Region: #highlighted ======== -->
<div id="highlighted" class="border-bottom-0 bg-black">
    <!-- Image Banner: Use the the data-bg-img functionality to create a simple image banner Use spacer classes to make the banner larger with padding, allows for easy responsive changes too see: elements-ctas.htm To make the banner full height/screen add the attributes: data-toggle="full-height" data-offset="#header" -->
    <div class="overlay overlay-op-7 text-center px-3 pb-5 pt-7 py-lg-8 flex-valign" data-bg-img="assets/img/backgrounds/index-corporate-banner.jpg" data-css='{"background-position": "center bottom","background-attachment": "fixed"}' data-animate="fadeIn" data-toggle="full-height" data-breakpoint="992">
        <div data-scroll="scrollax" data-scrollax-y-ratio="1000" class="py-lg-6 pt-lg-8">
            <h2 class="display-3 text-white text-uppercase font-weight-bold" data-animate="fadeInDown" data-animate-delay="0.6">
                Bem vindo !
                </span>
            </h2>
            <h3 class="text-grey font-weight-normal" data-animate="fadeInUp" data-animate-delay="0.8">
                <span data-typed='["Empresa Junior da", "Criação de novos prod", "Somos à Melhor consultoria de Eng. de Alimentos",
                "O que está esperando ? Venha nos conhecer"]' data-typed-settings='{"delay":2000, "speed":120,"breakLines":false, "deleteDelay":1400, "doneClass":{"#get-btn":"animated fadeIn"}}'></span>
            </h3>
            <a href="#" class="btn btn-inverse btn-lg text-uppercase font-weight-bold py-3 px-4 animate-pending mt-3"
               id="get-btn">Sobre nós <i class="fa fa-rocket"></i></a>
        </div>
    </div>
</div>

<!-- ======== @Region: #content ======== -->
<div id="content" class="p-0 clearfix">
    <!-- Features -->
    <div id="features" class="bg-white">
        <div class="bg-inverse text-white p-3 p-lg-4 text-center divider-arrow divider-arrow-b divider-inverse">
            <div class="container">
                <hr class="hr-lg mt-0 mb-2 w-10 mx-auto hr-primary" />
                <h2 class="text-center text-uppercase font-weight-bold my-0">
                    Nossos serviços
                </h2>
                <h5 class="text-center font-weight-light mt-2 mb-0 text-white op-5">
                    Uma empresa onde o limite é o céu !
                </h5>
            </div>
        </div>
        <div class="container p-4 py-lg-6">
            <div class="row text-center">
                <div class="col-lg-3 py-2">
                    <i class="fa fa-thumbs-up icon-3x text-primary" data-animate="fadeIn" data-animate-delay="0.1"></i>
                    <h4 class="mt-2">
                        Desenvolvimento de Novos Produtos
                    </h4>
                    <p>Pequena explicação</p>
                </div>
                <div class="col-lg-3 py-2">
                    <i class="fa fa-barcode icon-3x text-primary" data-animate="fadeIn" data-animate-delay="0.2"></i>
                    <h4 class="mt-2">
                        Elaboração de Código de Barras
                    </h4>
                    <p>Pequena explicação</p>
                </div>
                <div class="col-lg-3 py-2">
                    <i class="fa fa-rocket icon-3x text-primary" data-animate="fadeIn" data-animate-delay="0.3"></i>
                    <h4 class="mt-2">
                        Melhoria da Conservação dos alimentos
                    </h4>
                    <p>Pequena explicação</p>
                </div>
                <div class="col-lg-3 py-2">
                    <i class="fa fa-line-chart icon-3x text-primary" data-animate="fadeIn" data-animate-delay="0.4"></i>
                    <h4 class="mt-2">
                        Plano de Negócio
                    </h4>
                    <p>Pequena explicação</p>
                </div>
                <div class="col align-self-center">
                    <button type="button" class="btn btn-lg btn-outline-primary btn-rounded">Todos os Produtos <i class="fa fa-sign-out" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Why AppStrap -->
    <div class="bg-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 overlay overlay-gradient overlay-op-6 hidden-md-down" data-bg-img="assets/img/backgrounds/computer-screens.jpg"></div>
                <div class="col-lg-5 p-5 p-lg-7 divider-arrow divider-arrow-l divider-inverse">
                    <hr class="hr-lg mt-0 mb-2 w-10 ml-0 hr-primary" />
                    <h2 class="display-4 text-slab text-white text-uppercase mt-0 mb-5">
                        Escolha <span class="text-primary font-weight-bold">Qualimentos</span>
                    </h2>
                    <h4 class="font-weight-bold text-white text-uppercase mb-1">
                        Fully Optimized
                    </h4>
                    <p class="text-grey mb-0">Ille proprius quae tego. Abbas cogo in jugis scisco tum uxor. Amet lenis odio sino vero. Cogo cui elit laoreet lobortis paratus tego ulciscor vero verto. Iaceo ideo laoreet obruo quidne virtus.</p>
                    <p class="text-grey mb-4">Luctus turpis utinam. Distineo facilisis fere iusto. Amet fere gravis incassum jus letalis neque utrum.</p>
                    <h4 class="font-weight-bold text-white text-uppercase mb-1">
                        Free Upgrades
                    </h4>
                    <p class="text-grey mb-3">Eu euismod in neque nostrud nunc validus virtus vulpes. Accumsan eligo ibidem luctus plaga quibus singularis torqueo.</p>
                    <h4 class="font-weight-bold text-white text-uppercase mb-1">
                        99.9% Uptime
                    </h4>
                    <p class="text-grey mb-3">Nisl paulatim valetudo ymo. Ideo importunus populus quidne saluto scisco singularis utrum volutpat. Augue jumentum nibh.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Promos -->
    <div class="container py-4 py-lg-6">
        <div class="row text-left">
            <div class="col-lg-4 d-lg-flex mb-3 mb-lg-0">
                <div class="px-3 pb-3 pt-7 overlay overlay-gradient overlay-op-8 rounded flex-ew flex-valign-b" data-bg-img="assets/img/homes/happy.jpg">
                    <h2 class="text-white mb-0 display-4 font-weight-bold">
                        <span data-toggle="count-to" data-to="120" data-from="0">0</span>
                    </h2>
                    <p class="text-white text-uppercase mb-0">Clientes Felizes</p>
                    <hr class="hr-lg my-2 w-40 ml-0 hr-primary" />
                </div>
            </div>
            <div class="col-lg-4 d-lg-flex mb-3 mb-lg-0">
                <div class="px-3 pb-3 pt-7 overlay overlay-gradient overlay-op-8 rounded flex-ew flex-valign-b" data-bg-img="assets/img/homes/code.jpg">
                    <h2 class="text-white mb-0 display-4 font-weight-bold">
                        <span data-toggle="count-to" data-to="850" data-from="0">0</span>
                    </h2>
                    <p class="text-white text-uppercase mb-0">Análises Feitas</p>
                    <hr class="hr-lg my-2 w-60 ml-0 hr-primary" />
                </div>
            </div>
            <div class="col-lg-4 d-lg-flex">
                <div class="px-3 pb-3 pt-7 overlay overlay-gradient overlay-op-8 rounded flex-ew flex-valign-b" data-bg-img="assets/img/homes/coffee.jpg">
                    <h2 class="text-white mb-0 display-4 font-weight-bold">
                        <span data-toggle="count-to" data-to="5088" data-from="0">0</span>
                    </h2>
                    <p class="text-white text-uppercase mb-0">Copos de Cafés</p>
                    <hr class="hr-lg my-2 w-20 ml-0 hr-primary" />
                </div>
            </div>
        </div>
    </div>
    <!-- Clients -->
    <div id="clients" class="pt-5 bg-faded">
        <div class="container pb-5">
            <!-- Logos carousel Uses Owl Carousel plugin All options here are customisable from the data-owl-carousel-settings="{OBJECT}" item via data- attributes: http://www.owlgraphic.com/owlcarousel/#customizing ie. data-settings="{"items": "4", "lazyLoad":"true", "navigation":"true"}" -->
            <div class="owl-dots-center owl-nav-over owl-nav-over-hover" data-toggle="owl-carousel" data-owl-carousel-settings='{"items": 4, "lazyLoad":true, "nav":true, "dots":true}'>
                <a href="#">
                    <img data-src="assets/img/customers/customer-1.png" alt="Item 1 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-2.png" alt="Item 2 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-3.png" alt="Item 3 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-4.png" alt="Item 4 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-5.png" alt="Item 5 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-6.png" alt="Item 6 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-7.png" alt="Item 7 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-8.png" alt="Item 8 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-9.png" alt="Item 9 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-10.png" alt="Item 10 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-11.png" alt="Item 11 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-12.png" alt="Item 12 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-13.png" alt="Item 13 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
                <a href="#">
                    <img data-src="assets/img/customers/customer-14.png" alt="Item 14 image" class="owl-lazy img-fluid" />
                    <h5 class="mt-4 text-center">
                    </h5>
                </a>
            </div>
        </div>
        <div class="bg-inverse text-white p-3 p-lg-4 text-center divider-arrow divider-arrow-t divider-inverse">
            <div class="container">
                <h2 class="text-center text-uppercase font-weight-bold my-0">
                    Nossos Clientes
                </h2>
                <hr class="hr-lg mt-2 mb-0 w-10 mx-auto hr-primary" />
            </div>
        </div>
    </div>
</div>
<!-- #Content -->
@stop