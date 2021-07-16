<?php
declare(strict_types = 1);

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\Twig\Plugin\Application;

use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface;
use Symfony\Bridge\Twig\Extension\DumpExtension;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Twig_Environment;

class TwigDumpApplicationPlugin implements ApplicationPluginInterface
{
    /**
     * @param \Spryker\Service\Container\ContainerInterface $container
     *
     * @return \Spryker\Service\Container\ContainerInterface
     */
    public function provide(ContainerInterface $container): ContainerInterface
    {
        $container->extend('twig', function (Twig_Environment $twig) {
            $dumper = new VarCloner();
            $twig->addExtension(new DumpExtension($dumper));

            return $twig;
        });

        return $container;
    }
}
