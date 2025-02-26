<?php
session_start();

// Verifica se os parâmetros GET estão definidos e converte para inteiros
$qtd1 = isset($_GET['qtd1']) ? intval($_GET['qtd1']) : 0;
$qtd2 = isset($_GET['qtd2']) ? intval($_GET['qtd2']) : 0;
$qtd3 = isset($_GET['qtd3']) ? intval($_GET['qtd3']) : 0;
$qtd4 = isset($_GET['qtd4']) ? intval($_GET['qtd4']) : 0;
$qtd5 = isset($_GET['qtd5']) ? intval($_GET['qtd5']) : 0;
$qtd6 = isset($_GET['qtd6']) ? intval($_GET['qtd6']) : 0;

// Armazena os produtos na sessão
$_SESSION['produtos'] = array(
    array('Passadeira', $qtd1),
    array('MOTOmed', $qtd2),
    array('NORDICTRACK', $qtd3),
    array('Horizon Andes 7', $qtd4),
    array('XRS 50', $qtd5),
    array('Steelflex NOIB', $qtd6)
);

$_SESSION['vlr1'] = 140;
$_SESSION['vlr2'] = 100;
$_SESSION['vlr3'] = 110;
$_SESSION['vlr4'] = 130;
$_SESSION['vlr5'] = 150;
$_SESSION['vlr6'] = 135;

// Calcula os valores individuais dos produtos
$_SESSION['valor1'] = $qtd1 * $_SESSION['vlr1'];
$_SESSION['valor2'] = $qtd2 * $_SESSION['vlr2'];
$_SESSION['valor3'] = $qtd3 * $_SESSION['vlr3'];
$_SESSION['valor4'] = $qtd4 * $_SESSION['vlr4'];
$_SESSION['valor5'] = $qtd5 * $_SESSION['vlr5'];
$_SESSION['valor6'] = $qtd6 * $_SESSION['vlr6'];


// Calcula o valor total
$_SESSION['valor_total'] = $_SESSION['valor1'] + $_SESSION['valor2'] + $_SESSION['valor3'] + $_SESSION['valor4'] + $_SESSION['valor5']+ $_SESSION['valor6'];
$_SESSION['valor_taxas'] = $_SESSION['valor_total'] + ($_SESSION['valor_total'] * 0.23);
?>
<!DOCTYPE html>
<html>
<head>
<title>Fatura Final</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Roboto", serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", serif;
            letter-spacing: 5px;
        }
        .submit_button {
      padding: 15px 30px; 
    border: none; 
    background-color: #FF5733; 
    color: #FFFFFF; 
    font-size: 18px; 
    border-radius: 10px; 
    cursor: pointer; 
  }
    </style>

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

  <title>Fatura</title>

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
<body>
<!-- header section strats -->
<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <svg height="512" viewBox="0 0 60 42" width="512" xmlns="http://www.w3.org/2000/svg">
              <g id="Page-1" fill="none" fill-rule="evenodd">
                <g id="041---Weight-Training" fill="rgb(0,0,0)" fill-rule="nonzero">
                  <path id="Shape"
                    d="m56 6c-.7042532.00414464-1.3946535.19607591-2 .556v-2.556c0-2.209139-1.790861-4-4-4s-4 1.790861-4 4v9h-4.336l-3.664-3.694v-4.128c.000011-.93121067-.3710707-1.82403539-1.0311294-2.48090359-.6600587-.65686819-1.5546709-1.02361943-2.4858706-1.01909641-.6164983.00374687-1.2206258.17334469-1.749.491-.491757-1.19323435-1.6002708-2.01902007-2.8843351-2.14868129s-2.5352883.45784479-3.2556649 1.52868129c-.8625293-.65561163-1.9810837-.87238122-3.0260812-.58643761-1.0449975.2859436-1.8973525 1.04201494-2.3059188 2.04543761-.5391465-.31896561-1.1535724-.4884505-1.78-.491-1.92276.00165486-3.4808973 1.56023957-3.482 3.483v7h-1.96v-9c0-2.209139-1.790861-4-4-4s-4 1.790861-4 4v2.556c-.60534654-.35992409-1.29574677-.55185536-2-.556-2.209139 0-4 1.790861-4 4v15c0 2.209139 1.790861 4 4 4 .70425323-.0041446 1.39465346-.1960759 2-.556v2.556c0 2.209139 1.790861 4 4 4s4-1.790861 4-4v-9h2.96v.63c-.0652084 1.8293296.3904702 3.6395597 1.314 5.22l1.161 2.008c.3063928.448321.4876251.97027.525 1.512v9c.001102.8997673.7302327 1.628898 1.63 1.63h12.73c.9052901-.001102 1.638898-.7347099 1.64-1.64v-9.09c.0000733-.1767456.049608-.3499435.143-.5l5.139-8.77h4.718v9c0 2.209139 1.790861 4 4 4s4-1.790861 4-4v-2.556c.6053465.3599241 1.2957468.5518554 2 .556 2.209139 0 4-1.790861 4-4v-15c0-2.209139-1.790861-4-4-4zm-21.483-2.322c.8231597.00605418 1.4863282.67682476 1.483 1.5l.0000125 2.112-.4730125-.477c-.5722794-.56717384-1.3452769-.88557261-2.151-.886h-.01c-.1226635.0038672-.2449337.01589377-.366.036v-.785c-.0000257-.40078777.160341-.78491772.4453331-1.06671612.2849921-.28179839.6709049-.43782614 1.0716669-.43328388zm-6.517-.178c0-.82842712.6715729-1.5 1.5-1.5s1.5.67157288 1.5 1.5v3.7c-1.0680159 1.64157528-1.0680159 3.7584247 0 5.4v.605c-.2259891.6338058-.8271136 1.056196-1.5 1.054-.3959195.0040002-.7770426-.1502749-1.0586991-.4285515-.2816565-.2782767-.4405212-.6575095-.4413009-1.0534485zm-5 .824c0-.82842712.6715729-1.5 1.5-1.5s1.5.67157288 1.5 1.5v8.451c-.0005508.8200766-.664924 1.4848972-1.485 1.486h-.03c-.820076-.0011028-1.4844492-.6659234-1.485-1.486zm-5 1.676c0-.82842712.6715729-1.5 1.5-1.5s1.5.67157288 1.5 1.5v8.441c0 .8284271-.6715729 1.5-1.5 1.5s-1.5-.6715729-1.5-1.5zm-13.96 21c-1.1045695 0-2-.8954305-2-2v-15c0-1.1045695.8954305-2 2-2s2 .8954305 2 2v15c0 1.1045695-.8954305 2-2 2zm8 4c0 1.1045695-.8954305 2-2 2s-2-.8954305-2-2v-27c0-1.1045695.8954305-2 2-2s2 .8954305 2 2zm2-16h2.017c.2748402 1.6894875 1.7313129 2.9323329 3.443 2.938 1.4169635-.0013033 2.6933397-.8568267 3.233-2.167.5292727.3171495 1.1339909.4863739 1.751.49h.03c.93625.0000291 1.8327835-.3782748 2.486-1.049.011.012.019.026.031.038.6565015.6508777 1.5445415 1.0145101 2.469 1.011 1.308304-.0029539 2.5120182-.7154577 3.144-1.861.1.1.211.212.307.31l1.188 1.2c-1.7938366.8654751-3.3379484 2.1731695-4.487 3.8-.07.1-.125.2-.191.3h-15.421zm20.387 14.738c-.2811454.4614065-.4289464.9916899-.427 1.532v8.73h-12v-8.63c-.0277126-.901063-.3046296-1.776813-.8-2.53l-1.17-2.018c-.732998-1.2717533-1.0901589-2.7253632-1.03-4.192v-.63h9.4c-.132.31-.265.621-.377.947-.1781118.5230137.1014864 1.0913881.6245 1.2695.5230137.1781118 1.0913882-.1014864 1.2695-.6245.2472347-.7318637.5706767-1.4357271.965-2.1.1200203-.2159191.2536221-.4240039.4-.623 1.1945315-1.7018071 2.9085267-2.9705495 4.885-3.616.3481021-.0872646.6227517-.3543699.7196756-.6999071.096924-.3455371.0012588-.7165166-.2506756-.9720929 0 0-.751-.762-2.257-2.277-.423-.433-.911-.92-1.462-1.473l-.079-.08c-.0296867-.0444575-.0631434-.0862784-.1-.125-.7457473-1.037533-.7311677-2.43920372.036-3.461.153086-.16662899.3744689-.25333727.6-.235.2743168-.00048352.5377372.10732839.733.3l7.293 7.343c.5075609.5045675.5984602 1.2931916.219 1.9zm8.028-9.738.881-1.5c.64407-1.0697251.6771268-2.3995963.087-3.5h2.577v5zm9.545 11c0 1.1045695-.8954305 2-2 2s-2-.8954305-2-2v-27c0-1.1045695.8954305-2 2-2s2 .8954305 2 2zm6-6c0 1.1045695-.8954305 2-2 2s-2-.8954305-2-2v-15c0-1.1045695.8954305-2 2-2s2 .8954305 2 2z" />
                </g>
              </g>
            </svg>
            <span>
              Selfit
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="podutos.php">Produtos</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Login1.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
            <?php if (isset($_SESSION["name"])): ?>
              <?php echo "Bem-vindo/a " . $_SESSION["name"]; ?>
              &nbsp;&nbsp;&nbsp;
            <a href="logout.php">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
        <?php endif; ?>
    </div>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
<div class="w3-content w3-padding-16" style="max-width:1100px">
    <h3>Enviar para:</h3>
    <?php
        echo '<b>Nome: </b>'.$_SESSION['name'].'<br>';
        echo '<b>Morada: </b>'.$_SESSION['morada'].'<br>';
        echo '<b>Localidade: </b>'.$_SESSION['localidade'].'<br>';
        echo '<b>Código Postal: </b>'.$_SESSION['cdgpost'].'<br>';
        echo '<b>Contribuinte: </b>'.$_SESSION['contri'].'<br><br><br>';
    ?>
    <table class="w3-table">
        <tr>
            <td><b>Produtos:</b></td> <td><b>Quantidade:</b></td> <td><b>Preço unit:</b></td> <td><b>Valor:</b></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['produtos'][0][0];}?></td> 
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['produtos'][0][1];}?></td> 
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['vlr1'];}?></td>
             <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['valor1']."€";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['produtos'][1][0];}?></td> 
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['produtos'][1][1];} ?></td> 
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['vlr2'];}?></td> 
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['valor2']."€";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['produtos'][2][0];}?></td> 
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['produtos'][2][1];} ?></td> 
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['vlr3'];}?></td> 
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['valor3']."€";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['produtos'][3][0];}?></td> 
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['produtos'][3][1];} ?></td>  
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['vlr4'];} ?></td> 
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['valor4']."€";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['produtos'][4][0];}?></td> 
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['produtos'][4][1];} ?></td>  
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['vlr5'];} ?></td> 
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['valor5']."€";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['produtos'][5][0];}?></td> 
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['produtos'][5][1];} ?></td>  
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['vlr6'];} ?></td> 
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['valor6']."€";}?></td>
        </tr>
        <tr>
            <td></td> <td></td> <td><b>Subtotal:</b></td> <td><?php echo round($_SESSION['valor_total'], 2);?>€</td>
        </tr>
        <tr>
            <td></td> <td></td> <td><b>IVA 23.0%:</b></td> <td><?php echo round($_SESSION['valor_taxas'], 2);?>€<br><br></td>
        </tr>
    </table>
    <a href="Fatura_pdf.php" class="w3-button w3-border">Download Recibo</a>
</div>
    <!-- info section -->

    <br><br><br><br>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h4>
            Contate-nos
          </h4>
          <div class="contact_items">
            <a href="https://www.google.com/maps/place/Gimnica/@38.7599544,-9.307624,17z/data=!3m1!4b1!4m6!3m5!1s0xd1ece4721a9e785:0x8041c387dd9d1f65!8m2!3d38.7599544!4d-9.307624!16s%2Fg%2F11c4n6wml8?hl=pt-BR&entry=ttu">
              <div class="img-box">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <h6>
                Cacém
              </h6>
            </a>
            <a href="https://mail.google.com/mail/u/0/#inbox">
              <div class="img-box">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <h6>
                selfit123456789@gmail.com
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <h6>
                +351914483113 
              </h6>
            </a>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="info_social">
          <div>
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="https://www.instagram.com/selfit123456789/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
</body>
</html>
