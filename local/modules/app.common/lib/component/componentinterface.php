<?php

declare(strict_types=1);

namespace App\Common\Component;

interface ComponentInterface
{
    public function modifyResult(array &$result): void;
}
