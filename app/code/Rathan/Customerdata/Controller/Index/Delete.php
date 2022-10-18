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

    class Delete extends Action

    {
        protected $_pageFactory;

        protected $_customerRepository;
        protected $_customerModel;


        public function __construct(
            Context $context,
            PageFactory $pageFactory,
            CustomerRepositoryInterface $customerRepository,
            CustomerInterface $customerInterface
        ) {
            $this->_pageFactory = $pageFactory;
            $this->_customerRepository=$customerRepository;
            $this->_customerModel = $customerInterface;
            return parent::__construct($context);
        }

        public function execute()
        {
          
            
            $id=$_GET['id'];
         
            try {
                $this->_customerRepository->deleteById($id);
                $this->messageManager->addSuccessMessage(__("deleted successfully!"));
            } catch (NoSuchEntityException $e) {
                $this->messageManager->addErrorMessage(__("Error deleteing record"));
            }

            $redirect = $this->resultRedirectFactory->create();
            $redirect->setPath('customerdata');
            return $redirect;
        }
    }
?>