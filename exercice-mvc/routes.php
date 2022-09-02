<?php

$routes = [
    // Exemple : "/users" => "UserController@displayUsers",
    '/boutique' => 'ShopController@show',
    '/categorie' => 'ShopController@showCategory',
    '/inscription' => 'UserController@signUp',
    '/inscription/post' => 'UserController@signUpPost',
    '/connexion' => 'UserController@login',
    '/connexion/post' => 'UserController@loginPost',
    '/deconnexion' => 'UserController@logout',
];