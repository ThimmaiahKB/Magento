<?php
namespace Rathan\Insertdata\Model\ResourceModel\Insert;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Rathan\Insertdata\Model\Insert',
            'Rathan\Insertdata\Model\ResourceModel\Insert'
        );
    }
}