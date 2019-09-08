<?php
/*
 * See https://laravel-apidoc-generator.readthedocs.io/en/latest/config.html#output
 * for a full explanation of configuration variables
 */
return [

    /*
     * The output path for the generated documentation.
     * This path should be relative to the root of your application.
     */
    'output' => 'public/docs',

    /*
     * The router to be used (Laravel or Dingo).
     */
    'router' => 'dingo',

    /*
     * The base URL to be used in examples and the Postman collection.
     * By default, this will be the value of config('app.url').
     */
    'base_url' => null,

    /*
     * Generate a Postman collection in addition to HTML docs.
     */
    'postman' => [
        /*
         * Specify whether the Postman collection should be generated.
         */
        'enabled' => true,

        /*
         * The name for the exported Postman collection. Default: config('app.name')." API"
         */
        'name' => null,

        /*
         * The description for the exported Postman collection.
         */
        'description' => null,
    ],

    /*
     * The routes for which documentation should be generated.
     * Each group contains rules defining which routes should be included ('match', 'include' and 'exclude' sections)
     * and rules which should be applied to them ('apply' section).
     */
    'routes' => [
        [
            'match' => [
                'domains' => [
                    '*',
                ],
                'prefixes' => [
                    '*',
                ],
                'versions' => [
                    'v1',
                ],
            ],
            'exclude' => [
               'auth.*'
            ],
            'apply' => [
                'headers' => [
                     'Authorization' => 'Bearer {token}',
                ],
                'response_calls' => [
                    'methods' => ['GET'],
                    'config' => [
                        'app.env' => 'documentation',
                        'app.debug' => false,
                    ],
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                    ],
                ],
            ],
        ],
        [
            'match' => [
                'domains' => [
                    '*',
                ],
                'prefixes' => [
                    '*',
                ],
                'versions' => [
                    'v1',
                ],
            ],
            'include' => ['auth.*'],
            'apply' => [
                'response_calls' => [
                    'methods' => ['GET'],
                    'config' => [
                        'app.env' => 'documentation',
                        'app.debug' => false,
                    ],
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                    ],
                ],
            ],
        ],
    ],

    'strategies' => [
        'metadata' => [
            \Mpociot\ApiDoc\Strategies\Metadata\GetFromDocBlocks::class,
        ],
        'bodyParameters' => [
            \Mpociot\ApiDoc\Strategies\BodyParameters\GetFromBodyParamTag::class,
        ],
        'queryParameters' => [
            \Mpociot\ApiDoc\Strategies\QueryParameters\GetFromQueryParamTag::class,
        ],
        'responses' => [
            \Mpociot\ApiDoc\Strategies\Responses\UseResponseTag::class,
            \Mpociot\ApiDoc\Strategies\Responses\UseResponseFileTag::class,
            \Mpociot\ApiDoc\Strategies\Responses\UseTransformerTags::class,
            \Mpociot\ApiDoc\Strategies\Responses\ResponseCalls::class,
        ],
    ],

    /*
     * Custom logo path. The logo will be copied from this location
     * during the generate process. Set this to false to use the default logo.
     *
     * Change to an absolute path to use your custom logo. For example:
     * 'logo' => resource_path('views') . '/api/logo.png'
     *
     * If you want to use this, please be aware of the following rules:
     * - the image size must be 230 x 52
     */
    'logo' => false,

    /*
     * Name for the group of routes which do not have a @group set.
     */
    'default_group' => 'general',

    /*
     * Example requests for each endpoint will be shown in each of these languages.
     * Supported options are: bash, javascript, php, python
     * You can add a language of your own, but you must publish the package's views
     * and define a corresponding view for it in the partials/example-requests directory.
     * See https://laravel-apidoc-generator.readthedocs.io/en/latest/generating-documentation.html
     *
     */
    'example_languages' => [
        'bash',
        'javascript',
    ],

    /*
     * Configure how responses are transformed using @transformer and @transformerCollection
     * Requires league/fractal package: composer require league/fractal
     *
     */
    'fractal' => [
        /* If you are using a custom serializer with league/fractal,
         * you can specify it here.
         *
         * Serializers included with league/fractal:
         * - \League\Fractal\Serializer\ArraySerializer::class
         * - \League\Fractal\Serializer\DataArraySerializer::class
         * - \League\Fractal\Serializer\JsonApiSerializer::class
         *
         * Leave as null to use no serializer or return a simple JSON.
         */
        'serializer' => null,
    ],

    /*
     * If you would like the package to generate the same example values for parameters on each run,
     * set this to any number (eg. 1234)
     *
     */
    'faker_seed' => null,
];
