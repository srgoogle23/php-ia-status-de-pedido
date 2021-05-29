<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . './config.php';

use Phpml\Classification\KNearestNeighbors;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

$s = [_EM_SEPARACAO_,_SAIU_PARA_ENTREGA_,_ENTREGUE_,_CANCELADO_,_FATURADO_];
$l = [
'em-separacao',
'saiu-para-entrega',
'completed',
'cancelled',
'faturado'
];
$samples = multiply10(multiply100(multiply100($s)));
$labels = multiply10(multiply100(multiply100($l)));

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

echo $classifier->predict([1, 92 ]);

echo '<hr/>';


$classifier2 = new SVC(
    Kernel::LINEAR, // $kernel
    1.0,            // $cost
    3,              // $degree
    null,           // $gamma
    0.0,            // $coef0
    0.001,          // $tolerance
    100,            // $cacheSize
    true,           // $shrinking
    true            // $probabilityEstimates, set to true
);
$classifier2->train($samples, $labels);
var_dump($classifier2->predictProbability([1, 92 ])) ;
?>