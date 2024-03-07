<?php

return [
    'debuggers' => [
        'horizon',
        'telescope',
    ],

    'authorization' => false,

    'permissions' => [
        'horizon' => 'viewHorizon',
        'telescope' => 'viewTelescope',
    ],

    'group' => 'Herramientas',

    'url' => [
        'horizon' => env('HORIZON_PATH', 'horizon'),
        'telescope' => env('TELESCOPE_PATH', 'telescope'),
    ],
];
