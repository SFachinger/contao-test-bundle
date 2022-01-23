<?php

/*
 * This file is part of test-bundle.
 * 
 * (c) Steffen Fachinger 2022 <steffen.fachinger@online.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/sfachinger/test-bundle
 */

use Sfachinger\TestBundle\Model\TestbundleModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['testkategorie']['testbundle'] = array(
    'tables' => array('tl_testbundle')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_testbundle'] = TestbundleModel::class;
