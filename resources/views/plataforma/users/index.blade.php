@extends('plataforma.layout.default')

@section('plataforma_title')
    Home
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Usuários</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Configurações</a>
                </li>
                <li class="active">
                    <strong>Usuários</strong>
                </li>
            </ol>
        </div>

        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Departamento</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>Lucas de Souza</td>
                                <td>lucas@qualimentosjr.com.br</td>
                                <td class="center">TI</td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Mayta Lais</td>
                                <td>mayta@qualimentosjr.com.br</td>
                                <td class="center">Consultoria</td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Giovana</td>
                                <td>giovana@qualimentosjr.com.br</td>
                                <td class="center">Finanças</td>
                            </tr>
                            <tr class="gradeA">
                                <td>4</td>
                                <td>Ursula</td>
                                <td>ursula@qualimentosjr.com.br</td>
                                <td class="center">Marketing</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Departamento</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop