<?php

namespace Pyz\Yves\ProductSocialWidget\Widget;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidget;

class ProductSocialWidget extends AbstractWidget
{
 protected const PARAMETER_PRODUCT = 'product';
 protected const PARAMETER_SOCIALICONS = 'socialIcons';
    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer $product
     * @param array<string> $socialIcons
     */
    public function __construct(ProductViewTransfer $product, array $socialIcons)
     {
         $this->addProductParameter($product);
         $this->addSocialIconsParameter($socialIcons);
     }
    public static function getName(): string
    {
        return 'ProductSocialWidget';
    }

    public static function getTemplate(): string
    {
        return '@ProductSocialWidget/views/product-social-widget/product-social-widget.twig';
    }

    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer $product
     *
     * @return void
     */
    public function addProductParameter(ProductViewTransfer $product): void
    {
        $this->addParameter(static::PARAMETER_PRODUCT, $product);
    }

    /**
     * @param array $socialIcons
     *
     * @return void
     */
    public function addSocialIconsParameter(array $socialIcons): void
    {
        $this->addParameter(static::PARAMETER_SOCIALICONS, $socialIcons);
    }
}
