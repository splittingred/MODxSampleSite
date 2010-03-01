<?php
/**
 * Integrates google site search
 */
$url = $modx->getOption('url',$scriptProperties,'http://www.google.com/search');

if (!empty($_POST) && !empty($_POST['gsearch'])) {
    $r = 'site:'.$modx->getOption('site_url').'+'.$_POST['gsearch'];
    $rurl = $url.'?q='.$r;
    $modx->sendRedirect($rurl);
}

return '';