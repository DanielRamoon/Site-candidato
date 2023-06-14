@extends('layouts.sidebar')

@section('content')
<!-- BEGIN .main-heading -->
<header class="main-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="page-icon">
                    <i class="icon-laptop_windows"></i>
                </div>
                <div class="page-title">
                    <h5>Dashboard</h5>
                    <h6 class="sub-heading">Bem-vindo ao painel administrativo</h6>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END: .main-heading -->
<!-- BEGIN .main-content -->
<div class="main-content">
<div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <div class="info-graph">
                            <span id="barOneOne"><canvas width="118" height="30" style="display: inline-block; width: 118px; height: 30px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h6 class="title">Usuários</h6>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h4 class="total">{{$user}}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <div class="info-graph">
                            <span id="barOneOne"><canvas width="118" height="30" style="display: inline-block; width: 118px; height: 30px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h6 class="title">Posts</h6>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h4 class="total">{{$post}}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <div class="info-graph">
                            <span id="barOneOne"><canvas width="118" height="30" style="display: inline-block; width: 118px; height: 30px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h6 class="title">Fotos</h6>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h4 class="total">{{$foto}}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <div class="info-graph">
                            <span id="barOneOne"><canvas width="118" height="30" style="display: inline-block; width: 118px; height: 30px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h6 class="title">Projetos</h6>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
                                <h4 class="total">{{$projeto}}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END: .main-content -->
@endsection
