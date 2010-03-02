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
    'snippet' => file_get_contents($sources['data'].'templates/template.modxhost.tpl'),
),'',true,true);

/* adding in resources for template */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in Resources for MODxHost template.'); flush();
$resources = include_once $sources['data'].'transport.resources.modxhost.php';
if (!is_array($resources)) $modx->log(modX::LOG_LEVEL_FATAL,'No Resources returned.');
$templates[1]->addMany($resources);


$templates[2]= $modx->newObject('modTemplate');
$templates[2]->fromArray(array(
    'id' => 2,
    'templatename' => 'BlogPost',
    'description' => 'The template for blog posts.',
    'snippet' => file_get_contents($sources['data'].'templates/template.blogpost.tpl'),
),'',true,true);
/* adding in resources for template */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in Resources for BlogPost template.'); flush();
$resources = include_once $sources['data'].'transport.resources.blogpost.php';
if (!is_array($resources)) $modx->log(modX::LOG_LEVEL_FATAL,'No Resources returned.');
$templates[2]->addMany($resources);

return $templates;