<?php

$projectPath = realpath(__DIR__."/..");

return [
    'class' => 'yii\db\Connection',
    'dsn' => "sqlite:{$projectPath}/databases/sqlite.db",

//    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
//    'username' => 'root',
//    'password' => '',
//    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
