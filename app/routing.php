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
        ['index', '/', 'GET'],
        ['paint', '/peinture', 'GET'],
        ['draw', '/dessin', 'GET'],
        ['bodypaint', '/bodypainting', 'GET'],
        ['wall', '/mural', 'GET'],
        ['contact', '/contact', 'POST'],
    ],

    'Admin' => [ // Controller
        ['login', '/login', ['POST', 'GET']],  // action, url, method
        ['admin', '/admin', ['POST', 'GET']],
        ['logout', '/admin/logout', 'GET'],
        ['benevolContentUpdated', '/admin/logged', 'POST'],
        ['adminBenevol', '/admin/benevole', ['POST', 'GET']],
        ['adminArtist', '/admin/artistes', ['POST', 'GET']],
    ]
];
