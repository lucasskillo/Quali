@extends('plataforma.layout.default')

@section('plataforma_title')
    Home
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Home</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Workshop</a>
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
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>Carnes</td>
                                <td>01/05/2017</td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Bebidas</td>
                                <td>01/03/2017</td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Chocolate</td>
                                <td>01/04/2017</td>
                            </tr>
                            <tr class="gradeA">
                                <td>4</td>
                                <td>Cerveja</td>
                                <td>15/06/2017</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Data</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop