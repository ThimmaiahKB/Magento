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

    class Savedata extends Action

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
            $data = $this->getRequest()->getParams();
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];  
            $email = $data['email'];
            $phone = $data['phone'];
       
            $customerModel = $this->_customerModel;
            $customerModel->setFirstname($firstname);
            $customerModel->setLastname($lastname);
            $customerModel->setEmail($email);
            $customerModel->setPhone($phone);
        

            try {
                $this->_customerRepository->save($customerModel);
                $this->messageManager->addSuccessMessage("your saved successfully!");
            } catch (CouldNotSaveException $e) {
              
                $this->messageManager->addErrorMessage(__("Error saving data"));
            }
            
            $redirect = $this->resultRedirectFactory->create();
            $redirect->setPath('customerdata');
            return $redirect;


            // //Read a record
            // try {
            //     $car = $this->_carsRepository->getById("19");
            //     echo "Car id = " . $car->getId() . "<br>";
            //     echo "Car Title = " . $car->getTitle();
            // } catch (NoSuchEntityException $e) {
            //     echo "No such entity exception - " . $e->getMessage();
            // } catch (LocalizedException $e) {
            //     echo "Localized Exception" . $e->getMessage();
            // }
            // //Update a record
            // try {
            //     $car = $this->_carsRepository->getById("21");
            //     echo "Car id = " . $car->getId() . "<br>";
            //     echo "Car Title = " . $car->getTitle();
            //     $car->setTitle("This is the updated title");
            //     $car->setDescription("This is the updated Description");
            //     $this->_carsRepository->save($car);
            // } catch (NoSuchEntityException $e) {
            //     echo "No such entity exception - " . $e->getMessage();
            // } catch (LocalizedException $e) {
            //     echo "Localized Exception" . $e->getMessage();
            // }
          
        }
    }