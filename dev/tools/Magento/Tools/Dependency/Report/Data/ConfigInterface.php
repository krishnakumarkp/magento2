<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Tools\Dependency\Report\Data;

/**
 * Config
 */
interface ConfigInterface
{
    /**
     * Get modules
     *
     * @return array
     */
    public function getModules();

    /**
     * Get total dependencies count
     *
     * @return int
     */
    public function getDependenciesCount();
}