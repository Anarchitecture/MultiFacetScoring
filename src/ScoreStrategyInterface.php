<?php

namespace Anarchitecture\MultiFacetScoring;

interface ScoreStrategyInterface
{
    /**
     * @param FacetInterface ...$facets
     * @return int
     */
    public function getScore(FacetInterface ...$facets) : int;

}