<?php

return [
    'title' => 'Historial de actividad',

    'date_format' => 'j F, Y',
    'time_format' => 'H:i l',

    'filters' => [
        'date' => 'Fecha',
        'causer' => 'Iniciador',
        'subject_type' => 'Sujeto',
        'subject_id' => 'ID del sujeto',
        'event' => 'Acción',
    ],
    'table' => [
        'field' => 'Campo',
        'old' => 'Antiguo',
        'new' => 'Nuevo',
        'value' => 'Valor',
        'no_records_yet' => 'Aún no hay entradas',
    ],
    'events' => [
        'created' => [
            'title' => 'Creado',
            'description' => 'Entrada creada',
        ],
        'updated' => [
            'title' => 'Actualizado',
            'description' => 'Entrada actualizada',
        ],
        'deleted' => [
            'title' => 'Eliminado',
            'description' => 'Entrada eliminada',
        ],
        'restored' => [
            'title' => 'Restaurado',
            'description' => 'Entrada restaurada',
        ],
        'attached' => [
            'title' => 'Adjuntado',
            'description' => 'Entrada adjuntada',
        ],
        'detached' => [
            'title' => 'Desvinculado',
            'description' => 'Entrada desvinculada',
        ],
        // Tus eventos personalizados...
    ],
    'boolean' => [
        'true' => 'True',
        'false' => 'False',
    ],
];
