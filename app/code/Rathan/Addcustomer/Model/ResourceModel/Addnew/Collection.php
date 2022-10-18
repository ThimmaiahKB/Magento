<?php
namespace Rathan\Addcustomer\Model\ResourceModel\Addnew;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Rathan\Addcustomer\Model\Addnew as Model;
use Rathan\Addcustomer\Model\ResourceModel\Addnew as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}