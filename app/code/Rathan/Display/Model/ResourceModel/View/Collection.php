<?php
namespace Rathan\Display\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Rathan\Display\Model\View::class, \Rathan\Display\Model\ResourceModel\View::class);
    }
}