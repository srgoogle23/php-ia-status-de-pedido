<?php
// P = 1, C = 2, F = 3
//
define('_EM_SEPARACAO_', [    1,
110]);

define('_SAIU_PARA_ENTREGA_', [1,
17]);

define('_ENTREGUE_', [    1,
92]);

define('_CANCELADO_', [    2,
5]);

define('_FATURADO_', [    3,
90]);


function multiply100($a){
    $c = 0;
    $b = array();
    while($c != 100){
        foreach($a as $row){
            $b[] = $row;
        }
        $c++;
    }
    return $b;
}
function multiply10($a){
    $c = 0;
    $b = array();
    while($c != 10){
        foreach($a as $row){
            $b[] = $row;
        }
        $c++;
    }
    return $b;
}
?>