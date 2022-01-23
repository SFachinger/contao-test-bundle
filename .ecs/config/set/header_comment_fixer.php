<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;

return static function (ContainerConfigurator $containerConfigurator): void {

    $services = $containerConfigurator->services();

    $services
        ->set(HeaderCommentFixer::class)
        ->call('configure', [[
            'header' => "This file is part of test-bundle.\n\n(c) Steffen Fachinger 2022 <steffen.fachinger@online.de>\n@license GPL-3.0-or-later\nFor the full copyright and license information,\nplease view the LICENSE file that was distributed with this source code.\n@link https://github.com/sfachinger/test-bundle",
        ]])
    ;
};