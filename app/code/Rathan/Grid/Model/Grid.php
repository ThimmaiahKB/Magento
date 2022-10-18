<?php


namespace Rathan\Grid\Model;

use Rathan\Grid\Api\Data\GridInterface;
use Rathan\Grid\Model\ResourceModel\Grid as ResourceModel;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
  
    const CACHE_TAG = 'ra_grid_records';

  
    protected $_cacheTag = 'ra_grid_records';

   
    protected $_eventPrefix = 'ra_grid_records';


    protected function _construct()
    {
        $this->_init('Rathan\Grid\Model\ResourceModel\Grid');
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