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

return $templates;