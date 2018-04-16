<?php

return [
    'propel' => [
        'database' => [
            'connections' => [
                'fst' => [
                    'adapter'    => 'mysql',
                    'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn'        => 'mysql:host=localhost;dbname=fst',
                    'user'       => 'root',
                    'password'   => 'pz2hwBmgYE',
                    'attributes' => []
                ]
            ]
        ],
        'runtime' => [
            'log' => [
                'defaultLogger' => [
                    'type' => 'stream',
                    'path' => '/var/log/propel.log',
                    'level' => 300
                ],
                'bookstore' => [
                    'type' => 'stream',
                    'path' => '/var/log/propel_fst.log',
                ]
            ]
        ],
        'generator' => [
            'defaultConnection' => 'fst',
            'connections' => ['fst']
        ]
    ]
];

