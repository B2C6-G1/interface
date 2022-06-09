<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supported Resources
    |--------------------------------------------------------------------------
    |
    | The application supports a range of different resources which need an
    | external API to be interacted with. This list contains the supported
    | resources. These would normally be models within the application.
    |
    */

    'supported_resources' => ['guilds', 'teams', 'levels'],

    /*
    |--------------------------------------------------------------------------
    | Endpoints
    |--------------------------------------------------------------------------
    |
    | The endpoints for all resources are different. To manage them in one
    | location, they are defined here. They may be changed if the URL changes.
    |
    */

    'endpoints' => [
        'guilds' => '',
        'teams' => '',
        'levels' => ''
    ]

];