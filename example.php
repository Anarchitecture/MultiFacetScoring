<?php

namespace {

    include 'vendor/autoload.php';

}

namespace Anarchitecture\MultiFacetScoring {

    $f1 = new TwoFacet();
    $f2 = new TwoFacet();
    $f3 = new TwoFacet();
    $f4 = new TwoFacet();
    $f5 = new TwoFacet();

    $fc = new CompositeFacet(new ProductScoreStrategy(), $f1, $f2, $f3, $f4, $f5);
    $fc2 = new CompositeFacet(new SumScoreStrategy(), $f1, $f2, $f3, $f4, $f5);
    $fc3 = new CompositeFacet(new SumScoreStrategy(), $fc, $fc2);
    $fc4 = new CompositeFacet(new ProductScoreStrategy(), $fc, $fc2, $fc3);
    $fc5 = new CompositeFacet(new PepeScoreStrategy(), $f1, $f2, $f3, $f4, $f5, $fc, $fc2);
    $fc6 = new CompositeFacet(new AverageScoreStrategy(), $fc, $fc2, $fc3, $fc4, $fc5);

    echo $f1->getScore() . PHP_EOL;
    echo $fc->getScore() . PHP_EOL;
    echo $fc2->getScore() . PHP_EOL;
    echo $fc3->getScore() . PHP_EOL;
    echo $fc4->getScore() . PHP_EOL;
    echo $fc5->getScore() . PHP_EOL;
    echo $fc6->getScore() . PHP_EOL;

}