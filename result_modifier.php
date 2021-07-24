<?php

$component = new \App\Common\Component\Component(
    [
        'news' => new App\Common\Component\Bitrix\NewsList\ComponentFactory(),
    ]
);

/** @var array $arResult */
$component->create('news')->modifyResult($arResult['ITEMS']);

