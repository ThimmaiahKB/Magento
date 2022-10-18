<?php
namespace Rathan\Insertdata\Model\ResourceModel;
class Insert extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
   
    protected function _construct()
    {
        $this->_init('customer', 'id');   
    }
}