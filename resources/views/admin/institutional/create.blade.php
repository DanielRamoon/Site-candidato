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
                    <h5>Configurações</h5>
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
                            <form action="{{url('/minha-historia/update/historia')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Link Youtube</label>
                                        @if(isset($youtube->description))
                                            <input type="text" value="{{$youtube->description}}" name="youtube" class="form-control" id="inputEmail4" placeholder="" required>
                                        @else
                                            <input type="text" value="" name="youtube" class="form-control" id="inputEmail4" placeholder="" required>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Minha História</label>
                                        @if(isset($historia->description))
                                            <textarea class="form-control" id="summernote01" name="historia" required>{!!$historia->description!!}</textarea>
                                        @else
                                            <textarea class="form-control" id="summernote01" name="historia" required></textarea>
                                        @endif
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
