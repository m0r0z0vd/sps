<?php

namespace MDServices;

use MDServices\Structures\PaginationData;

class SimplePaginationService
{
    /**
     * @param int $recordsPerPage
     * @param int $visiblePagesRadius
     */
    public function __construct(
        int $recordsPerPage = StaticPaginationService::RECORDS_PER_PAGE,
        int $visiblePagesRadius = StaticPaginationService::VISIBLE_PAGES_RADIUS
    ) {
        $this->setRecordsPerPage($recordsPerPage);
        $this->setVisiblePagesRadius($visiblePagesRadius);
    }

    /**
     * @param int $recordsPerPage
     * @return $this
     */
    public function setRecordsPerPage(int $recordsPerPage): self
    {
        StaticPaginationService::setRecordsPerPage($recordsPerPage);
        
        return $this;
    }

    /**
     * @return int
     */
    public function getRecordsPerPage(): int
    {
        return StaticPaginationService::getRecordsPerPage();
    }

    /**
     * @param int $visiblePagesRadius
     * @return $this
     */
    public function setVisiblePagesRadius(int $visiblePagesRadius): self
    {
        StaticPaginationService::setVisiblePagesRadius($visiblePagesRadius);

        return $this;
    }

    /**
     * @return int
     */
    public function getVisiblePagesRadius(): int
    {
        return StaticPaginationService::getVisiblePagesRadius();
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
