<?php
/**
 * Package in subpackages
 *
 * @package modxss
 */
$subpackages = array(
    'archivist'      => 'archivist-1.0.0-pl',
    'formit'         => 'formit-1.2.1-pl',
    'getpage'        => 'getpage-1.0.0-pl',
    'getresources'   => 'getresources-1.1.0-pl',
    'login'          => 'login-1.1.0-rc2',
    'quip'           => 'quip-1.1.1-pl',
    'simplesearch'   => 'simplesearch-1.0.0-pl',
    'taglister'      => 'taglister-1.1.0-rc1',
    'ultimateparent' => 'ultimateparent-1.4-pl',
    'wayfinder'      => 'wayfinder-2.1.1-rc1',
);
$spAttr = array('vehicle_class' => 'xPDOTransportVehicle');

foreach ($subpackages as $name => $signature) {
    $vehicle = $builder->createVehicle(array(
        'source' => $sources['subpackages'] . $signature.'.transport.zip',
        'target' => "return MODX_CORE_PATH . 'packages/';",
    ),$spAttr);
    $vehicle->validate('php',array(
        'source' => $sources['validators'].'validate.'.$name.'.php'
    ));
    $builder->putVehicle($vehicle);
}

return true;