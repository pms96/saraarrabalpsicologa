<?php

return [
    'id' => 'home5',
    'name' => __('areas'),
    'icon' => '<i class="icon-book-open"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'heading',
            'class'         => '',
            'label_title'   => __('heading'),
            'placeholder'   => __('heading'),

        ],
        [
            'id'            => 'description',
            'type'          => 'text',
            'value'         => 'description',
            'class'         => '',
            'label_title'   => __('description'),
            'placeholder'   => __('description'),

        ],
        [
            'id'                => 'options',
            'type'              => 'repeater',
            'label_title'       => __('options'),
            'repeater_title'    => __('options'),
            'multi'       => true,
            'fields'       =>
            [
                
                [
                    'id'            => 'heading',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'Heading',
                    'label_title'   => __('heading'),
                ],
                [
                    'id'            => 'subtitle',
                    'type'          => 'text',
                    'value'         => 'subtitle',
                    'class'         => '',
                    'label_title'   => __('subtitle'),
                    'placeholder'   => __('subtitle'),
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'editor',
                    'class'         => '',
                    'value'         => 'paragraph',
                    'label_title'   => __('paragraph'),
                ],
            ],
        ]
        

    ]
];
