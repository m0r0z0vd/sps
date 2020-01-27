<?php

namespace MDServices;

use MDServices\Structures\PaginationData;

class PaginationHelper
{
    public const RECORDS_PER_PAGE = 5;
    public const VISIBLE_PAGES_RADIUS = 10;
    
    /** @var int */
    private $recordsPerPage;
    
    /** @var int */
    private $visiblePagesRadius;

    /**
     * @param int $recordsPerPage
     * @param int $visiblePagesRadius
     */
    public function __construct(
        int $recordsPerPage = self::RECORDS_PER_PAGE,
        int $visiblePagesRadius = self::VISIBLE_PAGES_RADIUS
    ) {
        $this->recordsPerPage = $recordsPerPage;
        $this->visiblePagesRadius = $visiblePagesRadius;
        StaticPaginationHelper::$recordsPerPage = $recordsPerPage;
        StaticPaginationHelper::$visiblePagesRadius = $visiblePagesRadius;
    }

    /**
     * @param int $recordsPerPage
     * @return $this
     */
    public function setRecordsPerPage(int $recordsPerPage): self
    {
        $this->recordsPerPage = $recordsPerPage;
        StaticPaginationHelper::$recordsPerPage = $recordsPerPage;
        
        return $this;
    }

    /**
     * @param int $visiblePagesRadius
     * @return $this
     */
    public function setVisiblePagesRadius(int $visiblePagesRadius): self
    {
        $this->visiblePagesRadius = $visiblePagesRadius;
        StaticPaginationHelper::$visiblePagesRadius = $visiblePagesRadius;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return StaticPaginationHelper::getLimit();
    }

    /**
     * @param int $page
     * @return int
     */
    public function getOffset(int $page): int
    {
        return StaticPaginationHelper::getOffset($page);
    }

    /**
     * @param int $recordsNumber
     * @return int
     */
    public function getLastPage(int $recordsNumber): int
    {
        return StaticPaginationHelper::getLastPage($recordsNumber);
    }

    /**
     * @param PaginationData $paginationData
     * @return void
     */
    public function generatePaginationBlock(PaginationData $paginationData): void
    {
        StaticPaginationHelper::generatePaginationBlock($paginationData);
    }
}
