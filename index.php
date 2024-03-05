<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        if(isset($_GET['operacao'])){
            //verificar se a pagina é operacao        
            $x = $_GET['x'];
            $y = $_GET['y'];
            //variáveis X e Y para o calculo
            if($_GET['operacao'] == "adicao"){
                echo "Adição<br>" . "$x + $y = " . $x + $y;
            }else if($_GET['operacao'] == 'subtracao'){
                echo "Subtração<br>" . "$x - $y = " . $x - $y;
            }else if($_GET['operacao'] == 'multiplicacao'){
                echo "Multiplicação<br>" . "$x * $y = " . $x * $y;
            }else if($_GET['operacao'] == 'divisao'){
                echo "Divisão<br>" . "$x / $y = " . $x / $y;
            }else{
                echo "Insira uma Operação e o Valor das Variáveis na URL";
            }
            //condicionais para verificar a operacao inserida
        }else{
            echo "Insira uma Operação e o Valor das Variáveis na URL";
            //mensagem padrao
        }
    ?>
</body>
</html>