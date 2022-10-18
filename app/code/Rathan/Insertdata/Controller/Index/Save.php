<?php

namespace Rathan\Insertdata\Controller\Index;

 
use Magento\Framework\App\Action\Context;
use Rathan\Insertdata\Model\InsertFactory;
 
class Save extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
 
    public function __construct(Context $context, InsertFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
       
    }
 
    public function execute()
    {
        
    
		$data = $this->getRequest()->getParams();
        $resultPageFactory = $this->_resultPageFactory->create();
        $resultPageFactory->setData($data);
        if($resultPageFactory->save()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('insertdata/index/index');
        return $resultRedirect;
    }
}