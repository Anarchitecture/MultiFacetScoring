<?php

namespace Anarchitecture\MultiFacetScoring;

interface FacetInterface
{

    /**
     * @return int
     */
    public function getScore() : int;

}