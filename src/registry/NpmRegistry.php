<?php

/*
 * asset-packagist.hiqdev.com
 *
 * @link      http://asset-packagist.hiqdev.com/
 * @package   asset-packagist.hiqdev.com
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assetpackagist\registry;

class NpmRegistry extends \Fxp\Composer\AssetPlugin\Repository\NpmRepository
{
    use RegistryTrait;
}
