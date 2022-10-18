<?php

namespace Rathan\Grid\Controller\Adminhtml\Grid;

class Savedata extends \Magento\Backend\App\Action

{
    var $gridFactory;

    protected $adapterFactory;

    protected $uploader;

    public function __construct(

    \Magento\Backend\App\Action\Context $context,

    \Rathan\Grid\Model\GridFactory $gridFactory

    ) {

        parent::__construct($context);

        $this->gridFactory = $gridFactory;

    }

    public function execute()
    {   
        $data = $this->getRequest()->getPostValue();
        if(!$data) {
        $this->_redirect('grid/grid/index');
        return;
    }
    try {
        $rowData = $this->gridFactory->create();
        $rowData->setData($data['addnew']);
        $rowData->save();
        $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
    } catch (\Exception $e) {
        $this->messageManager->addError(__($e->getMessage()));
    }
        $this->_redirect('grid/grid/addnew');
    }

    protected function _isAllowed()
    {
      return $this->_authorization->isAllowed('Rathan_Grid::savedata');
    }

}