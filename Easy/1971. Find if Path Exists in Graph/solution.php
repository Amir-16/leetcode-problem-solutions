<?php
class Solution
{
    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @param Integer $source
     * @param Integer $destination
     * @return Boolean
     */
    public function validPath($n, $edges, $source, $destination)
    {
        $graph = [];

        foreach ($edges as $edge) {

            if (!isset($graph[$edge[0]])) {
                $graph[$edge[0]] = [];
            }

            if (!isset($graph[$edge[1]])) {
                $graph[$edge[1]] = [];
            }
            $graph[$edge[0]][] = $edge[1];
            $graph[$edge[1]][] = $edge[0];
        }

        $queue = new SplQueue();

        $queue->enqueue($source);

        $visited = array_fill(0, $n, false);

        $visited[$source] = true;

        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();

            if ($node == $destination) {
                return true;
            }

            if (isset($graph[$node])) {

                foreach ($graph[$node] as $neighbour) {
                    if (!$visited[$neighbour]) {
                        $visited[$neighbour] = true;
                        $queue->enqueue($neighbour);
                    }
                }

            }
        }

        return false;
    }
}

$n = 3;

$edges = [[0, 1], [0, 2], [1, 2]];

$source = 0;

$destination = 2;

$solution = new Solution();

echo $solution->validPath($n, $edges, $source, $destination); // Output: true
