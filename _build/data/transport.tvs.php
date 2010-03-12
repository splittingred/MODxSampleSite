<?php
/**
 * @package modxss
 * @subpackage build
 */
$tvs = array();

$tvs[1]= $modx->newObject('modTemplateVar');
$tvs[1]->fromArray(array(
    'id' => 1,
    'templatename' => 'tags',
    'caption' => 'Tags',
    'description' => 'Space delimited tags for the current Resource',
    'type' => 'text',
    'display' => 'default',
    'locked' => 0,
    'rank' => 0,
    'default_text' => '',
    'display_params' => '',
),'',true,true);

/* adding tv values for resources */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in TV Values for Resources for tags tv.'); flush();
$tvrs = include_once $sources['data'].'tvs/transport.tvr.tags.php';
if (!is_array($tvrs)) $modx->log(modX::LOG_LEVEL_FATAL,'No TemplateVarResources returned.');
$tvs[1]->addMany($tvrs);

return $tvs;