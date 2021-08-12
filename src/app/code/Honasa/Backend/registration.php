<?php
/**
 * Honasa_Backend
 *
 * PHP version 7.x
 *
 * @category  PHP
 * @package   Honasa\Backend
 * @author    Puneet Mittal <puneet.m@mamaearth.in>
 * @copyright 2021 Copyright (c) Honasa Consumer Pvt. Ltd
 * @link      https://mamaearth.in/
 **/

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Honasa_Backend',
    __DIR__
);
