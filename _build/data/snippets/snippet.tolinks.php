<?php
/**
 * Creates links out of tags
 */
$inputDelim = $modx->getOption('inputDelim',$scriptProperties,' ');
$outputDelim = $modx->getOption('outputDelim',$scriptProperties,' ');
$key = $modx->getOption('key',$scriptProperties,'tag');

$items = explode(' ',$items);
$o = '';
foreach ($items as $item) {
    $url = $modx->makeUrl($modx->resource->get('id'),'','?'.$key.'='.$item);
    $o .= $outputDelim.'<a href="'.$url.'">'.$item.'</a>';
}

return $o;
