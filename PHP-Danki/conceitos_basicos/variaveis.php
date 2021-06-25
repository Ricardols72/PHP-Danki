<?php

    echo '############################### <br />';
    echo '#   Declaração de váriáveis   # <br />';
    echo '############################### <br />';

    $nome = 'Ricardo';
    echo 'Meu nome é <br />';
    echo $nome;
    $nome = 'Pedro';
    echo '<br />';
    echo 'Meu nome é <br />';
    echo $nome;

    echo '<br />';
?>

<?php

    echo '############################### <br />';
    echo '#      Tipos de váriáveis     # <br />';
    echo '############################### <br />';

    define('DOMINIO', 'http://ricardo.com.br'); // Constante
    echo DOMINIO;

    $bool = true;
    $int = 50;
    $float = 10.09;
    $string = 'Ricardo';
    $null = NULL;

    
    $array1 = array(
        "Ricardo" => "Luiz",
        "Luiz" => "Ricardo"
    );

    $array2 = [1,2,3,4,5,6];

    echo $array2[1];
    echo $array2[2];
    echo $array2[3];

    $array3 = ['Ricardo', 'Luiz', 'Silva'];
    echo $array3[0];

    class teste{
        function do_teste(){
            echo 'Teste';
        }
    }

    $a = new teste;
    $a -> do_teste();

    echo '<br />'
?>

<?php

    echo '############################### <br />';
    echo '#          Concatenação       # <br />';
    echo '############################### <br />';

    $frase = 'Meu nome é ';
    $nome = 'Ricardo';
    $idade = 30;
    $nomeDaClasse = 'box';

    echo $frase.$nome.$idade;
    echo "Meu nome é $nome";
    echo 'Olá meu nome é '.$nome;
    echo "<div class=\"$nomeDaClasse\">Meu conteudo da div<div/> ";

    echo '<br />'
?>


<?php

    echo '############################### <br />';
    echo '#     Operações matemáticas   # <br />';
    echo '############################### <br />';

    $soma = 4 + 4;
    $sub = 4 - 4;
    $multi = 4 * 4;
    $div = 4 / 4;
    $mod = 4 % 4;

    echo '<br />'
?>


<?php

    echo '############################### <br />';
    echo '#           Condições         # <br />';
    echo '############################### <br />';


    $var1 = 'Ricardo';
    $var2 = 'Ricardo';

    if($var1 == $var2){
        echo '<div style="width:300px;height:300px;background:red;"><div/>';
    }else if($var1 === $var2){
        echo 'A condição é explicitamente igual';
    }else{
        echo 'A condição nao bate';
    }




    $var3 = 10;

    for($i = 0; $i < $var3; $i++){
        echo $i.'<br />';
    }


    $vetor = [1,2,3,4,5];

    
    $pararLoop = 9;

    for($i = 0; ; $i++){
        if($i == $pararLoop){
            break;
        }else{
            echo $i.'<br />';
        }
    }

    for($i = 0; $i < 10; $i++){
        if($i % 2 == 0){
            continue;
        }
        echo $i.'<br />';
    }
    
    

    $colecao = [1,2,3,4,5,6];
    $soma = 0;

    for($i = 0, $j = count($colecao); $i < $j; $i++){
        $soma += $colecao[$i];
    }
    echo $soma.'<br />';


    
    
    
    foreach($vetor as $item){
        echo $item.'<br />';
    }




    while ($i <= 10){
        echo $i;
        $i++;
    }




    do{
        echo $i;
        $i++;
    }while($i < 11);

  



?>


<?php
    


?>

<?php


?>



