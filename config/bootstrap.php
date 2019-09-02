<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
//use Cake\Core\Plugin;
//use Cake\Application;

Configure::write('Theme', [
    'title' => 'Gentelella',
    'logo' => [
        'mini' => '<b>G</b>T',
        'large' => '<b>Gentelella</b>Theme'
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true,
        'show_social' => true
    ]
]);

//Plugin::load('BootstrapUI');
//Application::addPlugin('BootstrapUI');
