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
    'template' => 1,
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
    'template' => 1,
    'pagetitle' => 'Blog',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'blog',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'blog/index.tpl'),
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
    'template' => 1,
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
    'template' => 1,
    'pagetitle' => '404 - Resource Not Found',
    'longtitle' => 'Uh oh ... it\'s a 404! (Page Not Found)',
    'description' => '',
    'introtext' => '',
    'alias' => '404',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'404notfound.tpl'),
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

$resources[5] = $modx->newObject('modResource');
$resources[5]->fromArray(array(
    'id' => 5,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'Search Results',
    'longtitle' => 'Search Results',
    'description' => 'Your Search Results',
    'introtext' => '',
    'alias' => 'search-results',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'search-results.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 4,
    'menutitle' => 'Search Results',
),'',true,true);

$resources[6] = $modx->newObject('modResource');
$resources[6]->fromArray(array(
    'id' => 6,
    'parent' => 2,
    'template' => 2,
    'pagetitle' => 'Mini-Blog HOWTO',
    'longtitle' => 'How to Start Posting with MODx Mini-Blogs',
    'description' => '',
    'introtext' => '',
    'alias' => 'article-1126081344',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'blog/mini-howto.tpl'),
    'publishedon' => strftime('%Y-%m-%d %H:%M:%S'),
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
    'template' => 2,
    'pagetitle' => 'Just a pretend, older post',
    'longtitle' => 'This post should in fact be archived',
    'description' => '',
    'introtext' => '',
    'alias' => 'article-1128398162',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'blog/olderpost.tpl'),
    'publishedon' => strftime('%Y-%m-%d %H:%M:%S'),
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

$resources[8] = $modx->newObject('modResource');
$resources[8]->fromArray(array(
    'id' => 8,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'MODx Features',
    'longtitle' => 'Just some of the features MODx holds.',
    'description' => '',
    'introtext' => '',
    'alias' => 'features',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'features/index.tpl'),
    'isfolder' => true,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 5,
    'menutitle' => 'Features',
),'',true,true);

$resources[9] = $modx->newObject('modResource');
$resources[9]->fromArray(array(
    'id' => 9,
    'parent' => 8,
    'template' => 1,
    'pagetitle' => 'Menus and Lists',
    'longtitle' => 'Flexible Menus and Lists',
    'description' => '',
    'introtext' => '',
    'alias' => 'menus',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'features/menus-and-lists.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => 'Menus and Lists',
),'',true,true);

$resources[10] = $modx->newObject('modResource');
$resources[10]->fromArray(array(
    'id' => 10,
    'parent' => 8,
    'template' => 1,
    'pagetitle' => 'Content Management',
    'longtitle' => 'Ways to manage content',
    'description' => '',
    'introtext' => '',
    'alias' => 'cms',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'features/content-management.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => 'Manage Content',
),'',true,true);

$resources[11] = $modx->newObject('modResource');
$resources[11]->fromArray(array(
    'id' => 11,
    'parent' => 8,
    'template' => 1,
    'pagetitle' => 'Extendable By Design',
    'longtitle' => 'Extendable by design',
    'description' => '',
    'introtext' => '',
    'alias' => 'extendable',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'features/extendable.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 2,
    'menutitle' => 'Extendability',
),'',true,true);

$resources[12] = $modx->newObject('modResource');
$resources[12]->fromArray(array(
    'id' => 12,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'Getting Help with MODx',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'help',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'help.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 6,
    'menutitle' => 'Getting Help',
),'',true,true);

$resources[13] = $modx->newObject('modResource');
$resources[13]->fromArray(array(
    'id' => 13,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'Design',
    'longtitle' => 'Site Design',
    'description' => 'Why MODx is a Designer&apos;s Dream',
    'introtext' => '',
    'alias' => 'design',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'design.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 7,
    'menutitle' => 'Design',
),'',true,true);

$resources[14] = $modx->newObject('modResource');
$resources[14]->fromArray(array(
    'id' => 14,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'Contact Us',
    'longtitle' => 'Contact [[++site_name]]',
    'description' => '',
    'introtext' => '',
    'alias' => 'contact-us',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'contact/index.tpl'),
    'isfolder' => true,
    'published' => true,
    'hidemenu' => false,
    'searchable' => true,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 8,
    'menutitle' => 'Contact Us',
),'',true,true);

$resources[15] = $modx->newObject('modResource');
$resources[15]->fromArray(array(
    'id' => 15,
    'parent' => 14,
    'template' => 1,
    'pagetitle' => 'Thank You',
    'longtitle' => 'Thank You for Contacting Us',
    'description' => '',
    'introtext' => '',
    'alias' => 'thank-you',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'contact/thank-you.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 6,
    'menutitle' => 'Thank You',
),'',true,true);

$resources[16] = $modx->newObject('modResource');
$resources[16]->fromArray(array(
    'id' => 16,
    'parent' => 0,
    'template' => 0,
    'pagetitle' => 'RSS Feed',
    'longtitle' => '',
    'description' => '',
    'alias' => 'rss',
    'content' => file_get_contents($pages.'rss.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'cacheable' => true,
    'searchable' => false,
    'richtext' => false,
    'context_key' => 'web',
    'menuindex' => 9,
    'menutitle' => 'RSS Feed',
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
    $resources[16]->addOne($contentType);


$resources[17] = $modx->newObject('modResource');
$resources[17]->fromArray(array(
    'id' => 17,
    'parent' => 0,
    'template' => 1,
    'pagetitle' => 'Login',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'login',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'login/index.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 10,
    'menutitle' => 'Login',
),'',true,true);

$resources[18] = $modx->newObject('modResource');
$resources[18]->fromArray(array(
    'id' => 18,
    'parent' => 17,
    'template' => 1,
    'pagetitle' => 'Confirm Password Reset',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'confirm-password',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'login/confirm-password.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 0,
    'menutitle' => 'Confirm Password Reset',
),'',true,true);

$resources[19] = $modx->newObject('modResource');
$resources[19]->fromArray(array(
    'id' => 19,
    'parent' => 17,
    'template' => 1,
    'pagetitle' => 'Retrieve Password',
    'longtitle' => '',
    'description' => '',
    'introtext' => '',
    'alias' => 'forgot-password',
    'link_attributes' => '',
    'content' => file_get_contents($pages.'login/forgot-password.tpl'),
    'isfolder' => false,
    'published' => true,
    'hidemenu' => true,
    'searchable' => false,
    'cacheable' => true,
    'richtext' => true,
    'context_key' => 'web',
    'menuindex' => 1,
    'menutitle' => 'Retrieve Password',
),'',true,true);

return $resources;