<?php

namespace Rathan\PluginDemo\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Product implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $product = $observer->getProduct();
        $originalName = $product->getName('name');
        $modifiedName = $originalName . '- Observer';
        $product->setName($modifiedName);
    }
}