<?php

namespace MDServices;

use MDServices\Structures\PageItem;
use MDServices\Structures\PaginationData;

class StaticPaginationHelper
{
    private const DOTS = '...';
    private const PREVIOUS = '<<';
    private const NEXT = '>>';
    private const ZERO = 0;
    private const ONE = 1;

    /** @var int */
    public static $recordsPerPage = PaginationHelper::RECORDS_PER_PAGE;

    /** @var int */
    public static $visiblePagesRadius = PaginationHelper::VISIBLE_PAGES_RADIUS;

    /** @var PageItem[] */
    private static $paginationBlock = [];

    /**
     * @return int
     */
    public static function getLimit(): int
    {
        return self::$recordsPerPage;
    }

    /**
     * @param int $page
     * @return int
     */
    public static function getOffset(int $page): int
    {
        if ($page <= self::ONE) {
            return self::ZERO;
        }

        return (int)(($page - self::ONE) * self::$recordsPerPage);
    }

    /**
     * @param int $recordsNumber
     * @return int
     */
    public static function getLastPage(int $recordsNumber): int
    {
        return (int)ceil($recordsNumber / self::$recordsPerPage);
    }

    /**
     * @param PaginationData $paginationData
     * @return void
     */
    public static function generatePaginationBlock(PaginationData $paginationData): void
    {
        $first = $paginationData->firstPage;
        $last = $paginationData->lastPage;
        $current = $paginationData->currentPage;
        $hasPages = $last > $first;
        $prevPage = $current - self::ONE;
        $nextPage = $current + self::ONE;
        $isFirst = $current == $first;
        $isLast = $current == $last;
        $diapason = self::$visiblePagesRadius;
        $toPage = self::ONE;
        self::addPageItem(self::PREVIOUS, $prevPage, $isFirst, $hasPages);
        self::addPageItem((string)$first, $first, $isFirst, $hasPages && $current > $first);
        self::addPageItem(self::DOTS, $toPage, true, $hasPages && ($prevPage - $diapason) > $first);

        for ($i = (self::ZERO - self::ONE) * $diapason; $i <= $diapason; $i++) {
            $number = $current + $i;
            $display = ($i < self::ZERO) ? $number > $first : $number < $last;
            self::addPageItem((string)$number, $number, $i == self::ZERO, $hasPages && $display);
        }

        self::addPageItem(self::DOTS, $toPage, true, $hasPages && ($nextPage + $diapason) < $last);
        self::addPageItem((string)$last, $last, $isLast, $hasPages);
        self::addPageItem(self::NEXT, $nextPage, $isLast, $hasPages);
        $paginationData->paginationBlock = self::$paginationBlock;
        self::$paginationBlock = [];
    }

    /**
     * @param string $text
     * @param string $toPage
     * @param bool $disabled
     * @param bool $display
     */
    private static function addPageItem(string $text, string $toPage, bool $disabled, bool $display): void
    {
        $pageItem = new PageItem($text, $toPage, $disabled);

        if ($display) {
            self::$paginationBlock[] = $pageItem;
        }
    }
}
