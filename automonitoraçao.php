<!DOCTYPE html>
<html lang="pt-BR">
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
    <style>
        body {
            background-color: #0a1f44;
            
        }
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            text-align: center;
        }
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }
        .escala, .video-container {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        .escala img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
        }
        .video-container video {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.video-container video::poster {
    object-fit: cover;
    width: 100%;
    height: auto;
    border-radius: 10px;
}

    </style>
</head>
<body >
<?php include 'header.php'?>

    <div class="container">
        <h1></h1>
        <div class="content-wrapper">
            <div class="escala">
                <img src="images/escala_borg.jpeg" alt="Escala de Borg">
            </div>
            <div class="video-container">
                
                <video controls poster="images/corrida.jpg">
                    <source src="videos/corrida.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
            </div>
        </div>
    </div>

    <?php include 'footer.php'?>
</body>
</html>
