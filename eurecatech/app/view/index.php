<?php

$endpointAPI = 'https://servicodados.ibge.gov.br/api/v2/cnae/classes';

if (isset($_POST['pesquisar'])) {
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../css/index.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>Eurecatech</title>
</head>

<body>

    <div id="form" class="container-sm shadow p-3 mb-5 bg-body rounded">
        <form method="post">


            <label class="mb-2"><b style="color:#63358d;">CÓDIGO</b> - DE SERVIÇOS</label>
            <hr class="mb-3">
            <div id="pergunta01">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="000" onclick="view('000','lista0')">
                    <label class="form-check-label" for="000">
                        1 SERVIÇOS DE INFORMÁTICA E CONGÊNERES
                    </label>
                </div>
                <div id="lista0" style="margin-left:20px; font-size:14px;" class="g-3">
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1011 ANÁLISE E DESENVOLVIMENTO DE SISTEMAS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            106 ASSESSORIA E CONSULTORIA EM INFORMÁTICA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1061 ASSESSORIA E CONSULTORIA EM INFORMÁTICA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1091 DISPONIBILIZAÇÃO, SEM CESSÃO DEFINITIVA, DE CONTEÚDOS DE ÁUDIO, VÍDEO, IMAGEM E TEXTO POR MEIO DA INTERNET, RESPEITADA A IMUNIDADE DE LIVROS, JORNAIS E PERIÓDICOS (EXCETO A DISTRIBUIÇÃO DE CONTEÚDOS PELAS PRESTADORAS DE SERVIÇO DE ACESSO CONDICIONADO, DE QUE TRATA A LEI Nº 12.485, DE 12 DE SETEMBRO DE 2011, SUJEITA AO ICMS).
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            104 ELABORAÇÃO DE PROGRAMAS DE COMPUTADORES, INCLUSIVE DE JOGOS ELETRÔNICOS, INDEPENDENTEMENTE DA ARQUITETURA CONSTRUTIVA DA MÁQUINA EM QUE O PROGRAMA SERÁ EXECUTADO, INCLUINDO TABLETS, SMARTPHONES E CONGÊNERES
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1041 ELABORAÇÃO DE PROGRAMAS DE COMPUTADORES, INCLUSIVE DE JOGOS ELETRÔNICOS, INDEPENDENTEMENTE DA ARQUITETURA CONSTRUTIVA DA MÁQUINA EM QUE O PROGRAMA SERÁ EXECUTADO, INCLUINDO TABLETS, SMARTPHONES E CONGÊNERES.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1051 LICENCIAMENTO OU CESSÃO DE DIREITO DE USO DE PROGRAMAS DE COMPUTAÇÃO
                            105 LICENCIAMENTO OU CESSÃO DE DIREITO DE USO DE PROGRAMAS DE COMPUTAÇÃO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1051 LICENCIAMENTO OU CESSÃO DE DIREITO DE USO DE PROGRAMAS DE COMPUTAÇÃO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            105 LICENCIAMENTO OU CESSÃO DE DIREITO DE USO DE PROGRAMAS DE COMPUTAÇÃO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1081 PLANEJAMENTO, CONFECÇÃO, MANUTENÇÃO E ATUALIZAÇÃO DE PÁGINAS ELETRÔNICAS.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            103 PROCESSAMENTO, ARMAZENAMENTO OU HOSPEDAGEM DE DADOS, TEXTOS, IMAGENS, VÍDEOS, PÁGINAS ELETRÔNICAS, APLICATIVOS E SISTEMAS DE INFORMAÇÃO, ENTRE OUTROS FORMATOS, E CONGÊNERES
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1031 PROCESSAMENTO, ARMAZENAMENTO OU HOSPEDAGEM DE DADOS, TEXTOS, IMAGENS, VÍDEOS, PÁGINAS ELETRÔNICAS, APLICATIVOS E SISTEMAS DE INFORMAÇÃO, ENTRE OUTROS FORMATOS, E CONGÊNERES.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1021 PROGRAMAÇÃO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1021 PROGRAMAÇÃO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            102 PROGRAMAÇÃO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1077 SUPORTE TÉCNICO EM INFORMÁTICA(DECISÃO JUDICIAL). PROCESSO JUDICIAL N. 0605279-63.2019.8.04.0001, PROCESSO SIGED N. 2019.02287.02369.0.001060
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1077 SUPORTE TÉCNICO EM INFORMÁTICA(DECISÃO JUDICIAL). PROCESSO JUDICIAL N. 0605279-63.2019.8.04.0001, PROCESSO SIGED N. 2019.02287.02369.0.001060
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            107 SUPORTE TÉCNICO EM INFORMÁTICA, INCLUSIVE INSTALAÇÃO, CONFIGURAÇÃO E MANUTENÇÃO DE PROGRAMAS DE COMPUTAÇÃO E BANCOS DE DADOS.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1071 SUPORTE TÉCNICO EM INFORMÁTICA, INCLUSIVE INSTALAÇÃO, CONFIGURAÇÃO E MANUTENÇÃO DE PROGRAMAS DE COMPUTAÇÃO E BANCOS DE DADOS.
                        </label>
                    </div>

                </div>
            </div>




            <div id="pergunta02">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="aaa" onclick="view2('aaa','lista2')">
                    <label class="form-check-label" for="aaa">
                        10 SERVIÇOS DE INTERMEDIAÇÃO E CONGÊNERES
                    </label>
                </div>

                <div id="lista2" style="margin-left:20px; font-size:14px;" class="g-3">
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1007 AGENCIAMENTO DE NOTÍCIAS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10071 AGENCIAMENTO DE NOTÍCIAS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10081 AGENCIAMENTO DE PUBLICIDADE E PROPAGANDA, INCLUSIVE O AGENCIAMENTO DE VEICULAÇÃO POR QUAISQUER MEIOS.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1008 AGENCIAMENTO DE PUBLICIDADE E PROPAGANDA, INCLUSIVE O AGENCIAMENTO DE VEICULAÇÃO POR QUAISQUER MEIOS.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1006 AGENCIAMENTO MARÍTIMO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10061 AGENCIAMENTO MARÍTIMO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1005 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE BENS MÓVEIS OU IMÓVEIS, NÃO ABRANGIDOS EM OUTROS ITENS OU SUBITENS, INCLUSIVE AQUELES REALIZADOS NO ÂMBITO DE BOLSAS DE MERCADORIAS E FUTUROS, POR QUAISQUER MEIOS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10051 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE BENS MÓVEIS OU IMÓVEIS, NÃO ABRANGIDOS EM OUTROS ITENS OU SUBITENS, INCLUSIVE AQUELES REALIZADOS NO ÂMBITO DE BOLSAS DE MERCADORIAS E FUTUROS, POR QUAISQUER MEIOS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1004 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE CONTRATOS DE ARRENDAMENTO MERCANTIL ( IEASING), DE FRANQUIA ( FRANCHISING ) E DE FATURIZAÇÃO ( FACTORING ).
                        </label>
                    </div>




                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10041 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE CONTRATOS DE ARRENDAMENTO MERCANTIL ( IEASING 5,00), DE FRANQUIA ( FRANCHISING ) E DE FATURIZAÇÃO ( FACTORING ).
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10011 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE CÂMBIO E DE SEGUROS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10031 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE DIREITOS DE PROPRIEDADE INDUSTRIAL, ARTÍSTICA OU LITERÁRIA.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1003 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE DIREITOS DE PROPRIEDADE INDUSTRIAL, ARTÍSTICA OU LITERÁRIA.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10012 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE PLANOS PRIVADOS DE ASSISTÊNCIA À SAÚDE E CONGÊNERES.
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1002 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE TÍTULOS EM GERAL, VALORES MOBILIÁRIOS E CONTRATOS QUAISQUER.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10021 AGENCIAMENTO, CORRETAGEM OU INTERMEDIAÇÃO DE TÍTULOS EM GERAL, VALORES MOBILIÁRIOS E CONTRATOS QUAISQUER.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10101 DISTRIBUIÇÃO DE BENS DE TERCEIROS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1010 DISTRIBUIÇÃO DE BENS DE TERCEIROS.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            10091 REPRESENTAÇÃO DE QUALQUER NATUREZA, INCLUSIVE COMERCIAL
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="7311400_0">
                        <label class="form-check-label" for="7311400_0">
                            1009 REPRESENTAÇÃO DE QUALQUER NATUREZA, INCLUSIVE COMERCIAL
                        </label>
                    </div>
                </div>
                <div class="row mb-3">
                    <hr>
                    <div class="col text-end">
                        <button type="button" class="btn btn-primary" id="liveToastBtn">CONCLUIR</button>
                    </div>
                </div>
            </div>

    </div>


    </form>
    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 5%; right: 1%;">
        <div class="d-flex">
            <div class="toast-body">
                Você deseja realmente marca essa opção?
                <hr>
                Código proposto 
            </div>
                       
  
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    </div>


</body>

<footer>


    <script>
        document.getElementById('lista0').style.display = 'none';
        document.getElementById('lista2').style.display = 'none';

        function view(on, lista) {

            let checkbox = document.getElementById(on);
            if (checkbox.checked) {
                document.getElementById(lista).style.display = 'block';
            } else {
                document.getElementById(lista).style.display = 'none';
            }
        }

        function view2(on, lista2) {


            let checkbox = document.getElementById(on);
            if (checkbox.checked) {
                document.getElementById(lista2).style.display = 'block';
            } else {
                document.getElementById(lista2).style.display = 'none';
            }
        }
    </script>

    <script>
        $("#7311400_0").click(function() {
            setTimeout(
            $(".toast").toast('show')
            ,5000);
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</footer>

</html>