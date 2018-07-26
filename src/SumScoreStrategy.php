<?php

namespace Anarchitecture\MultiFacetScoring;

class SumScoreStrategy implements ScoreStrategyInterface
{

    /**
     * @param FacetInterface ...$facets
     * @return int
     */
    public function getScore(FacetInterface ...$facets): int
    {
        return array_sum(array_map(
            function (FacetInterface $facet) {
                return $facet->getScore();
            },
            $facets
        ));
    }
}