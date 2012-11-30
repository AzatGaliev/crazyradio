<?php

return CMap::mergeArray(include('main.php'), array(
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=crazyradio_test',
            'username' => 'crazyradio',
            'password' => '78',
            'emulatePrepare' => true,
            'tablePrefix' => '',
        ),
        'fixture' => array(
            'class' => 'system.test.CDbFixtureManager',
        ),
    ),
));
