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
 * Associate Property Sets to Elements
 *
 * @package modxss
 * @subpackage build
 */
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of property sets, and elements associated with each */
            $sets = array(
                'BlogList' => array(
                    array('class' => 'modSnippet','name' => 'getResourcesTag'),
                ),
            );

            foreach ($sets as $setName => $elements) {
                if (!is_array($elements) || empty($elements)) continue;

                foreach ($elements as $el) {
                    if (!is_array($el) || empty($el['class']) || empty($el['name'])) continue;

                    $propertySet = $modx->getObject('modPropertySet',array('name' => $setName));
                    $element = $modx->getObject($el['class'],array('name' => $el['name']));

                    if ($propertySet && $element) {
                        $propertySetElement = $modx->getObject('modElementPropertySet',array(
                            'element' => $element->get('id'),
                            'element_class' => $el['class'],
                            'property_set' => $propertySet->get('id'),
                        ));
                        if (!$propertySetElement) {
                            $propertySetElement = $modx->newObject('modElementPropertySet');
                            $propertySetElement->fromArray(array(
                                'element' => $element->get('id'),
                                'element_class' => $el['class'],
                                'property_set' => $propertySet->get('id'),
                            ),'',true,true);
                            if ($propertySetElement->save() == false) {
                                $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the Element to the Property Set.');
                            }
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find property set and element.');
                    }
                }
            }
            break;
    }
}
return true;