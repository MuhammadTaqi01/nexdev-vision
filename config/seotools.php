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
            'title'        => "Nexdev Vision | Custom Web Development, UI/UX Design & AI Solutions",
            'titleBefore'  => false,
            'description'  => "Nexdev Vision is a premier digital agency providing custom web development, brand identity design, SEO digital marketing, business automation, and AI solutions to scale modern brands globally.",
            'separator'    => ' | ',
            'keywords'     => ['Custom Web Development', 'UI/UX Design Agency', 'Digital Marketing Services', 'SEO Agency', 'Business Automation', 'AI Engineering', 'SaaS Development', 'Nexdev Vision'],
            'canonical'    => 'current',
            'robots'       => 'index,follow',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
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
            'title'       => 'Nexdev Vision | Digital Experiences That Drive Growth',
            'description' => 'Nexdev Vision provides custom web development, brand identity design, digital marketing, and AI engineering for modern businesses.',
            'url'         => false,
            'type'        => 'website',
            'site_name'   => 'Nexdev Vision',
            'images'      => ['/images/logo.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@nexdevvision',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Nexdev Vision | Digital Experiences That Drive Growth',
            'description' => 'Nexdev Vision provides custom web development, brand identity design, digital marketing, and AI engineering for modern businesses.',
            'url'         => false,
            'type'        => 'WebPage',
            'images'      => ['/images/logo.png'],
        ],
    ],
];
