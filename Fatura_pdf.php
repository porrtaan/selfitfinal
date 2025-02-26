<?php
require_once("./dompdf/autoload.inc.php");
ob_start();
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {font-family: "Playfair Display", serif;}
        h1, h2, h3, h4, h5, h6 {
            font-family: "Broadway",serif;
            letter-spacing: 5px;
        }
    </style>
</head>
<body>

<!-- Navbar (sit on top) -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <?php
    echo '<br><br><br><h1 class="w3-center">Recibo de '.$_SESSION['name'].'</h1>';
    ?>
</header>
<div class="w3-content" style="max-width:1100px">
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
            <td class="w3-center"><b>Produtos:</b></td> <td class="w3-center"><b>Quantidade:</b></td> <td class="w3-center"><b>Preço unit:</b></td> <td class="w3-center"><b>Valor:</b></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['produtos'][0][0];}?></td> 
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['produtos'][0][1];}?></td> 
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo $_SESSION['vlr1'];}?></td>
            <td><?php if($_SESSION['produtos'][0][1]!=0){echo round($_SESSION['valor1'],2)."€ ";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['produtos'][1][0];}?></td> 
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['produtos'][1][1];} ?></td> 
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo $_SESSION['vlr2'];}?></td> 
            <td><?php if($_SESSION['produtos'][1][1]!=0){echo round($_SESSION['valor2'],2)."€ ";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['produtos'][2][0];}?></td> 
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['produtos'][2][1];} ?></td> 
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo $_SESSION['vlr3'];}?></td> 
            <td><?php if($_SESSION['produtos'][2][1]!=0){echo round($_SESSION['valor3'],2)."€ ";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['produtos'][3][0];}?></td> 
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['produtos'][3][1];} ?></td>  
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo $_SESSION['vlr4'];} ?></td> 
            <td><?php if($_SESSION['produtos'][3][1]!=0){echo round($_SESSION['valor4'],2)."€ ";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['produtos'][4][0];}?></td> 
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['produtos'][4][1];} ?></td>  
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo $_SESSION['vlr5'];} ?></td> 
            <td><?php if($_SESSION['produtos'][4][1]!=0){echo round($_SESSION['valor5'],2)."€ ";}?></td>
        </tr>
        <tr>
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['produtos'][5][0];}?></td> 
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['produtos'][5][1];} ?></td>  
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo $_SESSION['vlr6'];} ?></td> 
            <td><?php if($_SESSION['produtos'][5][1]!=0){echo round($_SESSION['valor6'],2)."€ ";}?></td>
        </tr>
        <tr>
            <td></td> <td></td> <td><b><br>Subtotal:</b></td> <td><br><?php echo round($_SESSION['valor_total'], 2);?>€</td>
        </tr>
        <tr>
            <td></td> <td></td> <td><b>IVA 23.0%:</b></td> <td><br><?php echo round($_SESSION['valor_taxas'], 2);?>€<br><br></td>
        </tr>
    </table>

</div>
</body>
<?php
$html = ob_get_contents();
ob_end_clean();
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("fatura.pdf");

?>
</html>
