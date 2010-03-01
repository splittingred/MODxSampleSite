<?php
/**
 * Wrap the getPage/getResources call to implement tagging
 */

if (!empty($_GET['tag'])) {
    $scriptProperties['tvFilters'] = 'tags=='.$_GET['tag'];
}

$elementObj = $modx->getObject('modSnippet', array('name' => 'getPage'));
if ($elementObj) {
    $output = $elementObj->process($scriptProperties);
}
return $output;