<?php
/**
 * Package in subpackages
 *
 * @package modxss
 */
$subpackages = array(
    'archivist'      => 'archivist-1.0.0-pl',
    'formit'         => 'formit-1.1.6-rc1',
    'getpage'        => 'getpage-1.0.0-beta2',
    'getresources'   => 'getresources-1.0.0-ga',
    'login'          => 'login-1.0.3-pl',
    'quip'           => 'quip-1.0.0-pl',
    'simplesearch'   => 'simplesearch-1.0.0-beta3',
    'taglister'      => 'taglister-1.0.2-rc3',
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