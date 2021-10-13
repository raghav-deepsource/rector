<?php

declare (strict_types=1);
namespace RectorPrefix20211013\Symplify\Skipper\Bundle;

use RectorPrefix20211013\Symfony\Component\HttpKernel\Bundle\Bundle;
use RectorPrefix20211013\Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \RectorPrefix20211013\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\RectorPrefix20211013\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \RectorPrefix20211013\Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
