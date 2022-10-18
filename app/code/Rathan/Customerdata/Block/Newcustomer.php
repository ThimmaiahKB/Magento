<?php
namespace Rathan\Customerdata\Block;


use Magento\Framework\View\Element\Template;
use Rathan\Customerdata\Model\ResourceModel\Customer\CollectionFactory as ViewCollectionFactory;
use Rathan\Customerdata\Model\CustomerFactory  as ModelFactory;
use Magento\Framework\Api\SearchCriteriaInterface;


class Newcustomer extends Template
{
    
    private $_collection;
    private $_fetch;

    public function __construct(
        Template\Context $context,
        ViewCollectionFactory $collection,
        ModelFactory  $modelFactory,
        \Rathan\Customerdata\Model\CustomerRepository $modelRepository,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_collection = $collection;
        $this->modelFactory = $modelFactory;
        $this->_fetch = $modelRepository;
    }

    public function getCollection()
    {

        $viewCollection = $this->_collection->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }


    public function fetchData()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $searchCriteriaBuilder = $objectManager->create('Magento\Framework\Api\SearchCriteriaBuilder');
        $searchCriteria = $searchCriteriaBuilder->addFilter('id','%%','like')->create();
        $list = $this->_fetch->getList($searchCriteria);
        return $list->getItems();
    }




    public function getAddPostUrl() {
       
        return $this->getUrl('customerdata/index/savedata');
    }
    public function getDel() {
        
      
        return $this->getUrl('customerdata/index/delete');
    }
    public function getEdit() {
        
      
        return $this->getUrl('customerdata/index/edit');
    }
    public function getDataById()
    {
       
        $data = $this->getRequest()->getParams("id");
        
        return $this->modelFactory->create()->load($data); 
    }
    public function getSaveEdit() {
        
        return $this->getUrl('customerdata/index/update');
    }

}