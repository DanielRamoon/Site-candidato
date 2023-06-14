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
                    <h5>Projeto</h5>
                    <h6 class="sub-heading">Bem-vindo ao painel administrativo</h6>
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
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('/projeto/store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Título</label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4" class="col-form-label">Autor</label>
                                        <input type="text" name="author" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4" class="col-form-label">Imagem de Capa</label>
                                        <input type="file" name="image" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4" class="col-form-label">Documento</label>
                                        <input type="file" name="doc" accept="application/pdf,application/vnd.ms-excel" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Descrição</label>
                                        <textarea class="form-control" name="description" id="summernote01" rows="10" required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </div>
    <!-- Row ends -->
</div>
<!-- END: .main-content -->

@endsection
