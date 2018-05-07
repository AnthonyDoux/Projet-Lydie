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
        ['about', '/l\'artiste', 'GET'],
        ['contact', '/contact', 'GET'],
    ],
];
