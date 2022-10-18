<?php
namespace Rathan\Addcustomer\Block;


use Magento\Framework\View\Element\Template;
use Rathan\Addcustomer\Model\ResourceModel\Addnew\CollectionFactory as ViewCollectionFactory;

class Addnew extends Template
{
    
    private $_collection;

    public function __construct(
        Template\Context $context,
        ViewCollectionFactory $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_collection = $collection;
    }

    // public function getAllCustomer() {
    //     return $this->collection;
    // }
    public function getCollection()
    {
        /** @var ViewCollection $viewCollection */
        $viewCollection = $this->_collection->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }

    public function getAddPostUrl() {
        return $this->getUrl('addcustomer/index/add');
    }

}