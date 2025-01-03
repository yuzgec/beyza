<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Eskişehir Odunpazarı Psikolog Kliniği", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'Eskişehir Psyche Psikoloji Kliniği - Dashboard'
            'description'  => 'Psyche Psikoloji Eskişehir Odunpazarında uzman psikolog ve psikodiyet alanlarında hizmet vermektedir.  ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'UVSN4CJaP3f8p76cqvyvbZFATzZLJ7_ClkiOglQ0_as',
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "Eskişehir Odunpazarı Psikoloji Kliniği", // set false to total remove
            'description'  => 'Psyche Psikoloji Eskişehir Odunpazarında uzman psikolog ve psikodiyet alanlarında hizmet vermektedir.  ', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'        => "Eskişehir Odunpazarı Psikoloji Kliniği", // set false to total remove
            'description'  => 'Psyche Psikoloji Eskişehir Odunpazarında uzman psikolog ve psikodiyet alanlarında hizmet vermektedir.  ', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
