<?php

namespace Rathan\PluginDemo\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
       
        return "Preference -- ".$this->_getData(self::NAME);
    }
}