<?php
namespace Rathan\Customerdata\Controller\Index;



    use Magento\Framework\App\Action\Action;
    use Magento\Framework\App\Action\Context;
    use Magento\Framework\Exception\CouldNotSaveException;
    use Magento\Framework\Exception\LocalizedException;
    use Magento\Framework\Exception\NoSuchEntityException;
    use Magento\Framework\View\Result\PageFactory;

    use Rathan\Customerdata\Api\CustomerRepositoryInterface;
    use Rathan\Customerdata\Api\Data\CustomerInterface;
    use Rathan\Customerdata\Model\CustomerFactory  as ModelFactory;
    

    class Edit extends Action

    {
        protected $_pageFactory;

        protected $_customerRepository;
        protected $_customerModel;
        protected $modelFactory;



        public function __construct(
            Context $context,
            PageFactory $pageFactory,
            CustomerRepositoryInterface $customerRepository,
            CustomerInterface $customerInterface,
            ModelFactory  $modelFactory
            
       
        ) {
            $this->_pageFactory = $pageFactory;
            $this->_customerRepository=$customerRepository;
            $this->_customerModel = $customerInterface;
            $this->modelFactory = $modelFactory;
            return parent::__construct($context);
            
        }
        public function execute()
        {
            if($this->correctId())
            {
                return $this->_pageFactory->create();
            }else{
                return $this->resultRedirectFactory->create()->setPath('customerdata');
            }
            
        }
        public function correctId()
        {
            if($id=$this->getRequest()->getParam("id")){
                $model = $this->modelFactory->create();
                $model->load($id);
                if($model->getId()){
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
                    

        }
    }

    