<?php

$numero= 1;

switch ($numero){
    case 1:
        $mensagem="Uma bicicleta profissional";
        echo $mensagem;
        break;
    case 2:
        $mensagem="Um Iphone 15 Pro Max";
        echo $mensagem;
        break;
    case 3:
        $mensagem="Um carro 0km";
        echo $mensagem;
        break;
    case 4:
        $mensagem="Uma moto 0km";
        echo $mensagem;
        break;
    case 5:
        $mensagem="Um computador gamer";
        echo $mensagem;
        break;
        default:
        $mensagem="Infelizmente nada";     
}
echo "<br>";
    echo "Parabens seu premio foi: $mensagem";
    ?>
