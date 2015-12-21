<?php

namespace Application\Service;

/**
 * Class NaturalProductFactory
 *
 * PHP Version 5
 *
 * @category  PHP
 * @package   Application\Service
 * @author    Simplicity Trade GmbH <it@simplicity.ag>
 * @copyright 2014-2015 Simplicity Trade GmbH
 * @license   Proprietary http://www.simplicity.ag
 */
class NaturalProductFactory
{
    public function createService()
    {
        $bacteria = new Bacteria(new BacteriaConfig(
            array(
                ''
            )
        ));


        $metabolism = new SecondaryProductMetabolism($bacteria);

        $polymeraseChainReaction = new PolymeraseChainReaction();
        $polymeraseChainReaction->addStep(
            'denaturation',
            new Step(
                array(
                    'heat up to 95 degrees' => 'strangtrennung von doppelstrang',
                )
            )
        );
        $polymeraseChainReaction->addStep(
            'annealing',
            new Step(
                array()
            )
        );
        $polymeraseChainReaction->addStep(
            'elongation',
            new Step(
                array(
                    'tempalte' => 'matrizen-strang'
                )
            )
        );

    }
}