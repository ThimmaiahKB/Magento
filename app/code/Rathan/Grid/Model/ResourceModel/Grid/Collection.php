<?php
namespace Rathan\Grid\Model\ResourceModel\Grid;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Rathan\Grid\Model\Grid as Model;
use Rathan\Grid\Model\ResourceModel\Grid as ResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}