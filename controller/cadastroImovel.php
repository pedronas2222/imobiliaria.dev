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
                  Cadastro
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
                            <input
                                    type="text"
                                    value="Apartamento"
                                    id="tipoImovel"
                                    class="form-control"
                                    placeholder="Tipo de Imóvel (casa, apartamento, terreno, etc.)"
                                    required
                                    oninput="digitarDados()"
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="text"
                                    value="68390000"
                                    id="cep"
                                    class="form-control"
                                    placeholder="CEP"
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
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="2"
                                    id="banheiros"
                                    class="form-control"
                                    placeholder="Banheiros"
                            />
                        </div>
                        <div class="col-6 mb-3">
                            <input
                                    type="number"
                                    value="1"
                                    id="vagasGaragem"
                                    class="form-control"
                                    placeholder="Vagas de Garagem"
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
                            />
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
                data-aos-delay="100"
            >
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
                    <i class="icon-clock-o"></i>
                    <h4 class="mb-2">Valor</h4>
                    <p>
                    <span id="id_valoraluguel">R$ 800,00</span><br />
                    <span id="id_operacao">Aluguel</span>
                    </p>
                </div>

                <div class="email mt-4">
                    <i class="icon-envelope"></i>
                    <h4 class="mb-2">Email</h4>
                    <p>suporte@innovimob.com.br</p>
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




    <script>

    // AUTO COMPLETAR OS CAMPOS DO LADO PARA VISUALIZAÇÃO LIMPA
    function digitarDados(){
        const valorAluguel  = document.getElementById("valorAluguel").value;
        const valorVenda    = document.getElementById("valorVenda").value;
        const cidade        = document.getElementById("cidade").value;
        const bairro        = document.getElementById("bairro").value;

    // TELA DE VISUALIZAÇÃO LIMPA ( ENVIANDO OS DADOS PARA O FRONT-END)
    document.getElementById("id_bairro").innerText = bairro;
    document.getElementById("id_cidade").innerText = cidade;
    }



    document.getElementById('cadastroImovelForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Coletar dados do formulário
        const tipoImovel = document.getElementById('tipoImovel').value;
        const endereco = document.getElementById('endereco').value;
        const bairro = document.getElementById('bairro').value;
        const cidade = document.getElementById('cidade').value;
        const estado = document.getElementById('estado').value;
        const cep = document.getElementById('cep').value;
        const dormitorios = document.getElementById('dormitorios').value;
        const banheiros = document.getElementById('banheiros').value;
        const vagasGaragem = document.getElementById('vagasGaragem').value;
        const areaTotal = document.getElementById('areaTotal').value;
        const valorAluguel = document.getElementById('valorAluguel').value;
        const valorVenda = document.getElementById('valorVenda').value;
        const descricao = document.getElementById('descricao').value;

        // Verificar se algum campo está vazio
        if (!tipoImovel || !endereco || !cidade || !estado) {
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
            Descricao: descricao
        };

        // Enviar dados para o backend
        enviarDadosParaBackend(imovel);
    });

    function enviarDadosParaBackend(imovel) {
        fetch('https://dev.pedro.com/imobiliaria.dev/controller/api/cadastro/imovel/index.php', {
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
                document.getElementById('id_cpf').value = "";
                document.getElementById('id_usuario').value = "";
            } else {
                alert(message);
                document.getElementById('cadastroImovelForm').reset();
            }
        })
        .catch(error => {
            console.error('Erro ao enviar dados para o backend:', error);
        });
    }


    // fim cadastro de imovel //////////////////////// fim fim //







//   document.getElementById('cadastroForm').addEventListener('submit', function (event) {
//       event.preventDefault();

//       // Coletar dados do formulário
//       const nome = document.getElementById('id_nome').value;
//       const whatsapp = document.getElementById('id_whatsapp').value;
//       const usuario = document.getElementById('id_usuario').value;
//       const passwordInput = document.getElementById('id_password');
//       const cpf = document.getElementById('id_cpf').value;

//       // Verificar se algum campo está vazio
//       if (!nome || !whatsapp || !usuario || !passwordInput || !cpf) {
//           alert('Por favor, preencha todos os campos.');
//           return;
//       }

//       // Codificar a senha em Base64
//       const senhaCodificada = btoa(passwordInput.value);

//       // Construir objeto com os dados
//       const pessoa = {
//           Nome: nome,
//           WhatsApp: whatsapp,
//           Usuario: usuario,
//           Senha: senhaCodificada,
//           CPF: cpf
//       };

//       // Enviar dados para o backend
//       enviarDadosParaBackend(pessoa);
//   });

//   function enviarDadosParaBackend(pessoa) {
//       fetch('https://dev.pedro.com/imobiliaria.dev/api/pessoa/SalvarPessoa/index.php', {
//           method: 'POST',
//           headers: {
//               'Content-Type': 'application/json'
//           },
//           body: JSON.stringify(pessoa)
//       })
//       .then(response => response.json())
//       .then(result => {
//           console.log(result); // Resultado do backend
//           // Adicione aqui lógica adicional conforme necessário
//           let success = result.success;
//           let message = result.message;
//           if (success === false) {
//               alert(message);
//               document.getElementById('id_cpf').value = "";
//               document.getElementById('id_usuario').value = "";
//           } else {
//               alert(message);
//               document.getElementById('cadastroForm').reset();
//           }
//           console.log(success);
//       })
//       .catch(error => {
//           console.error('Erro ao enviar dados para o backend:', error);
//       });
//   }

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
