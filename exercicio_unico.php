<?php

  $id = isset($_GET['id']) ? $_GET['id'] : 1; // Define um valor padrão caso o id não seja passado

  // Definição dos produtos
  $products = [
      1 => [
          "title" => "Alongamento 1",
          "description" => "⚠ Se sentir tonturas, não realize este alongamento.
                            1. Sentado ou em pé, com as costas direitas.
                            2. Incline a cabeça para o lado, aproximando a orelha do ombro.
                            3. Mantenha os ombros relaxados e alinhados.
                            4. Aplique pressão com a mão do mesmo lado, em direção ao ombro, até sentir o alongamento (sem dor)
                            5. Para aumentar a intensidade, use a mão do mesmo lado para aumentar a pressão aplicada.
                            6. Mantenha a posição por 30 segundos para cada lado.",
          "video" => "videos/alg1.mp4"
      ],
      2 => [
          "title" => "Alongamento 2",
          "description" => "⚠ Se sentir tonturas, não realize este alongamento.
                            1. Sentado ou em pé, com as costas direitas.
                            2. Baixa lentamente o queixo em direção ao peito.
                            3. Para aumentar a intensidade, coloque as mãos na parte de trás da cabeça e aplique uma ligeira pressão.
                            4. Mantenha a posição por 30 segundos, sem sentir dor.",
          "video" => "videos/alg2.mp4"
      ],
      3 => [
          "title" => "Alongamento 3",
          "description" => "1. Estique o braço à frente, com a palma da mão virada para cima.
                            2. Com a outra mão, puxe suavemente os dedos para baixo, alongando a parte anterior do antebraço.
                            3. Mantenha os cotovelos esticados durante o movimento.
                            4. Ajuste a intensidade puxando mais ou menos os dedos.
                            5. Mantenha a posição por 30 segundos para cada mão.",
          "video" => "videos/alg3.mp4"
      ],
      4 => [
          "title" => "Alongamento 4",
          "description" => "1. Elevar o braço acima do nível da cabeça e dobrar o cotovelo, levando a mão para trás da cabeça, em direção à parte superior das costas.
                            2. Com a outra mão, segure o cotovelo do braço dobrado e empurre-o ligeiramente para trás e para baixo.
                            3. Mantenha a cabeça e as costas direitas, sem inclinar para os lados ou para frente.
                            4. Ajuste a intensidade empurrando mais ou menos o cotovelo, até sentir um leve alongamento sem dor.
                            5. Mantenha a posição por 30 segundos para cada lado.
                            ",
          "video" => "videos/alg4.mp4"
      ],
      5 => [
          "title" => "Alongamento 5",
          "description" => "1. Colocar a palma da mão na parede, aproximadamente à altura do ombro.
                            2. Os pés devem estar perpendiculares à parede para melhor posicionamento.
                            3. Mantendo as costas direitas, rode o tronco para o lado oposto, até sentir o alongamento na região do peito e ombro.
                            4. Ajusta a intensidade rodando mais ou menos o tronco.
                            5. Mantenha a posição por 30 segundos para cada braço.",
          "video" => "videos/alg5.mp4"
      ],
      6 => [
          "title" => "Alongamento 6",
          "description" => "1. Em pé, com os pés juntos.
                            2. Mantém os joelhos esticados e dobre o tronco para a frente, descendo as mãos pelas pernas em direção aos pés.
                            3. Não force o movimento – desça até sentir um leve alongamento na parte posterior das pernas.
                            4. A intensidade pode ser ajustada ao dobrar mais o tronco.
                            5. Mantenha a posição por 30 segundos.",
          "video" => "videos/alg6.mp4"
      ],
      7 => [
          "title" => "Alongamento 7",
          "description" => "1. Em pé, mantém as costas direitas.
                            2. Segura o tornozelo com a mão do mesmo lado e puxa-o em direção ao glúteo.
                            3. O joelho da perna que está a ser alongada deve apontar para baixo, próximo à outra perna.
                            4. Ajusta a intensidade levando o joelho ligeiramente mais para trás.
                            5. Mantenha a posição por 30 segundos até sentir um leve desconforto, sem dor.",
          "video" => "videos/alg7.mp4"
      ]
  ];

  // Se o ID não existir na lista, usa o primeiro produto como padrão
  $product = isset($products[$id]) ? $products[$id] : $products[1];

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Selfit</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    /* Global Styles */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
        line-height: 1.6;
        background-color: #f8f9fa;
    }

    main {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Product Details Section */
    .product-details {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Estilo do Vídeo */
    .product-video video {
        width: 100%;
        max-height: 700px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    /* Product Info */
    .product-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .product-info h1 {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #333;
    }

    /* Estilo da Descrição */
    .description {
        font-size: 1rem;
        margin-bottom: 20px;
        color: #555;
        white-space: pre-line; /* Preserva as quebras de linha */
    }

    /* Estilo para os passos da descrição */
    .description ol {
        padding-left: 20px; /* Espaçamento para a lista numerada */
        margin-top: 10px;
    }

    .description ol li {
        margin-bottom: 10px; /* Espaçamento entre os passos */
        line-height: 1.6;
    }

    /* Button */
    .submit_button {
        padding: 15px 30px;
        border: none;
        background-color: #FF5733;
        color: #FFFFFF;
        font-size: 18px;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit_button:hover {
        background-color: #cc4628;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .product-details {
            flex-direction: column;
            text-align: center;
        }

        .product-video,
        .product-info {
            max-width: 100%;
        }
    }
</style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="product-details">
            <div class="product-video">
                <video controls>
                    <source src="<?php echo $product['video']; ?>" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
            </div>
            <div class="product-info">
                <h1><?php echo $product['title']; ?></h1>
                <p class="description"> <?php echo $product['description']; ?></p>
            </div>
        </div>
    </main>
    <br><br><br>

    <?php include 'footer.php'; ?>
</body>
</html>
