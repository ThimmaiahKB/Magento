<?php

namespace Rathan\Addcustomer\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Rathan\Addcustomer\Model\Addnew;
use Rathan\Addcustomer\Model\ResourceModel\Addnew as CustomerResource;

class Add extends Action
{
   
    private $customer;

    private $customerResource;

  
    public function __construct(
        Context $context,
        Addnew $customer,
        CustomerResource $customerResource
    )
    {
        parent::__construct($context);
        $this->customer = $customer;
        $this->customerResource = $customerResource;
    }

 
    public function execute()
    {
        
        $data = $this->getRequest()->getParams();

        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $phone = $data['phone'];
       
        $customerModel = $this->customer;
        $customerModel->setFirstname($firstname);
        $customerModel->setLastname($lastname);
        $customerModel->setEmail($email);
        $customerModel->setPhone($phone);
        


        try {
           
            $this->customerResource->save($customerModel);
            $this->messageManager->addSuccessMessage("your saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }

       
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('addcustomer');
        return $redirect;
    }
}