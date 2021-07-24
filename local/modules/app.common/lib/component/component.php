<?php

declare(strict_types=1);

namespace App\Common\Component;

use App\Common\Exception\InvalidArgumentException;

use function sprintf;

class Component
{
    /** @var iterable|AbstractComponentFactory[] */
    private iterable $factories;

    /**
     * @param iterable|AbstractComponentFactory[] $factories
     */
    public function __construct(iterable $factories)
    {
        $this->factories = $factories;
    }

    public function create(string $component): ComponentInterface
    {
        foreach ($this->factories as $factory) {
            if ($factory->supports($component)) {
                return $factory->create($component);
            }
        }

        throw new InvalidArgumentException(sprintf('No component supports the given name "%s".', $component));
    }
}
