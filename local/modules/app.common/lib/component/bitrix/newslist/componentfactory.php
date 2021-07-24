<?php

declare(strict_types=1);

namespace App\Common\Component\Bitrix\NewsList;

use App\Common\Component\AbstractComponentFactory;
use App\Common\Component\ComponentInterface;
use App\Common\Exception\InvalidArgumentException;

use function sprintf;

final class ComponentFactory extends AbstractComponentFactory
{
    public function create(string $component): ComponentInterface
    {
        switch ($component) {
            case 'news':
                return new NewsComponent();

            default:
                throw new InvalidArgumentException(sprintf('No component supports the given name "%s".', $component));
        }
    }

    /**
     * @return string[]
     */
    protected function getSupportedComponents(): array
    {
        return ['news'];
    }
}
