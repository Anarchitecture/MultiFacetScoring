<?php

namespace Anarchitecture\MultiFacetScoring;

class CompositeFacet implements FacetInterface
{

    /**
     * @var FacetInterface[]
     */
    private $facets;

    /**
     * @var ScoreStrategyInterface
     */
    private $scoreStrategy;

    /**
     * @param ScoreStrategyInterface $scoreStrategy
     * @param FacetInterface ...$facets
     */
    public function __construct(ScoreStrategyInterface $scoreStrategy, FacetInterface ...$facets)
    {
        $this->scoreStrategy = $scoreStrategy;
        $this->facets = $facets;
    }

    /**
     * @return int
     */
    public function getScore() : int
    {
        return $this->scoreStrategy->getScore(...$this->facets);
    }
}