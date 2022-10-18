<?php

namespace Rathan\Display\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Rathan\Display\Api\Data\ViewInterface;


class View extends AbstractModel implements ViewInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'rathan_display_view';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Rathan\Display\Model\ResourceModel\View');
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

  
 
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

   
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
}