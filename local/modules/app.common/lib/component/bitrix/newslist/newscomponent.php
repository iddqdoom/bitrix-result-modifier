<?php

declare(strict_types=1);

namespace App\Common\Component\Bitrix\NewsList;

use App\Common\Component\ComponentInterface;

class NewsComponent implements ComponentInterface
{
    public function modifyResult(array &$result): void
    {
        $result = [];
    }
}
