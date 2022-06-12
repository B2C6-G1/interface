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
    ],

    'guilds' => [
        'base' => 'http://cl2b4-guilds.herokuapp.com',
    ],

    'users' => [
        'base' => 'http://devops-b2c6.herokuapp.com',
    ],

    'levels' => [
        'base' => 'http://devops-b2c6.herokuapp.com',
    ],

];