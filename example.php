<?php

use MDServices\SimplePaginationService;
use MDServices\Structures\PaginationData;

require_once __DIR__. '/src/Structures/PageItem.php';
require_once __DIR__. '/src/Structures/PaginationData.php';
require_once __DIR__ . '/src/StaticPaginationService.php';
require_once __DIR__ . '/src/SimplePaginationService.php';

$data = new PaginationData();
$data->lastPage = 5;
$data->records = [
    [
        'email' => 'email@email.com'
    ],
    [
        'email' => 'some.email@email.com'
    ]
];

$sps = new SimplePaginationService();
$sps
    ->setRecordsPerPage(1)
    ->setVisiblePagesRadius(1)
    ->generatePaginationBlock($data)
;

var_dump($data);
