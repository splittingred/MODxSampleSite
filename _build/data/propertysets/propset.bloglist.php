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
$properties = array(
    array(
        'name' => 'elementClass',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => 'modSnippet',
    ),
    array(
        'name' => 'element',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => 'getResources',
    ),
    array(
        'name' => 'parents',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => '2',
    ),
    array(
        'name' => 'depth',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => '2',
    ),
    array(
        'name' => 'limit',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
    ),
    array(
        'name' => 'pageVarKey',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => 'page',
    ),
    array(
        'name' => 'sortby',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => 'publishedon',
    ),
    array(
        'name' => 'sortdir',
        'desc' => '',
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC','value' => 'ASC'),
            array('text' => 'DESC','value' => 'DESC'),
        ),
        'value' => 'DESC',
    ),
    array(
        'name' => 'showHidden',
        'desc' => '',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'includeTVs',
        'desc' => '',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'includeContent',
        'desc' => '',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
    ),
    array(
        'name' => 'tpl',
        'desc' => '',
        'type' => 'textfield',
        'options' => '',
        'value' => 'blogPost',
    ),
);
return $properties;