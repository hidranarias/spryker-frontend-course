<?php

namespace Pyz\Yves\ProductSocialWidget\Widget;


use Spryker\Yves\Kernel\Widget\AbstractWidget;

class ProductSocialWidget extends AbstractWidget
{
    protected const PARAMETER_PRODUCT_URL = 'productUrl';
    protected const PARAMETER_PRODUCT_NAME = 'productName';
    protected const PARAMETER_SOCIALICONS = 'socialIcons';

    /**
     * @param string $productName
     * @param string $productUrl
     * @param array<string> $socialIcons
     */
    public function __construct(string $productName, string $productUrl, array $socialIcons)
    {
        $this->addProductName($productName);
        $this->addProductUrl($productUrl);
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
     * @param array $socialIcons
     *
     * @return void
     */
    public function addSocialIconsParameter(array $socialIcons): void
    {
        $this->addParameter(static::PARAMETER_SOCIALICONS, $socialIcons);
    }

    private function addProductName(string $productName)
    {
        $this->addParameter(static::PARAMETER_PRODUCT_NAME, $productName);
    }

    private function addProductUrl(string $productUrl)
    {
        $this->addParameter(static::PARAMETER_PRODUCT_URL, $productUrl);
    }

}
