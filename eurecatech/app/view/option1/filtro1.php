<?php

$endpointAPI = 'https://servicodados.ibge.gov.br/api/v2/cnae/classes';

if (isset($_POST['pesquisar'])) {
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/index.css">
    <title>Eurecatech</title>
</head>

<body>

    <div id="form" class="container-sm shadow p-3 mb-5 bg-body rounded">
        <form method="post">


            <label class="mb-2"><b style="color:#63358d;">SUBCLASSES</b> - COMISSÃO NACIONAL DE CLASSIFICAÇÃO - CONCLA</label>
            <hr class="mb-3">
            <div id="pergunta01">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="000" onclick="view('000','lista0')">
                    <label class="form-check-label" for="000">
                        7311400 - Agências de publicidade
                    </label>
                </div>
                <div id="lista0" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">7311400 - Agências de publicidade Notas Explicativas: Esta subclasse compreende:</b></p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            A criação e a produção de campanhas de publicidade para qualquer finalidade, para veiculação em quaisquer tipos de veículos de comunicação
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_1">
                        <label class="form-check-label" for="7311400_1">
                            A colocação, em nome de clientes, de material publicitário em jornais, revistas, rádio, televisão, internet e em outros veículos de comunicação
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_2">
                        <label class="form-check-label" for="7311400_2">
                            Os representantes dos veículos de comunicação para venda de tempo ou espaço de publicidade a clientes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_3">
                        <label class="form-check-label" for="7311400_3">
                            A prestação de serviços para merchandising em rádio e televisão
                        </label>
                    </div>
                </div>


                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="001" onclick="view('001','lista1')">
                    <label class="form-check-label" for="001">
                        1813099 - Impressão de material para outros usos
                    </label>
                </div>

                <div id="lista1" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">1813099 - Impressão de material para outros usos
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="1813099_0">
                        <label class="form-check-label" for="1813099_0">
                            A impressão, sob contrato, de impressos para usos diversos (cardápios, cartões de apresentação e de mensagens, diplomas, convites, etc.)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="1813099_1">
                        <label class="form-check-label" for="1813099_1">
                            A impressão por dados variáveis transacionais (contas telefônicas, extratos bancários)
                        </label>
                    </div>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="002" onclick="view('002','lista2')">
                    <label class="form-check-label" for="002">
                        4619200 - Representantes comerciais e agentes do comércio de mercadorias em geral não especializado
                    </label>
                </div>
                <div id="lista2" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">4619200 - Representantes comerciais e agentes do comércio de mercadorias em geral não especializado
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="4619200_0">
                        <label class="form-check-label" for="4619200_0">
                            As atividades de representantes comerciais e agentes do comércio de mercadorias em geral, isto é, sem predominância de mercadorias ou grupo de mercadorias específicas
                        </label>
                    </div>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="003" onclick="view('003','lista3')">
                    <label class="form-check-label" for="003">
                        5911102 - Produção de filmes para publicidade
                    </label>
                </div>
                <div id="lista3" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">5911102 - Produção de filmes para publicidade
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="004" onclick="view('004','lista4')">
                    <label class="form-check-label" for="004">
                        6319400 - Portais, provedores de conteúdo e outros serviços de informação na internet.
                    </label>
                </div>
                <div id="lista4" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">6319400 - Portais, provedores de conteúdo e outros serviços de informação na internet.
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="6319400_0">
                        <label class="form-check-label" for="6319400_0">
                            A operação de páginas de internet (websites) ou de ferramentas de busca (search engine) para gerar e manter grandes bases de dados de endereços e conteúdos de internet.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="6319400_1">
                        <label class="form-check-label" for="6319400_1">
                            A operação de portais da internet que atualizam periodicamente seu conteúdo, como, por exemplo, os dos meios de comunicação.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="6319400_2">
                        <label class="form-check-label" for="6319400_2">
                            As atividades para certificação digital.
                        </label>
                    </div>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="005" onclick="view('005','lista5')">
                    <label class="form-check-label" for="005">
                        6391700 - Agências de notícias.
                    </label>
                </div>
                <div id="lista5" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">6391700 - Agências de notícias.
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="6">
                        <label class="form-check-label" for="6">
                            A atividade de agências de notícias cuja função é a coleta, síntese e difusão de materiais para os meios de comunicação (textos, fotos, filmes, etc.).
                        </label>
                    </div>

                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="006" onclick="view('006','lista6')">
                    <label class="form-check-label" for="006">
                        7319001 - Criação de estandes para feiras e exposições.
                    </label>
                </div>
                <div id="lista6" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">7319001 - Criação de estandes para feiras e exposições.
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="6391700_0">
                        <label class="form-check-label" for="6391700_0">
                            A atividade de criação de conteúdo publicitário de estandes para feiras e exposições.
                        </label>
                    </div>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="007" onclick="view('007','lista7')">
                    <label class="form-check-label" for="007">
                        7319002 - Promoção de vendas.
                    </label>
                </div>
                <div id="lista7" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">7319002 - Promoção de vendas.
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="7319002_0">
                        <label class="form-check-label" for="7319002_0">
                            A promoção de vendas e a publicidade no local da venda.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="7319002_1">
                        <label class="form-check-label" for="7319002_1">
                            A distribuição ou entrega de material publicitário (fullfilment).
                        </label>
                    </div>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="008" onclick="view('008','lista8')">
                    <label class="form-check-label" for="008">
                        7319003 - Marketing direto.
                    </label>
                </div>
                <div id="lista8" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">7319003 - Marketing direto
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="9">
                        <label class="form-check-label" for="9">
                            A publicidade por mala direta, por telefone, em visitas de representantes (de laboratórios farmacêuticos, de empresas de produtos de beleza, etc.).
                        </label>
                    </div>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="009" onclick="view('009','lista9')">
                    <label class="form-check-label" for="009">
                        7319099 - Outras atividades de publicidade não especificadas anteriormente.
                    </label>
                </div>
                <div id="lista9" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">7319099 - Outras atividades de publicidade não especificadas anteriormente
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="7319099_0">
                        <label class="form-check-label" for="7319099_0">
                            A publicidade aérea
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="7319099_1">
                        <label class="form-check-label" for="7319099_1">
                            Os serviços de alto-falante e de sonorização (uso de alto-falantes) em veículos motorizados ou não, com a finalidade de publicidade.
                        </label>
                    </div>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="010" onclick="view('010','lista10')">
                    <label class="form-check-label" for="010">
                        7410299 - atividades de design não especificadas anteriormente.
                    </label>
                </div>
                <div id="lista10" class="mb-4" style="margin-left: 40px;">
                    <hr>
                    <p style="font-size: 14px;"><b style="color:#63358d;">7410299 - atividades de design não especificadas anteriormente
                            Notas Explicativas:
                            Esta subclasse compreende:</b></p>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="7410299_0">
                        <label class="form-check-label" for="7410299_0">
                            Os serviços de design gráfico e de diagramação.
                        </label>
                    </div>
                </div>
                <hr class="mb-3">
                <div class="row">
                    <div class="col text-left">
                        <button id='botaoEnviar' type="button" id="volta01" onclick="voltando01()" class="btn btn-success btn">VOLTAR</button>
                    </div>
                    <div class="col text-end">
                        <button id='botaoEnviar' type="button" id="avanca01" onclick="avançando01()" class="btn btn-success btn">PROXIMO</button>
                    </div>
                </div>
            </div>

            

        </form>
    </div>


</body>

<footer>


    <script>
        document.getElementById('lista0').style.display = 'none';
        document.getElementById('lista1').style.display = 'none';
        document.getElementById('lista2').style.display = 'none';
        document.getElementById('lista3').style.display = 'none';
        document.getElementById('lista4').style.display = 'none';
        document.getElementById('lista5').style.display = 'none';
        document.getElementById('lista6').style.display = 'none';
        document.getElementById('lista7').style.display = 'none';
        document.getElementById('lista8').style.display = 'none';
        document.getElementById('lista9').style.display = 'none';
        document.getElementById('lista10').style.display = 'none';
        



        function view(on,lista) {

            let checkbox = document.getElementById(on);
            if (checkbox.checked) {
                document.getElementById(lista).style.display = 'block';
            } else {
                document.getElementById(lista).style.display = 'none';
            }
        }
    </script>

    
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</footer>

</html>