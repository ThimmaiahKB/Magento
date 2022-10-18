<?php
namespace Rathan\Customerdata\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Rathan\Customerdata\Model\Customer as Model;
use Rathan\Customerdata\Model\ResourceModel\Customer as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}