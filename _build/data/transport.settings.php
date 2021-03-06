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
 * System settings
 *
 * @package modxss
 * @subpackage build
 */
$settings = array();

$settings['error_page']= $modx->newObject('modSystemSetting');
$settings['error_page']->fromArray(array(
    'key' => 'error_page',
    'value' => '4',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
),'',true,true);

$settings['unauthorized_page']= $modx->newObject('modSystemSetting');
$settings['unauthorized_page']->fromArray(array(
    'key' => 'unauthorized_page',
    'value' => '17',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
),'',true,true);

$settings['site_name']= $modx->newObject('modSystemSetting');
$settings['site_name']->fromArray(array(
    'key' => 'site_name',
    'value' => 'MODx Sample Site',
    'xtype' => 'textfield',
    'namespace' => 'core',
    'area' => 'site',
),'',true,true);

return $settings;