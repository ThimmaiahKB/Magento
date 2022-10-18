<?php

namespace Rathan\Grid\Controller\Adminhtml\Grid;
use Magento\Framework\Controller\ResultFactory;
class AddRow extends \Magento\Backend\App\Action
{
    
   
    private $gridFactory;
    private $coreRegistry;
   
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Rathan\Grid\Model\GridFactory $gridFactory
    ) {
        $this->gridFactory = $gridFactory;
        $this->coreRegistry = $coreRegistry;
        parent::__construct($context);
    }
 
    public function execute()
    {
      
        $rowId = (int) $this->getRequest()->getParam('id');
    
        $rowData = $this->gridFactory->create();
       
        
        if ($rowId) {
           $rowData = $rowData->load($rowId);
           $rowTitle = $rowData->getgetTitle();
           if (!$rowData->getId()) {
               $this->messageManager->addError(__('row data no longer exist.'));
               $this->_redirect('grid/grid/rowdata');
               return;
           }
       }
       $this->coreRegistry->register('row_data', $rowData);
       $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
       $firstname= $rowId ? __('Edit Row Data ').$rowTitle : __('Add Row Data');
       $resultPage->getConfig()->getTitle()->prepend($firstname);
       return $resultPage;
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Rathan_Grid::add_row');
    }
}