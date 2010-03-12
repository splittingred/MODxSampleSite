<?php
/**
 * MODx Revolution 2.0 Sample Site build script
 *
 * @package modxss
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* set package defines */
define('PKG_ABBR','modxss');
define('PKG_NAME','MODx Sample Site');
define('PKG_VERSION','1.0');
define('PKG_RELEASE','alpha1');

/* override with your own defines here (see build.config.sample.php) */
require_once dirname(__FILE__) . '/build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once dirname(__FILE__). '/includes/functions.php';

$modx= new modX();
$root = dirname(dirname(__FILE__)).'/';
$assets = MODX_ASSETS_PATH.'components/'.PKG_ABBR.'/';
$sources= array (
    'root' => $root,
    'build' => $root .'_build/',
    'resolvers' => $root . '_build/resolvers/',
    'validators' => $root . '_build/validators/',
    'subpackages' => $root . '_build/subpackages/',
    'data' => $root . '_build/data/',
    'properties' => $root . '_build/properties/',
    'source_core' => $root.'core/components/'.PKG_ABBR,
    'source_assets' => $root.'assets/components/'.PKG_ABBR,
    'lexicon' => $root.'_build/lexicon/',
    'docs' => $root.'_build/docs/',
);
unset($root);

$modx->initialize('mgr');
echo '<pre>';
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_ABBR,PKG_VERSION,PKG_RELEASE);
$builder->registerNamespace(PKG_ABBR,false,true,'{core_path}components/'.PKG_ABBR.'/');

/* load no-template resources */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in no-template Resources.'); flush();
$resources = include_once $sources['data'].'transport.resources.php';
if (!is_array($resources)) $modx->log(modX::LOG_LEVEL_FATAL,'No resources returned.');
$attributes= array(
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => array('context_key','alias'),
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'ContentType' => array(
            xPDOTransport::PRESERVE_KEYS => true,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    ),
);
foreach ($resources as $resource) {
    $vehicle = $builder->createVehicle($resource,$attributes);
    $builder->putVehicle($vehicle);
}
unset($resources,$resource,$attributes);

/* load system settings */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in system settings.'); flush();
$settings = include_once $sources['data'].'transport.settings.php';
if (!is_array($settings)) $modx->log(modX::LOG_LEVEL_FATAL,'No settings returned.');
$attributes= array(
    xPDOTransport::UNIQUE_KEY => 'key',
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => false,
);
foreach ($settings as $setting) {
    $vehicle = $builder->createVehicle($setting,$attributes);
    $builder->putVehicle($vehicle);
}
unset($settings,$setting,$attributes);

/* load property sets */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in property sets.'); flush();
$propertySets = include_once $sources['data'].'propertysets/transport.propertysets.php';
if (!is_array($propertySets)) $modx->log(modX::LOG_LEVEL_FATAL,'No property sets returned.');
$attributes= array(
    xPDOTransport::UNIQUE_KEY => 'name',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
);
foreach ($propertySets as $propertySet) {
    $vehicle = $builder->createVehicle($propertySet,$attributes);
    $builder->putVehicle($vehicle);
}
unset($propertySets,$propertySet,$attributes);

/* create category */
$category= $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category',PKG_NAME);

/* add templates */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in templates.'); flush();
$templates = include $sources['data'].'transport.templates.php';
if (is_array($templates)) {
    $category->addMany($templates,'Templates');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding templates failed.'); }

/* add chunks */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in chunks.'); flush();
$chunks = include $sources['data'].'transport.chunks.php';
if (is_array($chunks)) {
    $category->addMany($chunks,'Chunks');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding chunks failed.'); }

/* add snippets */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in snippets.'); flush();
$snippets = include $sources['data'].'transport.snippets.php';
if (is_array($snippets)) {
    $category->addMany($snippets,'Snippets');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding snippets failed.'); }

/* add tvs */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in tvs.'); flush();
$tvs = include $sources['data'].'transport.tvs.php';
if (is_array($tvs)) {
    $category->addMany($tvs,'TemplateVars');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding tvs failed.'); }

/* add subpackages */
$modx->log(modX::LOG_LEVEL_INFO,'Adding in subpackages.'); flush();
$success = include $sources['data'].'transport.subpackages.php';
if (!$success) { $modx->log(modX::LOG_LEVEL_FATAL,'Adding subpackages failed.'); }


/* create base category vehicle */
$attr = array(
    xPDOTransport::UNIQUE_KEY => 'category',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'Children' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'category',
            xPDOTransport::RELATED_OBJECTS => true,
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                'Snippets' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                ),
                'Chunks' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                ),
                'Templates' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'templatename',
                    xPDOTransport::RELATED_OBJECTS => true,
                    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                        'Resources' => array(
                            xPDOTransport::PRESERVE_KEYS => true,
                            xPDOTransport::UPDATE_OBJECT => true,
                            xPDOTransport::UNIQUE_KEY => array('context_key','alias'),
                            xPDOTransport::RELATED_OBJECTS => true,
                            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                                'ContentType' => array(
                                    xPDOTransport::PRESERVE_KEYS => true,
                                    xPDOTransport::UPDATE_OBJECT => true,
                                    xPDOTransport::UNIQUE_KEY => 'name',
                                ),
                            ),
                        ),
                    ),
                ),
                'TemplateVars' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                    xPDOTransport::RELATED_OBJECTS => true,
                    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                        'TemplateVarResources' => array(
                            xPDOTransport::PRESERVE_KEYS => false,
                            xPDOTransport::UPDATE_OBJECT => false,
                            xPDOTransport::UNIQUE_KEY => array('templvarid','contentid'),
                        ),
                    ),
                ),
            ),
        ),
        'Snippets' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
        'Chunks' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
        'Templates' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'templatename',
            xPDOTransport::RELATED_OBJECTS => true,
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                'Resources' => array(
                    xPDOTransport::PRESERVE_KEYS => true,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => array('context_key','alias'),
                    xPDOTransport::RELATED_OBJECTS => true,
                    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                        'ContentType' => array(
                            xPDOTransport::PRESERVE_KEYS => true,
                            xPDOTransport::UPDATE_OBJECT => true,
                            xPDOTransport::UNIQUE_KEY => 'name',
                        ),
                    ),
                ),
            ),
        ),
    )
);
$vehicle = $builder->createVehicle($category,$attr);
$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH . 'components/';",
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.propertysets.php',
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.tv.template.php',
));
$builder->putVehicle($vehicle);


/* now pack in the license file, readme and setup options */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
));

$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();