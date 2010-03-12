<?php
/**
 * Associate Template Variables to Templates
 *
 * @package modxss
 * @subpackage build
 */
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of tvs and resourceIDs/values for each */
            $tvs = array(
                'tags' => array(
                    '6' => 'demo blog posting',
                    '7' => 'older',
                ),
            );

            foreach ($tvs as $tvName => $resources) {
                if (!is_array($resources) || empty($resources)) continue;

                $tv = $modx->getObject('modTemplateVar',array('name' => $tvName));
                if (empty($tv)) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find TV: '.$tvName.' to associate to Templates.');
                    continue;
                }

                foreach ($resources as $resourceId => $value) {
                    $templateVarResource = $modx->getObject('modTemplateVarResource',array(
                        'tmplvarid' => $tv->get('id'),
                        'contentid' => $resourceId,
                    ));
                    if (!$templateVarResource) {
                        $templateVarResource = $modx->newObject('modTemplateVarResource');
                        $templateVarResource->fromArray(array(
                            'tmplvarid' => $tv->get('id'),
                            'contentid' => $resourceId,
                            'value' => $value,
                        ),'',true,true);

                        if ($templateVarResource->save() == false) {
                            $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the TV '.$tvName.' to the Resource '.$resourceId);
                        }
                    }
                }
            }
            break;
    }
}
return true;