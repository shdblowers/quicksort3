<?php

namespace Steven\Quicksort3;

class Sorter
{
    /**
     * From: https://www.hackerrank.com/challenges/quicksort3/problem
     *
     * @param int $n The length of the array
     * @param array<int|string> $arr The array
     * @return array<int|string>
     */
    public function inPlaceSort(int $n, array $arr): array
    {
        if (!empty($arr)) {
            $this->singlePass($arr, 0, $n - 1);
        }

        return $arr;
    }

    /**
     * @param array<int|string> $arr
     * @param int $start
     * @param int $stop
     * @return void
     */
    private function singlePass(array &$arr, int $start, int $stop): void
    {
        if ($start === $stop) {
            return;
        }

        $pivot = $arr[$stop];
        $swappedSmallElements = [];

        // swap elements
        for ($i = $start; $i < $stop; $i++) {
            if ($arr[$i] < $pivot) {
                for ($j = $start; $j <= $i; $j++) {
                    if (!in_array($j, $swappedSmallElements)) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$i];
                        $arr[$i] = $temp;
                        $swappedSmallElements[] = $j;

                        break;
                    }
                }
            }
        }

        $pivotInsert = $stop;

        // insert pivot
        for ($i = $start; $i < $stop; $i++) {
            if (!in_array($i, $swappedSmallElements)) {
                $arr[$stop] = $arr[$i];
                $arr[$i] = $pivot;

                $pivotInsert = $i;

                break;
            }
        }

        $this->singlePass($arr, $start, max($start, $pivotInsert - 1));
        $this->singlePass($arr, min($pivotInsert + 1, $stop), $stop);
    }
}