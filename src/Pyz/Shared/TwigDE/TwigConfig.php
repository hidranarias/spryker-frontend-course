<?php

namespace Pyz\Shared\TwigDE;
use \Spryker\Shared\Twig\TwigConfig as SprykerTwigConfig;
class TwigConfig extends  SprykerTwigConfig
{

    public function getYvesThemeName(): string
    {
       return 'default';
    }
}
