<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database connection settings
        "db" => [
            // "host" => "romualdocosta.eu",
            // "dbname" => "romualdo_projeto",
            // "user" => "romualdocost",
            // "pass" => "EpnSvE4J"
             "host" => "localhost",
             "dbname" => "bd_digiboard",
             "user" => "root",
             "pass" => ""
        ],
        // Database connection settings
        "dbERP" => [
            "host" => "SERVER",
            "dbname" => "DADOSP11",
            "user" => "SIGA",
            "pass" => "FVADHW"
        ],
       
    ],
];
