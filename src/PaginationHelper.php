<?php

namespace MDServices\InjectableVersion;

use MDServices\StaticPaginationHelper as StaticHelper;
use MDServices\Structures\PaginationData;

class PaginationHelper
{
    public const RECORDS_PER_PAGE = 5;
    public const VISIBLE_PAGES_RADIUS = 10;

    /**
     * @param int $recordsPerPage
     * @param int $visiblePagesRadius
     */
    public function __construct(
        int $recordsPerPage = self::RECORDS_PER_PAGE,
        int $visiblePagesRadius = self::VISIBLE_PAGES_RADIUS
    ) {
        StaticHelper::$recordsPerPage = $recordsPerPage;
        StaticHelper::$visiblePagesRadius = $visiblePagesRadius;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return StaticHelper::getLimit();
    }

    /**
     * @param int $page
     * @return int
     */
    public function getOffset(int $page): int
    {
        return StaticHelper::getOffset($page);
    }

    /**
     * @param int $recordsNumber
     * @return int
     */
    public function getLastPage(int $recordsNumber): int
    {
        return StaticHelper::getLastPage($recordsNumber);
    }

    /**
     * @param PaginationData $paginationData
     * @return void
     */
    public function generatePaginationBlock(PaginationData $paginationData): void
    {
        StaticHelper::generatePaginationBlock($paginationData);
    }
}
