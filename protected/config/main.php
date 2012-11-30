<?php

return array(
	'basePath' => realpath(dirname(__FILE__) . '/..'),
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
	'name' => 'Crazy Radio',
    'defaultController' => 'default',
    'theme' => 'default',
	'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=crazyradio',
            'username' => 'crazyradio',
            'password' => '78',
            'emulatePrepare' => true,
            'tablePrefix' => '',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
        ),
    ),
	'modules' => array(),
	'params' => array(),
);
