<?php
/**
 * @package modxss
 * @subpackage build
 */
$snippets = array();

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'getResourcesTag',
    'description' => 'Wraps getResources/getPage to provide tagging support.',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.getresourcestag.php'),
),'',true,true);
unset($properties);

$snippets[2]= $modx->newObject('modSnippet');
$snippets[2]->fromArray(array(
    'id' => 2,
    'name' => 'GoogleSearch',
    'description' => 'Integrates Google Site Search.',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.googlesearch.php'),
),'',true,true);
unset($properties);

$snippets[3]= $modx->newObject('modSnippet');
$snippets[3]->fromArray(array(
    'id' => 3,
    'name' => 'tolinks',
    'description' => 'Changes any delimiter-separated list into links.',
    'snippet' => getSnippetContent($sources['data'].'snippets/snippet.tolinks.php'),
),'',true,true);
unset($properties);

return $snippets;