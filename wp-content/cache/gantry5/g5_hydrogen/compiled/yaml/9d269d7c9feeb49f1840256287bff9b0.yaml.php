<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\damon2017/wp-content/themes/g5_hydrogen/blueprints/content/archive/read-more.yaml',
    'modified' => 1487119580,
    'data' => [
        'name' => 'Read More Button',
        'description' => 'Options for displaying Read More button',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'label' => [
                    'type' => 'input.text',
                    'label' => 'Button Label',
                    'description' => 'Default Read More button label.',
                    'default' => 'Read More'
                ],
                'mode' => [
                    'type' => 'select.select',
                    'label' => 'Display Mode',
                    'description' => 'When set to Auto - theme detects <!--more--> tag inside of the post content.',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        'always' => 'Always',
                        'never' => 'Never'
                    ]
                ]
            ]
        ]
    ]
];
