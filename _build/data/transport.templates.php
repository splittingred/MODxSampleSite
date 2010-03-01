<?php
/**
 * @package modxss
 * @subpackage build
 */
$templates = array();

$templates[1]= $modx->newObject('modTemplate');
$templates[1]->fromArray(array(
    'id' => 1,
    'templatename' => 'Minimal Template',
    'description' => 'Default minimal empty template',
    'snippet' => file_get_contents($sources['data'].'templates/template.minimal.tpl'),
),'',true,true);

/* adding in resources for template */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in Resources for MODxHost template.'); flush();
$resources = include_once $sources['data'].'transport.resources.modxhost.php';
if (!is_array($resources)) $modx->log(modX::LOG_LEVEL_FATAL,'No Resources returned.');

$templates[1]->addMany($resources);


return $templates;