<?php
/**
 * MODx Sample Site
 *
 * Copyright 2010 by Shaun McCormick <shaun@collabpad.com>, excepting
 * subpackages installed by the component.
 *
 * This file is part of MODx Sample Site, a packaged sample site for MODx
 * Revolution.
 *
 * MODx Sample Site is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * MODx Sample Site is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MODx Sample Site; if not, write to the Free Software Foundation, Inc., 59
 * Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxss
 */
/**
 * @package modxss
 * @subpackage build
 */
$chunks = array();

$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'header',
    'description' => 'The top portion of the site.',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.header.tpl'),
),'',true,true);

$chunks[2]= $modx->newObject('modChunk');
$chunks[2]->fromArray(array(
    'id' => 2,
    'name' => 'footer',
    'description' => 'The bottom portion of the site.',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.footer.tpl'),
),'',true,true);

/* wayfinder chunks */
$chunks[3]= $modx->newObject('modChunk');
$chunks[3]->fromArray(array(
    'id' => 3,
    'name' => 'mh.inner',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.inner.tpl'),
),'',true,true);
$chunks[4]= $modx->newObject('modChunk');
$chunks[4]->fromArray(array(
    'id' => 4,
    'name' => 'mh.innerRow',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.innerrow.tpl'),
),'',true,true);
$chunks[5]= $modx->newObject('modChunk');
$chunks[5]->fromArray(array(
    'id' => 5,
    'name' => 'mh.outer',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.outer.tpl'),
),'',true,true);
$chunks[6]= $modx->newObject('modChunk');
$chunks[6]->fromArray(array(
    'id' => 6,
    'name' => 'mh.row',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mh.row.tpl'),
),'',true,true);


$chunks[7]= $modx->newObject('modChunk');
$chunks[7]->fromArray(array(
    'id' => 7,
    'name' => 'rssItem',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.rssitem.tpl'),
),'',true,true);
$chunks[8]= $modx->newObject('modChunk');
$chunks[8]->fromArray(array(
    'id' => 8,
    'name' => 'searchbar',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.searchbar.tpl'),
),'',true,true);

$chunks[9]= $modx->newObject('modChunk');
$chunks[9]->fromArray(array(
    'id' => 9,
    'name' => 'blogPost',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/blog/chunk.blogpost.tpl'),
),'',true,true);
$chunks[10]= $modx->newObject('modChunk');
$chunks[10]->fromArray(array(
    'id' => 10,
    'name' => 'NewsSidebar',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/blog/chunk.newssidebar.tpl'),
),'',true,true);

$chunks[11]= $modx->newObject('modChunk');
$chunks[11]->fromArray(array(
    'id' => 11,
    'name' => 'ForgotPassword',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/login/chunk.forgotpassword.tpl'),
),'',true,true);
$chunks[12]= $modx->newObject('modChunk');
$chunks[12]->fromArray(array(
    'id' => 12,
    'name' => 'FormLogin',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/login/chunk.formlogin.tpl'),
),'',true,true);
$chunks[13]= $modx->newObject('modChunk');
$chunks[13]->fromArray(array(
    'id' => 13,
    'name' => 'Logout',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/login/chunk.logout.tpl'),
),'',true,true);
$chunks[14]= $modx->newObject('modChunk');
$chunks[14]->fromArray(array(
    'id' => 14,
    'name' => 'MostRecent',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.mostrecent.tpl'),
),'',true,true);
$chunks[15]= $modx->newObject('modChunk');
$chunks[15]->fromArray(array(
    'id' => 15,
    'name' => 'SearchFormTpl',
    'description' => '',
    'snippet' => file_get_contents($sources['data'].'chunks/chunk.searchformtpl.tpl'),
),'',true,true);

return $chunks;