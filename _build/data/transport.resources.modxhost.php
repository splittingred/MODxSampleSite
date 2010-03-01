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
    'parent' => 0,
    'pagetitle' => 'Home',
    'longtitle' => 'Welcome to MODx',
    'description' => 'An Introduction to MODx',
    'introtext' => '',
    'alias' => '',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'home.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => 'Home',
),'',true,true);

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array(
    'id' => 2,
    'parent' => 0,
    'pagetitle' => 'Blog',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'blog',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'blog.tpl'),
    'isfolder' => true,
    'published' => true,
    'hidemenu' => false,
    'cacheable' => true,
    'searchable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => '',
),'',true,true);

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array(
    'id' => 3,
    'parent' => 0,
    'pagetitle' => 'Request an Account',
    'longtitle' => 'Sign Up for Site Access',
    'description' => '',
    'introtext' => '',
    'alias' => 'request-an-account',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'request-an-account.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => true,
    'searchable' => false,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 2,
    'menutitle' => '',
),'',true,true);

$resources[4] = $modx->newObject('modResource');
$resources[4]->fromArray(array(
    'id' => 4,
    'parent' => 0,
    'pagetitle' => '404 - Resource Not Found',
    'longtitle' => 'Uh oh ... it\'s a 404! (Page Not Found)',
    'description' => '',
    'introtext' => '',
    'alias' => '404',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'404.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => true,
    'searchable' => false,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 3,
    'menutitle' => '',
),'',true,true);

return $resources;