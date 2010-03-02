<?php
/**
 * Transport Resource
 * @package modxss
 * @subpackage build
 */
$resources = array();
$pages = $sources['data'].'resources/';

$resources[6] = $modx->newObject('modResource');
$resources[6]->fromArray(array(
    'id' => 6,
    'parent' => 2,
    'pagetitle' => 'Mini-Blog HOWTO',
    'longtitle' => 'How to Start Posting with MODx Mini-Blogs',
    'description' => '',
    'introtext' => '',
    'alias' => 'article-1126081344',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'blog/mini-howto.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => '',
),'',true,true);

$resources[7] = $modx->newObject('modResource');
$resources[7]->fromArray(array(
    'id' => 7,
    'parent' => 2,
    'pagetitle' => 'Just a pretend, older post',
    'longtitle' => 'This post should in fact be archived',
    'description' => '',
    'introtext' => '',
    'alias' => 'article-1128398162',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'blog/olderpost.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => true,
    'searchable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => '',
),'',true,true);

return $resources;