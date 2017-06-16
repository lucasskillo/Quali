@extends('plataforma.layout.default')

@section('plataforma_title')
    Home
@stop

@section('active_workshops')
    active
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Workshops</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Workshop</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>

        <div class="col-lg-2" style="margin-top: 2%;">
            <a href="workshops/create">
                <button type="button"  class="btn btn-w-m btn-primary">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Novo
                </button>
            </a>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Data</th>
                                <th class="disabled-sorting text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($workshops as $workshop)
                                <tr class="gradeX">
                                    <td>{{ $workshop->id }}</td>
                                    <td>{{ $workshop->Nome }}</td>
                                    <td>{{ $workshop->Data }}</td>
                                    <td class="text-center">
                                        <div>
                                            <a href="/admin/workshops/{{ $workshop->id }}/edit" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                            <a>
                                                <form action="/admin/workshops/{{ $workshop->id }}" method="POST">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></button>
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Data</th>
                                <th class="disabled-sorting text-center">Ações</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop