<?php

namespace Pyz\Yves\ProductSocialWidget\Widget;


use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidget;

class ProductSocialWidget extends AbstractWidget
{
    protected const PARAMETER_PRODUCT = 'product';
    protected const PARAMETER_SOCIAL_ICONS = 'socialIcons';
    /**
     * @param Generated\Shared\Transfer\ProductViewTransfer
     */
    public function __construct(ProductViewTransfer $product, array $socialIcons = [])
{
    $this->addProductParameter($product);
    $this->addWidgets($socialIcons);
    }

    /**
     * @return void
     */


    protected function addProductParameter(ProductViewTransfer $product): void

    {
        $this->addParameter(static::PARAMETER_PRODUCT, $product);
    }

    protected function addWidgets(array $socialIcons)
    {
        $this->addParameter(static::PARAMETER_SOCIAL_ICONS, $socialIcons);
    }

    public static function getName(): string
    {
        return 'ProductSocialWidget';
    }

    public static function getTemplate(): string
    {
       return '@ProductSocialWidget/views/product-social-widget/product-social-widget.twig';
    }
}
