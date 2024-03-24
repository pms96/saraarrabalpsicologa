<?php

return [
    'id' => 'home1',
    'name' => __('Home1'),
    'icon' => '<i class="icon-book-open"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'home1_image',
            'type'          => 'file',
            'field_desc' => __('only .jpg,.png allowed and max size is 3MB'),
            'max_size' => 3, // size in MB
            'ext' => [
                'jpg',
                'png',
            ],
            'label_title'   => __('Home1 image')
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
            'id'            => 'paragraph',
            'type'          => 'editor',
            'value'         => 'Lorem Ipsum',
            'class'         => '',
            'label_title'   => __('Paragraph'),
            'placeholder'   => __('Paragraph'),

        ],

    ]
];
