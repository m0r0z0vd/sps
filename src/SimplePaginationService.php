<?php

namespace MDServices;

use MDServices\Structures\PaginationData;

class SimplePaginationService
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
        StaticPaginationService::$recordsPerPage = $recordsPerPage;
        StaticPaginationService::$visiblePagesRadius = $visiblePagesRadius;
    }

    /**
     * @param int $recordsPerPage
     * @return $this
     */
    public function setRecordsPerPage(int $recordsPerPage): self
    {
        $this->recordsPerPage = $recordsPerPage;
        StaticPaginationService::$recordsPerPage = $recordsPerPage;
        
        return $this;
    }

    /**
     * @param int $visiblePagesRadius
     * @return $this
     */
    public function setVisiblePagesRadius(int $visiblePagesRadius): self
    {
        $this->visiblePagesRadius = $visiblePagesRadius;
        StaticPaginationService::$visiblePagesRadius = $visiblePagesRadius;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return StaticPaginationService::getLimit();
    }

    /**
     * @param int $page
     * @return int
     */
    public function getOffset(int $page): int
    {
        return StaticPaginationService::getOffset($page);
    }

    /**
     * @param int $recordsNumber
     * @return int
     */
    public function getLastPage(int $recordsNumber): int
    {
        return StaticPaginationService::getLastPage($recordsNumber);
    }

    /**
     * @param PaginationData $paginationData
     * @return void
     */
    public function generatePaginationBlock(PaginationData $paginationData): void
    {
        StaticPaginationService::generatePaginationBlock($paginationData);
    }
}
