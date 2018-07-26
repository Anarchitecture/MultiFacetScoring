<?php


namespace Anarchitecture\MultiFacetScoring;

class ProductScoreStrategy implements ScoreStrategyInterface
{
    /**
     * @param FacetInterface ...$facets
     * @return int
     */
    public function getScore(FacetInterface ...$facets): int
    {
        return array_product(array_map(
            function (FacetInterface $facet) {
                return $facet->getScore();
            },
            $facets
        ));
    }
}