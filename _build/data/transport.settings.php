<?php
/**
 * System settings
 *
 * @package modxss
 * @subpackage build
 */
$settings = array();

$settings['error_page']= $modx->newObject('modSystemSetting');
$settings['error_page']->fromArray(array(
    'key' => 'error_page',
    'value' => '4',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
),'',true,true);

$settings['unauthorized_page']= $modx->newObject('modSystemSetting');
$settings['unauthorized_page']->fromArray(array(
    'key' => 'unauthorized_page',
    'value' => '17',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
),'',true,true);

$settings['site_name']= $modx->newObject('modSystemSetting');
$settings['site_name']->fromArray(array(
    'key' => 'site_name',
    'value' => 'MODx Sample Site',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
),'',true,true);

return $settings;