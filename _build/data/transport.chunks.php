<?php
/**
 * @package modxss
 * @subpackage build
 */
$chunks = array();

$snippets[1]= $modx->newObject('modChunk');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'header',
    'description' => 'The top portion of the site.',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.header.tpl'),
),'',true,true);

$snippets[2]= $modx->newObject('modChunk');
$snippets[2]->fromArray(array(
    'id' => 2,
    'name' => 'footer',
    'description' => 'The bottom portion of the site.',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.footer.tpl'),
),'',true,true);

/* wayfinder chunks */
$snippets[3]= $modx->newObject('modChunk');
$snippets[3]->fromArray(array(
    'id' => 3,
    'name' => 'mh.inner',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.inner.tpl'),
),'',true,true);
$snippets[4]= $modx->newObject('modChunk');
$snippets[4]->fromArray(array(
    'id' => 4,
    'name' => 'mh.innerRow',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.innerrow.tpl'),
),'',true,true);
$snippets[5]= $modx->newObject('modChunk');
$snippets[5]->fromArray(array(
    'id' => 5,
    'name' => 'mh.outer',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.outer.tpl'),
),'',true,true);
$snippets[6]= $modx->newObject('modChunk');
$snippets[6]->fromArray(array(
    'id' => 6,
    'name' => 'mh.row',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.row.tpl'),
),'',true,true);


$snippets[7]= $modx->newObject('modChunk');
$snippets[7]->fromArray(array(
    'id' => 7,
    'name' => 'rssItem',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.rssitem.tpl'),
),'',true,true);
$snippets[8]= $modx->newObject('modChunk');
$snippets[8]->fromArray(array(
    'id' => 8,
    'name' => 'searchbar',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.searchbar.tpl'),
),'',true,true);

$snippets[9]= $modx->newObject('modChunk');
$snippets[9]->fromArray(array(
    'id' => 9,
    'name' => 'blogPost',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/blog/chunk.blogpost.tpl'),
),'',true,true);
$snippets[10]= $modx->newObject('modChunk');
$snippets[10]->fromArray(array(
    'id' => 10,
    'name' => 'NewsSidebar',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/blog/chunk.newssidebar.tpl'),
),'',true,true);

$snippets[11]= $modx->newObject('modChunk');
$snippets[11]->fromArray(array(
    'id' => 11,
    'name' => 'ForgotPassword',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/login/chunk.forgotpassword.tpl'),
),'',true,true);
$snippets[12]= $modx->newObject('modChunk');
$snippets[12]->fromArray(array(
    'id' => 12,
    'name' => 'FormLogin',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/login/chunk.formlogin.tpl'),
),'',true,true);
$snippets[13]= $modx->newObject('modChunk');
$snippets[13]->fromArray(array(
    'id' => 13,
    'name' => 'Logout',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/login/chunk.logout.tpl'),
),'',true,true);

return $chunks;