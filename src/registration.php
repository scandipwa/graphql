<?php
/**
 * @author    Ilja Lapkovskis <ilja@scandiweb.com | info@scandiweb.com>
 * @copyright Copyright (c) 2019 Scandiweb, Ltd (https://scandiweb.com)
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'ScandiPWA_GraphQl',
    __DIR__
);
