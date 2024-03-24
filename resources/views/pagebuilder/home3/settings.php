<?php

return [
    'id' => 'home3',
    'name' => __('Home3'),
    'icon' => '<i class="icon-book-open"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'paragraphTitle',
            'type'          => 'editor',
            'value'         => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'class'         => '',
            'label_title'   => __('ParagraphTitle'),
            'placeholder'   => __('ParagraphTitle'),

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
                    'id'            => 'titleButton',
                    'type'          => 'text',
                    'value'         => 'Consulta Niños',
                    'class'         => '',
                    'label_title'   => __('texButton'),
                    'placeholder'   => __('texButton'),
                ],
                [
                    'id'            => 'heading',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'Consulta Niños',
                    'label_title'   => __('heading'),
                ],
                [
                    'id'            => 'paragraph',
                    'type'          => 'editor',
                    'class'         => '',
                    'value'         => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries Lorem Ipsum is simply dummy.',
                    'label_title'   => __('paragraph'),
                ],
                [
                    'id'            => 'cite',
                    'type'          => 'editor',
                    'class'         => '',
                    'value'         => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                    'label_title'   => __('cite'),
                ],
                [
                    'id'            => 'home3_image',
                    'type'          => 'file',
                    'field_desc' => __('only .jpg,.png allowed and max size is 3MB'),
                    'max_size' => 3, // size in MB
                    'ext' => [
                        'jpg',
                        'png',
                    ],
                    'label_title'   => __('Home3 image')
                ],
            ],
        ]
        

    ]
];
