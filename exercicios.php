<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
    .product_section {
      padding: 50px 0;
      text-align: center;
    }

    .product_container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .box {
      width: 300px;
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .box:hover {
      transform: translateY(-5px);
    }

    .img-box img {
      width: 100%;
      border-radius: 10px;
    }

    .detail-box {
      margin-top: 10px;
    }

    .p_name {
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      color: #333;
      display: block;
      padding: 10px 0;
    }

    .p_name:hover {
      color: #007bff;
    }

    /* Centralizando o último card */
    .last-item {
      flex-basis: 100%;
      display: flex;
      justify-content: center;
    }

    /* Botão */
    .submit_button {
      padding: 15px 30px;
      border: none;
      background-color: #FF5733;
      color: #FFFFFF;
      font-size: 18px;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .submit_button:hover {
      background-color: #e04b29;
    }
  </style>
</head>

<body class="sub_page">
  <?php include 'header.php'; ?>

  <!-- Product Section -->
  <section class="product_section">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Alongamentos</h2>
      </div>

      <div class="product_container">
        <div class="box">
          <div class="img-box">
            <img src="images/alg1.jpeg" alt="">
          </div>
          <div class="detail-box">
            <a href="exercicio_unico.php?id=1" class="p_name">Alongamento 1</a>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
            <img src="images/alg2.jpeg" alt="">
          </div>
          <div class="detail-box">
            <a href="exercicio_unico.php?id=2" class="p_name">Alongamento 2</a>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
            <img src="images/alg3.jpeg" alt="">
          </div>
          <div class="detail-box">
            <a href="exercicio_unico.php?id=3" class="p_name">Alongamento 3</a>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
            <img src="images/alg4.jpeg" alt="">
          </div>
          <div class="detail-box">
            <a href="exercicio_unico.php?id=4" class="p_name">Alongamento 4</a>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
            <img src="images/alg5.jpeg" alt="">
          </div>
          <div class="detail-box">
            <a href="exercicio_unico.php?id=5" class="p_name">Alongamento 5</a>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
            <img src="images/alg6.jpeg" alt="">
          </div>
          <div class="detail-box">
            <a href="exercicio_unico.php?id=6" class="p_name">Alongamento 6</a>
          </div>
        </div>

        <!-- Sétimo card centralizado -->
        <div class="last-item">
          <div class="box">
            <div class="img-box">
              <img src="images/alg7.jpeg" alt="">
            </div>
            <div class="detail-box">
              <a href="exercicio_unico.php?id=7" class="p_name">Alongamento 7</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <!-- Scripts -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>
