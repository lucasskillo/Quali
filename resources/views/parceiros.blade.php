@extends('layouts.default')

@section('parceiros_ative')
    active
@stop
@section('content')

    @include('layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                <h2 class="title-divider">
                    <span>Parceiros</span>
                    <small>Conheça nossos parceiros</small>
                </h2>
                <p>Segue abaixo nossos parceiros:</p>
                <blockquote class="blockquote">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/img/ACIP.jpg" alt="Picture of frog by Ben Fredericson" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h4 class="timeline-item-title">
                                <a href="#">ACIP</a>
                            </h4>
                            <p class="timeline-item-description">A ACIP (Associação Comercial e Industrial de Pirassununga)
                                foi fundada em 1938 a partir da união de 98 comerciantes, industriais e representantes de
                                firmas estabelecidas em Pirassununga com o objetivo de representar, apoiar e lutar pelos
                                interesses da classe empresarial. Visando isso foi estabelecida uma parceria com o objetivo de
                                divulgar o trabalho de ambas as empresas obtendo novos resultados.</p>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="blockquote blockquote-reverse">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="timeline-item-title">
                                <a href="#">UNICETEX</a>
                            </h4>
                            <p class="timeline-item-description">O Centro de Inovação, Empreendedorismo e Extensão Universitária visa estruturar um espaço de integração
                                de natureza empreendedora com a implantação de projetos de pesquisa, ensino e extensão universitária,
                                tais como o da Incubadora de Empresas do Agronegócio de Pirassununga (UNITec), além de estimular a
                                formação de uma rede de cooperação para tratar da capacitação de recursos humanos na área de negócios
                                junto ao Campus da USP de Pirassununga.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/Unicetex.jpg" alt="Picture of frog by Ben Fredericson" class="img-fluid">
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
@stop