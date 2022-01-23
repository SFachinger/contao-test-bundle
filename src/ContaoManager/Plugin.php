<?php

declare(strict_types=1);

/*
 * This file is part of test-bundle.
 * 
 * (c) Steffen Fachinger 2022 <steffen.fachinger@online.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/sfachinger/test-bundle
 */

namespace Sfachinger\TestBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Sfachinger\TestBundle\SfachingerTestBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
