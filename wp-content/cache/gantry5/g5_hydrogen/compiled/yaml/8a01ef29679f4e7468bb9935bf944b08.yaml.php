<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\damon2017/wp-content/themes/g5_hydrogen/blueprints/content/archive/content.yaml',
    'modified' => 1487119580,
    'data' => [
        'name' => 'Content',
        'description' => 'Options for displaying Content in the view',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'type' => [
                    'type' => 'select.select',
                    'label' => 'Content Type',
                    'description' => 'What post should display by default',
                    'default' => 'content',
                    'options' => [
                        'content' => 'Content',
                        'excerpt' => 'Excerpt'
                    ]
                ]
            ]
        ]
    ]
];
