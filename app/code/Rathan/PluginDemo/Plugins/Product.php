<?php

namespace Rathan\PluginDemo\Plugins;

class Product
{
    public function beforesetName(\Magento\Catalog\Model\Product $product, $name)
    {
        
        return "Plugin -- " .$name;
    }
}

?>