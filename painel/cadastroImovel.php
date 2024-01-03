<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="../favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../fonts/icomoon/style.css" />
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="../../projeto-cc19/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" href="../css/tiny-slider.css" />
    <link rel="stylesheet" href="../css/aos.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>

    <title>
      Cadastro de Anunciante
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="../" class="logo m-0 float-start">Imobiliária  <span style="font-size:12px">cronus</span></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="index.html">Home</a></li>
              <li class="has-children">
                <a href="properties.html">Acesso</a>
                <ul class="dropdown">
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Recuperar senha</a></li>
                  <li><a href="#">Esqueci o login</a></li>
                  <li><a href="#">Parceiros</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="properties.html">Imóveis</a>
                <ul class="dropdown">
                  <li><a href="#">Comprar imóvel</a></li>
                  <li><a href="#">Venda de imóvel</a></li>
                  <li class="has-children">
                    <a href="#">Alugar</a>
                    <ul class="dropdown">
                      <li><a href="#">Sala comercial</a></li>
                      <li><a href="#">Residêncial</a></li>
                      <li><a href="#">Chácara</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="services.html">Serviços</a></li>
              <li><a href="about.html">Nós</a></li>
              <li><a href="contact.html">Suporte</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div
      class="hero page-inner overlay">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-12 text-center mt-9">
            <!-- <h1 class="heading" data-aos="fade-up">Cadastro</h1> -->
            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-white-50"
                  aria-current="page">
                  Cadastro de Imóvel
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <h3>Cadastro de Imóvel</h3><br>
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <form id="cadastroImovelForm">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="hidden" id="proprietario" value="181996">
                            <input
                                    type="text"
                                    value="Apartamento"
                                    id="tipoImovel"
                                    class="form-control"
                                    placeholder="Tipo de Imóvel (casa, apartamento, terreno, etc.)"
                                    oninput="digitarDados()"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="text"
                                    value="68390000"
                                    id="cep"
                                    class="form-control"
                                    placeholder="CEP"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="text"
                                    value="Avenida Apocalipse"
                                    id="endereco"
                                    class="form-control"
                                    placeholder="Endereço"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="text"
                                    value="Centro"
                                    id="bairro"
                                    class="form-control"
                                    placeholder="Bairro"
                                    oninput="digitarDados()"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="text"
                                    value="Ourilândia do Norte"
                                    id="cidade"
                                    class="form-control"
                                    placeholder="Cidade"
                                    required
                                    oninput="digitarDados()"
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="text"
                                    value="PA"
                                    id="estado"
                                    class="form-control"
                                    placeholder="Estado"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="2"
                                    id="dormitorios"
                                    class="form-control"
                                    placeholder="Dormitórios"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="2"
                                    id="banheiros"
                                    class="form-control"
                                    placeholder="Banheiros"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="1"
                                    id="vagasGaragem"
                                    class="form-control"
                                    placeholder="Vagas de Garagem"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="1200"
                                    id="areaTotal"
                                    class="form-control"
                                    placeholder="Área Total (M²)"
                                    oninput="digitarDados()"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="1500"
                                    id="valorAluguel"
                                    class="form-control"
                                    placeholder="Valor do Aluguel"
                                    oninput="digitarDados()"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="250000"
                                    id="valorVenda"
                                    class="form-control"
                                    placeholder="Valor de Venda"
                                    oninput="digitarDados()"
                                    required
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <select name="tipoAnuncio" id="tipoAnuncio" class="form-control" required>
                                <option value="">-- Tipo Anúncio --</option>
                                <option value="Aluguel">Aluguel</option>
                                <option value="Venda">Venda</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea
                                    id="descricao"
                                    class="form-control"
                                    placeholder="Descrição"
                                    rows="4"
                                    oninput="digitarDados()"
                            >Teste de desenvolvimento de software Imobiliária Cronus - produto 001</textarea>
                        </div>
                        <div class="col-12">
                            <!-- botão de inserir produto na tabela -->
                                <ul class="notifications">
                                    <i>
                                        <input
                                            data-message="Produto inserido com sucesso!"
                                            type="submit"
                                            value="Cadastrar Imóvel"
                                            class="btn btn-primary"
                                        />
                                    </i>
                                </ul>
                            <!-- fim botão de notificação e envio -->
                        </div>
                    </div>
                </form>
            </div>
            <div
                class="col-lg-4 mb-5 mb-lg-0"
                data-aos="fade-up"
                data-aos-delay="100">
                <div class="contact-info">
                  <div class="address mt-2">
                      <i class="icon-room"></i>
                      <h4 class="mb-2">Localização</h4>
                      <p>
                      <span id="id_cidade">Ourilândia do Norte,</span><br />
                      <span id="id_bairro">BELA VISTA</span>
                      </p>
                  </div>

                  <div class="open-hours mt-4">
                      <i class="fi fi-tr-usd-circle"></i>
                      <h4 class="mb-2">Valor</h4>
                      <p>
                      <span id="id_valorOperacao">R$ 800,00</span><br />
                      <span id="id_operacao">Aluguel</span>
                      </p>
                  </div>

                  <div class="email mt-4">
                      <i class="icon-envelope"></i>
                      <h4 class="mb-2">Email</h4>
                      <p>suporte@imobiliariacronus.com.br</p>
                  </div>

                  <div class="phone mt-4">
                      <i class="icon-whatsapp"></i>
                      <h4 class="mb-2">WhatsApp:</h4>
                      <p onclick="location.href='https://wa.me/94991910388'">(94) 9 9191-0388</p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /.untree_co-section -->

    <!-- Produtos cadastrados -->
    <div class="section bg-light">
      <div class="container">
        <div id="container-imoveis" class="row">
          <!-- listagem de imoveis cadastrados aqui -->
        </div>
      </div>
    </div>
    <!-- Produtos cadastrado -->


<script>
// //////////////// Consulta assincrona para retornar o imovel cadastrado // //////////////////////
// Chamar a função obterDadosDosImoveis automaticamente ao carregar a página
document.addEventListener('DOMContentLoaded', obterDadosDosImoveis);

async function obterDadosDosImoveis() {
    try {
        const resposta = await fetch('api/consulta/imovel/index.php');
        const listaDeImoveis = await resposta.json();

        // Verificar se a resposta é uma array
        if (Array.isArray(listaDeImoveis)) {
            // Selecionar o contêiner onde os imóveis serão exibidos
            const containerImoveis = document.getElementById('container-imoveis');

            // Limpar o conteúdo atual (opcional)
            containerImoveis.innerHTML = '';

            // Inicializar o valor do delay
            let delayValue = 300;

            // Iterar sobre a lista de imóveis
            listaDeImoveis.forEach(imovel => {
                // Criar elementos HTML para cada imóvel
                const divImovel = document.createElement('div');
                divImovel.className = 'col-6 col-lg-3';
                divImovel.setAttribute('data-aos', 'fade-up');
                divImovel.setAttribute('data-aos-delay', delayValue.toString());

                // Incrementar o valor do delay para o próximo imóvel
                delayValue += 100; // ou qualquer outro valor desejado de incremento

                divImovel.innerHTML = `
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-2 mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">
                            R$ ${imovel.ValorAluguel}
                        </h3>
                        <p class="text-black-50">
                            <span class="tipo">${imovel.TipoImovel}</span> - <span class="cidade">${imovel.Cidade}</span> <br>
                            <span class="bairro">${imovel.Bairro}</span>
                        </p>
                        <p><a href="#" class="learn-more">Gerenciar</a></p>
                    </div>
                `;

                // Adicionar o elemento do imóvel ao contêiner
                containerImoveis.appendChild(divImovel);
            });
        } else {
            console.error('A resposta da API não é uma array:', listaDeImoveis);
        }
    } catch (erro) {
        console.error('Erro ao obter dados dos imóveis:', erro);
    }
}

// ///////////////////// fim consulta asincrona de imoveis /////////////////////





    // AUTO COMPLETAR OS CAMPOS DO LADO PARA VISUALIZAÇÃO LIMPA
    function digitarDados(){
        const valorAluguel  = document.getElementById("valorAluguel").value;
        const valorVenda    = document.getElementById("valorVenda").value;
        const cidade        = document.getElementById("cidade").value;
        const bairro        = document.getElementById("bairro").value;
        const tipoOperacao  = document.getElementById("tipoOperacao").value;

        // TELA DE VISUALIZAÇÃO LIMPA ( ENVIANDO OS DADOS PARA O FRONT-END)
        document.getElementById("id_bairro").innerText      = bairro;
        document.getElementById("id_cidade").innerText      = cidade;
        document.getElementById("tipoOperacao").innerText   = tipoOperacao;
    }



    document.getElementById('cadastroImovelForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Coletar dados do formulário
        const tipoImovel        = document.getElementById('tipoImovel').value;
        const endereco          = document.getElementById('endereco').value;
        const bairro            = document.getElementById('bairro').value;
        const cidade            = document.getElementById('cidade').value;
        const estado            = document.getElementById('estado').value;
        const cep               = document.getElementById('cep').value;
        const dormitorios       = document.getElementById('dormitorios').value;
        const banheiros         = document.getElementById('banheiros').value;
        const vagasGaragem      = document.getElementById('vagasGaragem').value;
        const areaTotal         = document.getElementById('areaTotal').value;
        const valorAluguel      = document.getElementById('valorAluguel').value;
        const valorVenda        = document.getElementById('valorVenda').value;
        const descricao         = document.getElementById('descricao').value;
        const tipoAnuncio       = document.getElementById('tipoAnuncio').value;

        // Verificar se algum campo está vazio
        if (!tipoImovel || !endereco || !bairro || !cidade || !estado || !cep || !dormitorios || !banheiros || 
        !vagasGaragem || !areaTotal || !valorAluguel || !valorVenda || !descricao || !tipoAnuncio) {
            alert('Por favor, preencha os campos obrigatórios.');
            return;
        }

        // Construir objeto com os dados
        const imovel = {
            TipoImovel: tipoImovel,
            Endereco: endereco,
            Bairro: bairro,
            Cidade: cidade,
            Estado: estado,
            CEP: cep,
            Dormitorios: dormitorios,
            Banheiros: banheiros,
            VagasGaragem: vagasGaragem,
            AreaTotal: areaTotal,
            ValorAluguel: valorAluguel,
            ValorVenda: valorVenda,
            Descricao: descricao,
            TipoAnuncio: tipoAnuncio
        };

        // Enviar dados para o backend
        enviarDadosParaBackend(imovel);
    });

    function enviarDadosParaBackend(imovel) {
        fetch('api/cadastro/imovel/index.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(imovel)
        })
        .then(response => response.json())
        .then(result => {
            console.log(result); // Resultado do backend
            // Adicione aqui lógica adicional conforme necessário
            let success = result.success;
            let message = result.message;
            if (success === false) {
                alert(message);
                //document.getElementById('id_cpf').value = "";
                //document.getElementById('id_usuario').value = "";
            } else {
                alert(message);
                document.getElementById('cadastroImovelForm').reset();
                obterDadosDosImoveis();
            }
        })
        .catch(error => {
            console.error('Erro ao enviar dados para o backend:', error);
        });
    }


    // fim cadastro de imovel //////////////////////// fim fim //

</script>





    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Suporte</h3>
              <address>Ourilândia do Norte, Pará</address>
              <ul class="list-unstyled links">
                <li><a href="tel://94991910388">(62) 9 99195-7693</a></li>
                <li><a href="tel://94991910388">(62) 9 9195-7693</a></li>
                <li>
                  <a href="mailto:info@mydomain.com">teste@gmail.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Sources</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Visão</a></li>
                <li><a href="#">Missão</a></li>
                <li><a href="#">Termos</a></li>
                <li><a href="#">LGPD</a></li>
              </ul>
              <ul class="list-unstyled float-start links">
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Trabalhe conosco</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Creative</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links Úteis</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Visão</a></li>
                <li><a href="#">Nós</a></li>
                <li><a href="#">Suporte</a></li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; projetado por 
              <a href="http://11nov.rf.gd">Pedro Nascimento</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
            <div>
              Distribuido por
              <a href="https://11nov.rf.gd/" target="_blank">11NOV Agência</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
   
    <!-- jQuery requerido -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

    <!-- <script type="text/javascript" src="https://dev.pedro.com/projeto-cc19/assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="https://dev.pedro.com/projeto-cc19/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="https://dev.pedro.com/projeto-cc19/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="https://dev.pedro.com/projeto-cc19/assets/js/bootstrap/js/bootstrap.min.js "></script>

    <!-- notificações -->
    <!-- <script type="text/javascript" src="../js/bootstrap-growl.min.js"></script>
    <script type="text/javascript" src="../js/notification.js"></script> -->


    <!-- bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/tiny-slider.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/counter.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>
