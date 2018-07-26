<?php

namespace Anarchitecture\MultiFacetScoring;

class AverageScoreStrategy implements ScoreStrategyInterface {

    /**
     * @param FacetInterface ...$facets
     * @return int
     */
    public function getScore(FacetInterface ...$facets): int
    {
        if (count($facets) === 0) {
            return 0;
        }

        return array_sum(array_map(
            function (FacetInterface $facet) {
                return $facet->getScore();
            },
            $facets
        )) / count($facets);
    }
}