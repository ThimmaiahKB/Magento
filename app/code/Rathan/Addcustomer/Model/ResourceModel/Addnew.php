<?php

namespace Rathan\Addcustomer\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Addnew extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('customerdata', 'id');
    }
}