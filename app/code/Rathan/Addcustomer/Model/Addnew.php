<?php

namespace Rathan\Addcustomer\Model;

use Magento\Framework\Model\AbstractModel;
use Rathan\Addcustomer\Model\ResourceModel\Addnew as ResourceModel;
use Rathan\Addcustomer\Api\Data\AddInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Addnew extends AbstractModel implements AddInterface, IdentityInterface
{
    const CACHE_TAG = 'rathan_customerdata_addnew';

    protected function __construct()
    {
        $this->_init(ResourceModel::class);
    }
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function getId()
    {
        return $this->getData(self::ID);
    }
    public function getFirstname()
    {
        return $this->getData(self::FIRSTNAME);
    }
    public function getLastname()
    {
        return $this->getData(self::LASTNAME);
    }
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }
    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }

    public function setFirstname($firstname)
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    public function setLastname($lastname)
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }
    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }

}