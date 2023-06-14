@extends('site-bar')

@section('content')

<section class="page-section" id="contato">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="margin-bottom: 20px;">
                    <img src="{{url('/site2/images/tit-contato.png')}}">
                    <!-- <h2 class="section-heading text-uppercase">CONTATO</h2> -->
                </div>

                <form action="{{url('/contatos/contato')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="name">Nome <span class="text-danger">*</span></label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Digite o nome" required="required" data-validation-required-message="Por favor digite o seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Digite o e-mail" required="required" data-validation-email-message="Por favor digite um e-mail válido" data-validation-required-message="Por favor digite o e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone">Telefone <span class="text-danger">*</span></label>
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="99 9999-9999" required="required" data-validation-required-message="Por favor digite o telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="subject">Assunto <span class="text-danger">*</span></label>
                                <input class="form-control" id="subject" name="title" type="text" placeholder="Digite o assunto" required="required" data-validation-required-message="Por favor digite o assunto." data-validation-maxlength-message="Quantidade máxima de caracteres atingida." maxlength="100">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Mensagem <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="description" maxlength="1000" placeholder="Digite a sua mensagem" required="required" data-validation-required-message="Por favor digite a mensagem." data-validation-maxlength-message="Quantidade máxima de caracteres atingida."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <br>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-lg-12 text-center">
                            <br>
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit"> <span style="margin-bottom: 4px; display: none;" id="sendButtonLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviar</button>

                        </div>
                    </div>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div style="width: 100%"><iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=juazeiro%20bahia+(Juazeiro)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
                <!-- <iframe style="width: 100%; border: unset;" height="250" src=""></iframe> -->
            </div>
        </div>
    </div>
</section>

@endsection
