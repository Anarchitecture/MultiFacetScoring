<?php

namespace Anarchitecture\MultiFacetScoring;

class TwoFacet implements FacetInterface
{

    /**
     * @return int
     */
    public function getScore(): int
    {
        return 2;
    }
}