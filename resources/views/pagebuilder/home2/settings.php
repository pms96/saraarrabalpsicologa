<?php

return [
    'id' => 'home2',
    'name' => __('Presentación'),
    'icon' => '<i class="icon-book-open"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'home2_image',
            'type'          => 'file',
            'field_desc' => __('only .jpg,.png allowed and max size is 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
            ],
            'label_title'   => __('Home2 image')
        ],

        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Sara Arrabal <span> Psicóloga </span>',
            'class'         => '',
            'label_title'   => __('Heading'),
            'placeholder'   => __('Heading'),

        ],
        [
            'id'            => 'experience',
            'type'          => 'text',
            'value'         => '1 Año',
            'class'         => '',
            'label_title'   => __('experience'),
            'placeholder'   => __('experience'),

        ],
        [
            'id'            => 'clients',
            'type'          => 'text',
            'value'         => '+100',
            'class'         => '',
            'label_title'   => __('clients'),
            'placeholder'   => __('clients'),

        ],
        [
            'id'            => 'paragraph1',
            'type'          => 'editor',
            'value'         => 'Lorem Ipsum',
            'class'         => '',
            'label_title'   => __('Paragraph1'),
            'placeholder'   => __('Paragraph'),

        ],
        [
            'id'            => 'paragraph2',
            'type'          => 'editor',
            'value'         => 'Lorem Ipsum2',
            'class'         => '',
            'label_title'   => __('Paragraph1'),
            'placeholder'   => __('Paragraph'),

        ],

    ]
];
