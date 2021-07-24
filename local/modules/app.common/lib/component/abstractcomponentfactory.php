<?php

declare(strict_types=1);

namespace App\Common\Component;

use function in_array;

abstract class AbstractComponentFactory implements ComponentFactoryInterface
{
    public function supports(string $component): bool
    {
        return in_array($component, $this->getSupportedComponents());
    }

    /**
     * @return string[]
     */
    abstract protected function getSupportedComponents(): array;
}
