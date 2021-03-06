@extends('layouts.app')
<head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    {{-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script> --}}

    <style>

        @font-face {
                font-family: 'Amfibia';
                src: local('Amfibia Bold Italic'), local('Amfibia-Bold-Italic'),
                    url('Amfibia-BoldItalic.woff2') format('woff2'),
                    url('Amfibia-BoldItalic.woff') format('woff'),
                    url('Amfibia-BoldItalic.ttf') format('truetype');
                font-weight: 700;
                font-style: italic;
            }

        .Emprestimo{
            text-align: left;
            font-family:  Amfibia;
            font-style: italic;
            font-style: bold;
            letter-spacing: 0px;
            color: #6246EA;
             opacity: 1;
           }
        
        .sub_tit{
            text-align: center;
            font: italic normal bold 70px/110px Amfibia;
            letter-spacing: 0px;
            color: #00473E;
            opacity: 1;
        }

        .sub_tit2{
            text-align: left;
            font: italic normal bold 120px/110px Amfibia;
            letter-spacing: 0px;
            color: #6246EA;
            opacity: 1;
            width: 331px;
            height: 110px;
        }

        #parcela2{
            text-align: left;
            font: italic normal bold 80px/110px Amfibia;
            letter-spacing: 0px;
            color: #6246EA;
            opacity: 1;
            font-size: 60px;
            width: 90px;
            height: 106px;
        }

        .contratar{
            text-align: center;
            display: flex;
            font: italic normal bold 50px/70px Amfibia;
            width: 100%;
            letter-spacing: 0px;
            color: #F2F7F5;
            opacity: 1;
            background: #6246EA 0% 0% no-repeat padding-box;
            border: 1px solid #707070;
            border-radius: 5px;
            opacity: 1;
            border: none;
            text-decoration: none;
            justify-content: center;
        }
        .contratar:hover{
            color: #ffffff;
        }

        .Form_Pag{
            font-family: "Amfibia";
            color: #6246EA;
        }

        .valor_{
            font-family: "Amfibia";
            color: #6246EA;
            font-size: 70px;
            margin-top: -20px
        }
        input[type="range"]::-moz-range-progress {
            background-color: #6246EA; 
            }
        
    </style>
</head>
@section('content')
<div class="container">
    <h1 class="Emprestimo">Empr??stimo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                <form>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="valor_des" class="col-default-4 col-form-label sub_tit">Valor desejado</label>
                        </div>
                      <div class="col-12">
                        <div id="slider"></div>
                        <input type="range"  class="form-control" id="valor_des" min="1000" max="30000">
                        
                      </div>
                    </div>

                    <div class="form-group row">
                        <div class="class-12">
                            <label for="inputPassword" class="col-default-4 col-form-label sub_tit">Quantidade de parcelas</label>
                        </div>
                      <div class="col-12">
                        <div id="slider_value"></div>
                        <input type="range" class="form-control" id="parcela" min="1" max="36">
                      </div>
                    </div>
                  </form>
            </div>
        </div>

        <div class="col-md-4">
                 <h2 class="justify-content-center sub_tit2">TOTAL</h2>
                 <div class="d-flex flex-column justify-content-center align-items-center">
                 <div><span id="parcela2"></span></div>
                 <div name="total" id="total" class="valor_"> </div>
                </div>
                 <div class="justify-content-center d-flex" >
                    <a type="button" class=" contratar" data-toggle="modal" data-target=".bd-example-modal-lg" href="{{ route('info') }}">Contratar</a>
                    

                    <div id="modal_2" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <body class="bg-light">

                                <div class="container">
                                  <div class="py-5 text-center">
                                    <h2 class="Form_Pag">Formul??rio de pagamento</h2>
                                  </div>
                            
                                  {{-- <div class="row">
                                    <div class="col-md-4 order-md-2 mb-4">
                                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="text-muted Form_Pag">Descri????o do emprestimo</span>
                                        {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
                                      {{-- </h4>
                                      <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                          <div>
                                            <h6 class="my-0">Valor Total</h6>
                                            {{-- <small class="text-muted">Breve descri????o</small> --}}
                                          {{-- </div>
                                          <div id="slider"></div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                          <div>
                                            <h6 class="my-0">Quantidade de parcelas</h6>
                                            {{-- <small class="text-muted">Breve descri????o</small> --}}
                                          {{-- </div>
                                          <span class="text-muted">R$8</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                          <div>
                                            <h6 class="my-0">Valor da parcela</h6>
                                            {{-- <small class="text-muted">Breve descri????o</small> --}}
                                          {{-- </div>
                                          <span class="text-muted">R$5</span>
                                        </li>  --}}
                                        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
                                          <div class="text-success">
                                            <h6 class="my-0">C??digo de promo????o</h6>
                                            <small>CODIGOEXEMEPLO</small>
                                          </div>
                                          <span class="text-success">-R$5</span>
                                        </li> --}}
                                        {{-- <li class="list-group-item d-flex justify-content-between">
                                          <span>Total (BRL)</span>
                                          <strong>R$20</strong>
                                        </li>
                                      </ul> --}}
                            
                                      {{-- <form class="card p-2">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="C??digo promocional">
                                          <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary">Resgatar</button>
                                          </div>
                                        </div>
                                      </form> --}}
                                    </div>
                                    <div class="col-md-12 order-md-1">
                                      <h4 class="mb-3">Endere??o de cobran??a</h4>
                                      <form class="needs-validation" novalidate="">
                                        <div class="row">
                                          <div class="col-md-6 mb-3">
                                            <label for="primeiroNome">Nome</label>
                                            <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required="">
                                            <div class="invalid-feedback">
                                              ?? obrigat??rio inserir um nome v??lido.
                                            </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <label for="sobrenome">Sobrenome</label>
                                            <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required="">
                                            <div class="invalid-feedback">
                                              ?? obrigat??rio inserir um sobre nome v??lido.
                                            </div>
                                          </div>
                                        </div>
                            
                                        {{-- <div class="mb-3">
                                          <label for="nickname">Nickname</label>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="nickname" placeholder="Nickname" required="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                              Seu nickname ?? obrigat??rio.
                                            </div>
                                          </div>
                                        </div> --}}
                            
                                        {{-- <div class="mb-3">
                                          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                                          <input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com">
                                          <div class="invalid-feedback">
                                            Por favor, insira um endere??o de e-mail v??lido, para atualiza????es de entrega.
                                          </div>
                                        </div> --}}
                            
                                        <div class="mb-3">
                                          <label for="endereco">Endere??o</label>
                                          <input type="text" class="form-control" id="endereco" placeholder="Rua dos bobos, n?? 0" required="">
                                          <div class="invalid-feedback">
                                            Por favor, insira seu endere??o de entrega.
                                          </div>
                                        </div>
                            
                                        <div class="mb-3">
                                          <label for="endereco2">Endere??o 2 <span class="text-muted">(Opcional)</span></label>
                                          <input type="text" class="form-control" id="endereco2" placeholder="Apartamento ou casa">
                                        </div>
                            
                                        <div class="row">
                                          {{-- <div class="col-md-5 mb-3">
                                            <label for="pais">Pa??s</label>
                                            <select class="custom-select d-block w-100" id="pais" required="">
                                              <option value="">Escolha...</option>
                                              <option>Brasil</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Por favor, escolha um pa??s v??lido.
                                            </div>
                                          </div> --}}
                                          <div class="col-md-4 mb-3">
                                            <label for="estado">Estado</label>
                                            <select class="custom-select d-block w-100" id="estado" required="">
                                              <option value="">Escolha...</option>
                                              <option value="AC">Acre</option>
                                              <option value="AL">Alagoas</option>
                                              <option value="AP">Amap??</option>
                                              <option value="AM">Amazonas</option>
                                              <option value="BA">Bahia</option>
                                              <option value="CE">Cear??</option>
                                              <option value="DF">Distrito Federal</option>
                                              <option value="ES">Esp??rito Santo</option>
                                              <option value="GO">Goi??s</option>
                                              <option value="MA">Maranh??o</option>
                                              <option value="MT">Mato Grosso</option>
                                              <option value="MS">Mato Grosso do Sul</option>
                                              <option value="MG">Minas Gerais</option>
                                              <option value="PA">Par??</option>
                                              <option value="PB">Para??ba</option>
                                              <option value="PR">Paran??</option>
                                              <option value="PE">Pernambuco</option>
                                              <option value="PI">Piau??</option>
                                              <option value="RJ">Rio de Janeiro</option>
                                              <option value="RN">Rio Grande do Norte</option>
                                              <option value="RS">Rio Grande do Sul</option>
                                              <option value="RO">Rond??nia</option>
                                              <option value="RR">Roraima</option>
                                              <option value="SC">Santa Catarina</option>
                                              <option value="SP">S??o Paulo</option>
                                              <option value="SE">Sergipe</option>
                                              <option value="TO">Tocantins</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Por favor, insira um estado v??lido.
                                            </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="cep">CEP</label>
                                            <input type="text" class="form-control" id="cep" placeholder="" required="">
                                            <div class="invalid-feedback">
                                              ?? obrigat??rio inserir um CEP.
                                            </div>
                                          </div>
                                        </div>
                                        <hr class="mb-4">
                                        {{-- <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
                                          <label class="custom-control-label" for="mesmo-endereco">Endere??o de entrega ?? o mesmo que o de cobran??a.</label>
                                        </div> --}}
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="salvar-info">
                                          <label class="custom-control-label" for="salvar-info">Lembrar desta informa????o, na pr??xima vez.</label>
                                        </div>
                                        <hr class="mb-4">
                            
                                        <h4 class="mb-3">Dados banc??rios</h4>
                            
                                        <div class="d-block my-3">
                                          <div class="custom-control custom-radio">
                                            <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                            <label class="custom-control-label" for="credito">Conta corrente</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                            <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                            <label class="custom-control-label" for="debito">Conta polpan??a</label>
                                          </div>
                                          {{-- <div class="custom-control custom-radio">
                                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                            <label class="custom-control-label" for="paypal">PayPal</label> --}}
                                          {{-- </div> --}}
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6 mb-3">
                                            <label for="cc-nome">N??mero da conta</label>
                                            <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
                                            {{-- <small class="text-muted">Nome completo</small> --}}
                                            <div class="invalid-feedback">
                                              O n??mero da conta ?? obrigat??rio.
                                            </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <label for="cc-numero">Nome completo</label>
                                            <input type="text" class="form-control" id="cc-numero" placeholder="" required="">
                                            <div class="invalid-feedback">
                                              O nome completo do favorecido ?? obrigat??rio.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-3 mb-3">
                                            <label for="cc-expiracao">Ag??ncia</label>
                                            <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
                                            <div class="invalid-feedback">
                                              Ag??ncia ?? obrigat??ria.
                                            </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="cc-cvv">CPF</label>
                                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                            <div class="invalid-feedback">
                                              CPF do favorecido ?? obrigat??rio.
                                            </div>
                                          </div>
                                        </div>
                                        <hr class="mb-4">
                                        <button id="final" class="btn btn-primary btn-lg btn-block" type="submit">Realizar contrata????o</button>
                                      </form>

                                    </div>
                                  </div>
                                </div>
                            </body>
                        </div>
                    </div>
                    </div>
                 </div>

                 <div id="modal_sucesso" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">PARABENSSS!!!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Seu empr??stimo foi feito com sucesso, em at?? 2 dias ??teis ser?? realizado o dep??sito</p>
                        </div>
                        <div class="modal-footer">
                          <button id="fechar_modal" type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>

        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

       var total = 0;
                  $('#slider').html( $('#valor_des').val() );

                                           $('#slider_value').html( $('#parcela').val() );
                                           total1();
                                     $('#parcela2').html( $('#parcela').val() + 'X' );

                                     $(document).on('input', '#valor_des', function() {
                                        $('#slider').html( $(this).val() );
                                        total1();
                                    });

                                     $(document).on('input', '#parcela', function() {
                                            $('#slider_value').html( $(this).val() );
                                            total1();
                                            $('#parcela2').html( $(this).val() + 'X' );
                                    });

                                 $(document).ready(function(){
                                     $('#').mask('#.##0,00');
                                 });

                                     function total1(){
                                         $('#total').html( ($('#valor_des').val() / $('#parcela').val()).toFixed(2));
                                         total = ($('#valor_des').val() / $('#parcela').val()).toFixed(2);
                                     }
                                 
                                     
                                //  $(document).click('final', function(){
                                //      <div class="alert alert-primary" role="alert">
                                //  Parabens!! Empr??stimo realizado com sucesso!! D
                                //  </div>
                                //  });
</script>
<script>
    // Exemplo de JavaScript para desativar o envio do formul??rio, se tiver algum campo inv??lido.
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Selecione todos os campos que n??s queremos aplicar estilos Bootstrap de valida????o customizados.
        var forms = document.getElementsByClassName('needs-validation');

        // Faz um loop neles e previne envio
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                console.log("Deu ruim");
              event.preventDefault();
              event.stopPropagation();
            }
            else{
                event.preventDefault();
                event.stopPropagation();
                $('#modal_sucesso').modal('show')
                console.log("form sucesso");
            }
            form.classList.add('was-validated');
             
            
          }, false);
        });

        $("#fechar_modal").click(function(){
            console.log('fechar modais')
            $('#modal_sucesso').modal('hide');
            $('#modal_2').modal('hide')
        })
      }, false);
    })();
    
  </script>
@endsection
