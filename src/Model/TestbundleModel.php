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

namespace Sfachinger\TestBundle\Model;

use Contao\Model;

/**
 * Class TestbundleModel
 *
 * @package Sfachinger\TestBundle\Model
 */
class TestbundleModel extends Model
{
    protected static $strTable = 'tl_testbundle';

}

