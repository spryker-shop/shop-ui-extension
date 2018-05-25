<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ShopUiExtension\Dependency\Plugin\LanguageSwitcherWidget;

interface LanguageSwitcherWidgetPluginInterface
{
    const NAME = 'LanguageSwitcherWidgetPlugin';

    /**
     * @param string $pathInfo
     * @param string $queryString
     * @param string $requestUri
     *
     * @return void
     */
    public function initialize(string $pathInfo, $queryString, string $requestUri): void;
}
