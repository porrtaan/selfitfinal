<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Selfit</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .submit_button {
      padding: 15px 30px;
      border: none;
      background-color: #FF5733;
      color: #FFFFFF;
      font-size: 18px;
      border-radius: 10px;
      cursor: pointer;
    }

    .video-card-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      /* Garante que a div ocupe toda a largura disponível */
    }

    .video-card {
      text-align: center;
      max-width: 400px;
      /* Define um limite para o tamanho do card */
      width: 100%;
    }

    .video-container video {
      width: 100%;
      /* Faz o vídeo ocupar toda a largura do card */
      border-radius: 10px;
      /* Adiciona um pequeno arredondamento */
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      /* Sombra para um efeito moderno */
    }

    /* Centralizando o último card */
    .last-item {
      flex-basis: 100%;
      display: flex;
      justify-content: center;
    }

    .btn-comprar {
      display: inline-block;
      padding: 10px 20px;
      background-color: #FF5733;
      /* Cor laranja */
      color: #FFFFFF;
      /* Cor do texto */
      font-size: 16px;
      border: none;
      /* Remove a borda padrão do botão */
      border-radius: 5px;
      cursor: pointer;
      /* Muda o cursor para indicar que é clicável */
      margin-top: 10px;
      /* Espaçamento acima do botão */
      transition: background-color 0.3s ease;
      /* Efeito de transição suave */
    }

    .btn-comprar:hover {
      background-color: #E64A19;
      /* Cor laranja mais escura ao passar o mouse */
    }
  </style>
</head>

<body class="sub_page">
  <?php include 'header.php'; ?>
  <!-- product section -->
  <section class="product_section layout_padding">
    <form action="fatura.php" method="get">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Videos de educação
          </h2>
        </div>
        <div class="product_container">
          <div class="row">
            <div class="col-sm-6 col-md-4 ">
              <div class="box">
                <div class="video-container">
                  <video controls poster="images/atv.jpg">
                    <source src="videos/exp1.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                  </video>
                </div>
                <div class="detail-box">
                  <a href="exercicio_unico.php" class="p_name">
                    Atividade Fisica
                  </a>
                  <h6 class="p_price">
                    <span class="new_price">
                      Após a visualização do video responda a este questionário
                    </span>
                  </h6>
                  <button class="btn-comprar" formaction="https://docs.google.com/forms/d/1Pm6RpsP2eH99CobuyQc2WfOOz8xwj0n_fNzOb5_XvGg/viewform?edit_requested=true">
                    Questionário
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
              <div class="box">
                <div class="video-container">
                  <video controls poster="images/meia_dose1.jpg">
                    <source src="videos/exp2.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                  </video>
                </div>
                <div class="detail-box">
                  <a href="" class="p_name">
                    CME vs CMERT
                  </a>
                  <h6 class="p_price">
                    <span class="new_price">
                      Após a visualização do video responda a este questionário
                    </span>
                  </h6>
                  <button class="btn-comprar" formaction="https://docs.google.com/forms/d/1MMU8u6TK_Hf4DX6reDHH1CCWJ4Ve6rTvYs3SduQcACI/viewform?edit_requested=true">
                    Questionário
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
              <div class="box">
                <div class="video-container">
                  <video controls poster="images/meia_dose2.jpg">
                    <source src="videos/exp3.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                  </video>
                </div>
                <div class="detail-box">
                  <a href="" class="p_name">
                    Fatores de Risco
                  </a>
                  <h6 class="p_price">
                    <span class="new_price">
                      Após a visualização do video responda a este questionário
                    </span>
                  </h6>
                  <button class="btn-comprar" formaction="https://docs.google.com/forms/d/1J_u0lePdPiw9ZyWGGBn4rnw5R-IMEf6nVukqW9kruPw/viewform?edit_requested=true">
                    Questionário
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
              <div class="box">
                <div class="video-container">
                  <video controls poster="images/nhamano.jpg">
                    <source src="videos/exp4.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                  </video>
                </div>
                <div class="detail-box">
                  <a href="" class="p_name">
                    Posturas Estranhas
                  </a>
                  <h6 class="p_price">
                    <span class="new_price">
                      Após a visualização do video responda a este questionário
                    </span>
                  </h6>
                  <button class="btn-comprar" formaction="https://docs.google.com/forms/d/1JWlhKfKl1ADPD-QRXeGrfaFYVOok66Evgga8OSqLrac/viewform?edit_requested=true">
                    Questionário
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
              <div class="box">
                <div class="video-container">
                  <video controls poster="images/nhamno2.jpg">
                    <source src="videos/exp5.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                  </video>
                </div>
                <div class="detail-box">
                  <a href="" class="p_name">
                    Movimentos Repetidos
                  </a>
                  <h6 class="p_price">
                    <span class="new_price">
                      Após a visualização do video responda a este questionário
                    </span>
                  </h6>
                  <button class="btn-comprar" formaction="https://docs.google.com/forms/d/1IJmSZ2WsddtEq3pJAD5itebn2f4iqIBtYPEmMtCpehA/viewform?edit_requested=true">
                    Questionário
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 ">
              <div class="box">
                <div class="video-container">
                  <video controls poster="images/meia_dose3.jpg">
                    <source src="videos/exp6.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                  </video>
                </div>
                <div class="detail-box">
                  <a href="" class="p_name">
                    Posturas Mantidas
                  </a>
                  <h6 class="p_price">
                    <span class="new_price">
                      Após a visualização do video responda a este questionário
                    </span>
                  </h6>
                  <button class="btn-comprar" formaction="https://docs.google.com/forms/d/1ISscNmeWvPl9jzFFWmwFq5B9TFNcrZFSFxcnqM14TZA/viewform?edit_requested=true">
                    Questionário
                  </button>
                </div>
              </div>
            </div>
            <div class="last-item">
              <div class="col-sm-6 col-md-4 ">
                <div class="box">
                  <div class="video-container">
                    <video controls poster="images/sedutor.jpg">
                      <source src="videos/exp7.mp4" type="video/mp4">
                      Seu navegador não suporta o elemento de vídeo.
                    </video>
                  </div>
                  <div class="detail-box">
                    <a href="" class="p_name">
                      Revisão
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
    </form>
  </section>

  <!-- end product section -->

  <!-- info section -->

  <?php include 'footer.php' ?>

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
</body>

</html>