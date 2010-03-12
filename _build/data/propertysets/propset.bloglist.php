<?php
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