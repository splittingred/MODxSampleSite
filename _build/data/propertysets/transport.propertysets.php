<?php
/**
 * Packages all Property Sets
 *
 * @package modxss
 * @subpackage build
 */
$propertysets = array();

$propertysets[1]= $modx->newObject('modPropertySet');
$propertysets[1]->fromArray(array(
    'id' => 1,
    'name' => 'BlogList',
    'category' => 0,
    'description' => 'Lists all blog posts with pagination and tagging.',
),'',true,true);
$properties = include $sources['data'].'propertysets/propset.bloglist.php';
if (is_array($properties)) {
    $propertysets[1]->setProperties($properties);
} else { $modx->log(modX::LOG_LEVEL_ERROR,'Could not package properties for BlogList property set.'); }

return $propertysets;