<?php

namespace Anarchitecture\MultiFacetScoring;

class PepeScoreStrategy implements ScoreStrategyInterface
{
    /**
     * @param FacetInterface ...$facets
     * @return int
     */
    public function getScore(FacetInterface ...$facets): int
    {
        return 420;
    }
}