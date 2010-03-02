<?php
/**
 * Transport Resource
 * @package modxss
 * @subpackage build
 */
$resources = array();
$pages = $sources['data'].'resources/';

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => 1,
    'pagetitle' => 'RSS Feed',
    'longtitle' => '',
    'description' => '',
    'parent' => 0,
    'alias' => '',
    'content' => file_get_contents($pages.'rss.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'cacheable' => true,
    'context_key' => 'web',
),'',true,true);
    $contentType = $modx->newObject('modContentType');
    $contentType->fromArray(array(
        'id' => 1,
        'name' => 'RSS',
        'description' => 'For RSS feeds',
        'mime_type' => 'text/xml',
        'file_extensions' => '.rss',
        'headers' => null,
        'binary' => 0,
    ),'',true,true);
    $resources[1]->addOne($contentType);

return $resources;