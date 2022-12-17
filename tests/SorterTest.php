<?php


use Steven\Quicksort3\Sorter;
use PHPUnit\Framework\TestCase;

final class SorterTest extends TestCase
{
    public function testEmptyArray()
    {
        $sut = new Sorter();
        $this->assertEquals([], $sut->inPlaceSort(0, []));
    }

    public function testSingleIntArray()
    {
        $sut = new Sorter();
        $this->assertEquals([1], $sut->inPlaceSort(1, [1]));
    }

    public function testExampleCase()
    {
        $sut = new Sorter();
        $this->assertEquals([1, 2, 3, 5, 7, 8, 9], $sut->inPlaceSort(7, [1, 3, 9, 8, 2, 7, 5]));
    }

    public function testWithChars()
    {
        $sut = new Sorter();
        $this->assertEquals(['a', 'b', 'd', 's', 't', 'z'], $sut->inPlaceSort(6, ['d', 'a', 'z', 'b', 's', 't']));
    }
}
