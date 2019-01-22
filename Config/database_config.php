<?php

return [

    'fetch' => \PDO::FETCH_OBJ,
    'default' => 'mysql',
    'connections' => [

        'mysql' => [
            'driver' => 'mysql',
            'host_name' => 'localhost',
            'db_name' => 'crm_boncoin',
            'db_user' => 'boncoin',
            'db_password' => 'boncoindb'
        ],
    ],

    "pagination" => [
        "no_data_found_message" => "Oops, No Data Found to show ..",
        "records_per_page"      => 10,
        "link_query_key"        => "page"
    ],

    "search" => [
        "key" => "search",
        "method" => "get"
    ]
];
