<?php

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Macopedia_CategoryImporter',
    isset($file) ? dirname($file) : __DIR__
);
