<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supported Resources
    |--------------------------------------------------------------------------
    |
    | The external API's support a range of different resources. The supported
    | resources are defined here.
    |
    */

    'supported' => ['teams', 'guilds', 'users', 'levels'],

    /*
    |--------------------------------------------------------------------------
    | Endpoints
    |--------------------------------------------------------------------------
    |
    | The endpoints differ per resource, they are defined here per resource.
    | If they change, they should only be changed here. The changes will
    | automatically be reflected in the repository that interacts with the api.
    |
    */

    'teams' => [
        'base' => 'http://cl2b4-guilds.herokuapp.com',
        'all' => '/teams/get',
        'save' => '/teams/create',
        'update' => '/teams/update',
        'delete' => '/teams/delete'
    ],

    'guilds' => [
        'base' => 'http://cl2b4-guilds.herokuapp.com',
        'all' => '/guilds/get',
        'save' => '/guilds/create',
        'update' => '/guilds/update',
        'delete' => '/guilds/delete'
    ],

    'users' => [
        'base' => 'http://cl2b4-guilds.herokuapp.com',
        'all' => '/users/get',
        'save' => '/users/create',
        'update' => '/users/update',
        'delete' => '/users/delete'
    ],

    'levels' => [
        'base' => 'http://devops-b2c6.herokuapp.com',
    ],

];