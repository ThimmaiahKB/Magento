<?php

namespace Rathan\Insertdata\Model;

use Magento\Framework\Model\AbstractModel;

class Insert extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Rathan\Insertdata\Model\ResourceModel\Insert');
    }
    

}