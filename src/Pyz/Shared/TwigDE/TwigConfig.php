<?php

namespace Pyz\Shared\TwigDE;
use \Spryker\Shared\Twig\TwigConfig as SprykerConfig;
class TwigConfig extends  SprykerConfig
{

    public function getYvesThemeNameDefault(): string
    {
       return 'green';
    }
}
