<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        
        // db config 
        'db' => [
            'host' => 'localhost',
            'user' => 'joanne3634',
            'pwd' => '369369',
            'dbname' => 'socialproject'
        ],
        // Renderer settings
        'view' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-test',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../../logs/app.log'        ],
    ],
];
