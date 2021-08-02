<?php

require "./vendor/autoload.php";

$wsdl = "https://ws.sunat.gob.pe/ws/v2/controladuanero/ReconocimientoFisicoService.htm?wsdl";

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $wsdl,
        'outputDir' => __DIR__ . '/wb',
        'namespaceName' => 'WB',
    ))
);
