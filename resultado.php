<?php 

$calc = 0;
$heroiName;
$heroiImg;
$heroiCuriosity;

foreach($_POST as $item){
    if($item == 'a'){
        $calc = $calc+1;
    }else if($item == 'b'){
        $calc = $calc+2;
    }else if($item == 'c'){
        $calc = $calc+3;
    }else if($item == 'd'){
        $calc = $calc+4;
    }
}


if($calc >= 8 && $calc <= 10 ){
    $heroiName = 'Homem-Aranha';
    $heroiImg = 'https://www.einerd.com.br/wp-content/uploads/2019/08/Andrew-Garfield-homem-aranha-capa.jpg';
}else if($calc >= 11 && $calc <= 13 ){
    $heroiName = 'Doutor Estranho';
    $heroiImg = 'https://img.elo7.com.br/product/zoom/2AD93B1/placa-decorativa-quadro-filme-doutor-estranho-v638-filme.jpg';
}else if($calc >= 14 && $calc <= 16 ){
    $heroiName = 'Feiticeira Escarlate';
    $heroiImg = 'https://disneyplusbrasil.com.br/wp-content/uploads/2021/04/Feiticeira-Escarlate-Serie-DisneyPlus.jpg';
}else if($calc >= 17 && $calc <= 19 ){
    $heroiName = 'Thor';
    $heroiImg = 'https://pipocamoderna.com.br/wp-content/uploads/2017/03/thor-ragnarok.jpg';
}else if($calc >= 20 && $calc <= 22 ){
    $heroiName = 'Hulk';
    $heroiImg = 'https://epipoca.com.br/wp-content/uploads/2020/12/hulk-vingadores-2-1200x900.jpeg';
}else if($calc >= 23 && $calc <= 25 ){
    $heroiName = 'Viúva Negra';
    $heroiImg = 'https://i2.wp.com/cloud.estacaonerd.com/wp-content/uploads/2021/06/30215531/viuvanegra_23.jpg?fit=1200%2C800&ssl=1';
}else if($calc >= 26 && $calc <= 28 ){
    $heroiName = 'Homem de Ferro';
    $heroiImg = 'https://i.pinimg.com/736x/3c/95/d3/3c95d33e45f652002304447c02be365d.jpg';
}else if($calc >= 29 && $calc <= 32 ){
    $heroiName = 'Capitão América';
    $heroiImg = 'https://i.pinimg.com/564x/13/47/33/13473310475ad2b7f6b868ce44c7e408.jpg';
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="img/avengers-icon2.png">
    <link rel="stylesheet" href="css/resultado.min.css">
    <title>Resultado - Quiz</title>
</head>
<body>
    <div class="result">
        <img class="result_img" src="<?=$heroiImg?>" alt="">
        <h1 class="result_name">Você é <?=$heroiName?></h1>
        <button class="result_btn">Refazer o teste</button>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>
</html>