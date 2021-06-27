<?php

    $arr = array('Ricardo', 'Luiz', 'Pedro', 'Paulo');

   
    foreach ($arr as $key => $value){
        echo $key;
        echo ' => ';
        echo $value;
        echo '<hr>';
    }
    

    $total = count($arr);

    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo '<br/>';
    }
    echo '<br/>';

    $arr2 = array
    (
        array('Ricardo', 'Joao','Paulo'), 
        array(30,15,20),
        array('Solteiro','Casado', 'Solteiro')
    );

    

    for ($linha = 0; $linha < 3; $linha++){
        for($coluna = 0; $coluna<3;$coluna++){
            echo $arr2[$linha][$coluna]." ";
        }
        echo "<br/> \n";
    }
?>