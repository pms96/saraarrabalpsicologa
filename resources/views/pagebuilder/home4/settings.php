<?php

return [
    'id' => 'home4',
    'name' => __('Precios'),
    'icon' => '<i class="icon-book-open"></i>',
    'tab' => "Home",
    'fields' => [
        [
            'id'            => 'heading',
            'type'          => 'text',
            'value'         => 'Heading',
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
                    'id'            => 'title',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'Heading',
                    'label_title'   => __('heading'),
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
                    'id'            => 'price',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'price',
                    'label_title'   => __('price'),
                ],
                [
                    'id'            => 'list1',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'list1',
                    'label_title'   => __('list1'),
                ],
                [
                    'id'            => 'list2',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'list2',
                    'label_title'   => __('list2'),
                ],
                [
                    'id'            => 'list3',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'list3',
                    'label_title'   => __('list3'),
                ],
                [
                    'id'            => 'list4',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'list4',
                    'label_title'   => __('list4'),
                ],
                [
                    'id'            => 'list5',
                    'type'          => 'text',
                    'class'         => '',
                    'value'         => 'list5',
                    'label_title'   => __('list5'),
                ],
            ],
        ]
        

    ]
];
