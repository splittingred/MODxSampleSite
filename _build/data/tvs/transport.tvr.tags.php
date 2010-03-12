<?php
/**
 * @package modxss
 * @subpackage build
 */
$tvrs = array();

$tvrs[1]= $modx->newObject('modTemplateVarResource');
$tvrs[1]->fromArray(array(
    'id' => 1,
    'contentid' => 6,
    'value' => 'demo blog posting',
),'',true,true);

$tvrs[2]= $modx->newObject('modTemplateVarResource');
$tvrs[2]->fromArray(array(
    'id' => 2,
    'contentid' => 7,
    'value' => 'older',
),'',true,true);

return $tvrs;