<?php

namespace Rathan\Customerdata\Model;

use Magento\Framework\Model\AbstractModel;
use Rathan\Customerdata\Model\ResourceModel\Customer as ResourceModel;
use Rathan\Customerdata\Api\Data\CustomerInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Customer extends AbstractModel implements CustomerInterface, IdentityInterface
{
    const CACHE_TAG = 'customerinfo_table';

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function getId()
    {
        return $this->getData('id');
    }
    public function getFirstname()
    {
        return $this->getData('firstname');
    }
    public function getLastname()
    {
        return $this->getData('lastname');
    }
    public function getEmail()
    {
        return $this->getData('email');
    }
    public function getPhone()
    {
        return $this->getData('phone');
    }

    public function setFirstname($firstname)
    {
        return $this->setData('firstname', $firstname);
    }

    public function setLastname($lastname)
    {
        return $this->setData('lastname', $lastname);
    }

    public function setEmail($email)
    {
        return $this->setData('email', $email);
    }
    public function setPhone($phone)
    {
        return $this->setData('phone', $phone);
    }

}