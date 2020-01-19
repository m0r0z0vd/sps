<?php

namespace MDServices\Structures;

class PaginationData
{
    /** @var int */
    public $firstPage = 1;

    /** @var int */
    public $currentPage = 1;

    /** @var int */
    public $lastPage = 1;

    /** @var array */
    public $records = [];

    /** @var PageItem[] */
    public $paginationBlock = [];
}
