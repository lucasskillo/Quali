@extends('plataforma.layout.default')

@section('plataforma_title')
    Home
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Clientes</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Clientes</a>
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
                                <th>Contato</th>
                                <th>Setor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>RSITech</td>
                                <td>Lucas</td>
                                <td class="center">TI</td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Friboi</td>
                                <td>Mayta</td>
                                <td class="center">Frigorifico</td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Microsoft</td>
                                <td>Giovana</td>
                                <td class="center">TI</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Contato</th>
                                <th>Setor</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop