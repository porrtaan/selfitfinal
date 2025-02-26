<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
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
</head>

<body class="sub_page">
  <div class="hero_area">
     <?php include 'header.php'; ?>
 

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Sobre nós
              </h2>
            </div>
            <p>
            Somos estudantes do 4º ano de Fisioterapia do Instituto Politécnico de Setúbal e estamos a desenvolver o projeto Fit-2-U no âmbito da unidade curricular de Projeto Comunitário. Este projeto tem como objetivo prevenir as Condições Músculo-Esqueléticas Relacionadas com o Trabalho (CMERT), promovendo a saúde e o bem-estar dos trabalhadores através de educação e exercício.            </p>
            
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/nani.jpeg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- info section -->

 
<?php include'footer.php' ?>

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