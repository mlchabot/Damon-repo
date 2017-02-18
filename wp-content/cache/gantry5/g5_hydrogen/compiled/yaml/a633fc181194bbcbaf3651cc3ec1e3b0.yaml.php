<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/damon2017/wp-content/themes/g5_hydrogen/custom/config/default/layout.yaml',
    'modified' => 1487119580,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/2-col-right.png',
            'name' => '2_column_-_right',
            'timestamp' => 1463772952
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-2972 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-1174'
                ]
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'main 80' => [
                            0 => [
                                0 => 'position-breadcrumbs'
                            ],
                            1 => [
                                0 => 'system-messages-9861'
                            ],
                            2 => [
                                0 => 'system-content-8229'
                            ]
                        ]
                    ],
                    1 => [
                        'sidebar 20' => [
                            0 => [
                                0 => 'logo-4333'
                            ]
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'copyright-7428 50',
                    1 => 'social-2794 50'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-6833'
                ]
            ]
        ],
        'structure' => [
            'header' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'block' => [
                    'fixed' => 1
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'logo-2972' => [
                'attributes' => [
                    'image' => 'gantry-media://damon-logo.jpg',
                    'text' => 'Damon Jespersen-Selectman',
                    'class' => ''
                ]
            ],
            'position-header' => [
                'attributes' => [
                    'key' => 'header'
                ]
            ],
            'menu-1174' => [
                'attributes' => [
                    'menu' => 'main'
                ],
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'position-breadcrumbs' => [
                'attributes' => [
                    'key' => 'breadcrumbs'
                ]
            ],
            'logo-4333' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://damon-jespersen.png',
                    'link' => '0',
                    'text' => 'Damon Jespersen, Selectman',
                    'class' => ''
                ]
            ],
            'social-2794' => [
                'block' => [
                    'variations' => 'align-right'
                ]
            ]
        ]
    ]
];
