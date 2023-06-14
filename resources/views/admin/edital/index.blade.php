@extends('layouts.sidebar') @section('content')
<!-- BEGIN .main-heading -->
<header class="main-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <div class="page-icon">
                    <i class="icon-laptop_windows"></i>
                </div>
                <div class="page-title">
                    <h5>Edital</h5>
                    <h6 class="sub-heading">Bem-vindo ao painel administrativo</h6>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="right-actions">
                    <a href="{{url('/edital/create')}}" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Cadastrar Nova Edital">
                        Novo Edital
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END: .main-heading -->
<!-- BEGIN .main-content -->
<div class="main-content">
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">Lista de Editais</div>
                <div class="card-body">
                    <table id="basicExample" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $value)
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->updated_at->format('d/m/Y')}}</td>
                                    <td>
                                        <a href="{{url('/edital/edit')}}/{{$value->id}}" class="btn btn-warning btn-rounded"><span class="icon-edit2"></span></a>
                                        <a href="{{url('/editais')}}" target="_blank" class="btn btn-info btn-rounded"><span class="icon-eye2"></span></a>
                                        <a href="{{url('/edital/delete')}}/{{$value->id}}" class="btn btn-danger btn-rounded"><span class="icon-trash"></span></a>
                                        <!-- <a href="{{url('/edital/edit')}}/{{$value->id}}" class="btn btn-danger btn-rounded"><span class="icon-edit2"></span></a> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->
</div>
<!-- END: .main-content -->
@endsection
