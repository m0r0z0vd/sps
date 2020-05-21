<?php

namespace MDServices\Tests;

use MDServices\SimplePaginationService;
use MDServices\Structures\PaginationData;
use PHPUnit\Framework\TestCase;

class SimplePaginationServiceTest extends TestCase
{
    /** @var SimplePaginationService */
    private $sps;

    /** @var int */
    private $lastPage = 5;

    public function setUp(): void
    {
        $this->sps = new SimplePaginationService();
    }

    public function testGenerateDefaultPaginationBlock(): void
    {
        $data = $this->getTestData();
        $this->sps->generatePaginationBlock($data);
        $this->assertEquals(count($data->paginationBlock), 7);
        // to be continued
    }

    private function getTestData(): PaginationData
    {
        $data = new PaginationData();
        $data->lastPage = $this->lastPage;
        $data->records = [
            [
                'email' => 'email@email.com'
            ],
            [
                'email' => 'some.email@email.com'
            ]
        ];

        return $data;
    }
}
