<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/add-page-by-form/blueprints.yaml',
    'modified' => 1625627854,
    'data' => [
        'name' => 'Add Page By Form',
        'version' => '3.0.3',
        'description' => 'Adds a page by means of a form',
        'icon' => 'plus-square-o',
        'author' => [
            'name' => 'Ron Wardenier',
            'email' => 'ron@rwgc.nl'
        ],
        'homepage' => 'https://github.com/bleutzinn/grav-plugin-add-page-by-form',
        'keywords' => 'grav, plugin, page, form, frontmatter',
        'bugs' => 'https://github.com/bleutzinn/grav-plugin-add-page-by-form/issues',
        'docs' => 'https://github.com/bleutzinn/grav-plugin-add-page-by-form/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'default_title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Default Page Title',
                    'help' => 'Will be used for the new page folder name when no other value is set'
                ],
                'default_content' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Default Page Content',
                    'help' => 'Will be used as the page content for the new page when no other value is set'
                ],
                'include_username' => [
                    'type' => 'toggle',
                    'label' => 'Include username',
                    'help' => 'Include the logged in user username in the new page frontmatter',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'overwrite_mode' => [
                    'type' => 'select',
                    'label' => 'Overwrite mode',
                    'help' => 'Overwrite existing page',
                    'highlight' => 0,
                    'default' => false,
                    'options' => [
                        0 => 'Disabled',
                        1 => 'Enabled',
                        'edit' => 'Edit'
                    ]
                ],
                'auto_taxonomy_types' => [
                    'type' => 'toggle',
                    'label' => 'Add new taxonomy types',
                    'help' => 'Automatically add new taxonomy types to site configuration. May have performance impact on large sites.',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'use_editor_class' => [
                    'type' => 'toggle',
                    'label' => 'Use the editor class',
                    'help' => 'When set, adding class=editor to a textarea provides the simpleMDE editor on that area',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'date_display_format' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Date Format',
                    'default' => 'd-m-Y H:i',
                    'options' => [
                        'F jS Y' => 'February 1st 2014',
                        'l jS of F' => 'Saturday 1st of February',
                        'D, m M Y' => 'Sat, 01 Feb 2014',
                        'd-m-y' => '01-02-14',
                        'd-m-Y' => '01-02-2014',
                        'jS M Y' => '1st Feb 2014',
                        'F Y' => 'Feb 2014',
                        'Y-m-d' => '2014-02-01',
                        'd-m-Y H:i' => '01-02-2014 09:30'
                    ]
                ],
                'physical_template_name' => [
                    'type' => 'toggle',
                    'label' => 'Physical template name',
                    'help' => 'Use the template name in the filename of the new page',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
