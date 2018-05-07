<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'User' => [
        ['home', '/', 'GET'],
    ],

    'Admin' => [ // Controller
        ['login', '/login', ['POST', 'GET']],  // action, url, method
        ['disconnect', '/logout', ['POST', 'GET']],

    ]
];
