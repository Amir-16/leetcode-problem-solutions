<?php
class Solution
{
    public function maxPoints($grid, $queries)
    {
        $m          = count($grid);
        $n          = count($grid[0]);
        $queryCount = count($queries);

        $sortedQueries = [];
        foreach ($queries as $index => $query) {
            $sortedQueries[] = [$query, $index];
        }
        sort($sortedQueries); 


        $result = array_fill(0, $queryCount, 0);

        $pq = new SplPriorityQueue();
        $pq->setExtractFlags(SplPriorityQueue::EXTR_DATA);


        $visited = array_fill(0, $m, array_fill(0, $n, false));
        $pq->insert([0, 0, $grid[0][0]], -$grid[0][0]); // Use negative value for min-heap
        $visited[0][0] = true;

        $count      = 0;
        
        $directions = [[0, 1], [0, -1], [1, 0], [-1, 0]];

        $result = self::getSortResult($sortedQueries, $pq, $grid, $m, $n, $result, $count, $directions, $visited);

        return $result;
    }

    private static function getSortResult($sortedQueries, $pq, $grid, $m, $n, $result, $count, $directions, $visited)
    {
        foreach ($sortedQueries as [$query, $idx]) {
            while (! $pq->isEmpty() && $pq->top()[2] < $query) {
                list($r, $c, $value) = $pq->extract();
                $count++;

                foreach ($directions as [$dr, $dc]) {
                    $nr = $r + $dr;
                    $nc = $c + $dc;

                    if ($nr >= 0 && $nr < $m && $nc >= 0 && $nc < $n && ! $visited[$nr][$nc]) {
                        $pq->insert([$nr, $nc, $grid[$nr][$nc]], -$grid[$nr][$nc]);
                        $visited[$nr][$nc] = true;
                    }
                }
            }
            $result[$idx] = $count;
        }

        return $result;
    }
}

// Example usage:
$solution = new Solution();
$grid     = [[1, 2, 4], [3, 4, 3], [2, 1, 1]];
$queries  = [2, 3, 4];
print_r($solution->maxPoints($grid, $queries));
