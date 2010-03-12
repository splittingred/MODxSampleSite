<?php
/**
 * @package modxss
 * @subpackage build
 */
$templates = array();

$templates[1]= $modx->newObject('modTemplate');
$templates[1]->fromArray(array(
    'id' => 1,
    'templatename' => 'MODxHost',
    'description' => 'The main template for the design.',
    'content' => file_get_contents($sources['data'].'templates/template.modxhost.tpl'),
),'',true,true);

$templates[2]= $modx->newObject('modTemplate');
$templates[2]->fromArray(array(
    'id' => 2,
    'templatename' => 'BlogPost',
    'description' => 'The template for blog posts.',
    'content' => file_get_contents($sources['data'].'templates/template.blogpost.tpl'),
),'',true,true);

return $templates;