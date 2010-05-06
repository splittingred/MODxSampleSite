<?php
/**
 * Package in subpackages
 *
 * @package modxss
 */
$subpackages = array(
    'formit'         => 'formit-1.1-rc2',
    'getpage'        => 'getpage-1.0.0-beta2',
    'getresources'   => 'getresources-1.0.0-ga',
    'login'          => 'login-1.0.1-pl',
    'quip'           => 'quip-0.5-beta2',
    'ultimateparent' => 'ultimateparent-1.4-beta2',
    'wayfinder'       => 'wayfinder-2.1.1-beta4',
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