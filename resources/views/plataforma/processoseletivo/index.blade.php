@extends('plataforma.layout.default')

@section('plataforma_title')
    Home
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Processo Seletivo</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Processo Seletivo</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
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
                                <th>Ano</th>
                                <th>Período</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>Lucas de Souza</td>
                                <td>lucas@hotmail.com</td>
                                <td class="center">Noturno</td>
                                <td class="center">2016</td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Mayta Lais</td>
                                <td>mayta@hotmail.com</td>
                                <td class="center">Diurno</td>
                                <td class="center">2017</td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Giovana</td>
                                <td>giovana@hotmail.com</td>
                                <td class="center">Noturno</td>
                                <td class="center">2017</td>
                            </tr>
                            <tr class="gradeA">
                                <td>4</td>
                                <td>Ursula</td>
                                <td>ursula@hotmail.com</td>
                                <td class="center">Diurno</td>
                                <td class="center">2017</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Ano</th>
                                <th>Período</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop