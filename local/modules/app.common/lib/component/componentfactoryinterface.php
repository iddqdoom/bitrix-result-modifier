<?php

declare(strict_types=1);

namespace App\Common\Component;

interface ComponentFactoryInterface
{
    public function create(string $component): ComponentInterface;

    public function supports(string $component): bool;
}
