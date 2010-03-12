<?php
/**
 * @package modxss
 * @subpackage build
 */
$tvs = array();

$tvs[1]= $modx->newObject('modTemplateVar');
$tvs[1]->fromArray(array(
    'id' => 1,
    'name' => 'tags',
    'caption' => 'Tags',
    'description' => 'Space delimited tags for the current Resource',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

return $tvs;