<?php
$routes = [
    'tg-admin' => 'trongate_administrators/login',
    'tg-admin/submit_login' => 'trongate_administrators/submit_login',
    //'laptops/(:num)' => 'products/browse/$1'
    'laptops/(:any)' => 'products/browse/$1'
];
define('CUSTOM_ROUTES', $routes);