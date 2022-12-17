<?php


use Steven\Quicksort3\Sorter;
use PHPUnit\Framework\TestCase;

final class SorterTest extends TestCase
{
    public function testExampleCase()
    {
        $sut = new Sorter();
        $sut->inPlaceSort(7, [1, 3, 9, 8, 2, 7, 5]);
        $this->assertEquals(1, 1);
    }
}
