<?php
namespace Rathan\Restapi\Model\Data;

use Rathan\Restapi\Api\Data\ProductInterface;
use Magento\Framework\DataObject;

class Product extends DataObject implements ProductInterface
{
    /**
     * @return array|mixed|null
     */
    public function getId()
    {
        return $this->getData('id');
    }

    /**
     * @param $id
     * @return mixed|Product
     */
    public function setId($id)
    {
        return $this->setData('id',$id);
    }

    /**
     * @return array|mixed|null
     */
    public function getSku()
    {
        return $this->getData('sku');
    }

    /**
     * @param $sku
     * @return mixed|Product
     */
    public function setSku($sku)
    {
        return $this->setData('sku',$sku);
    }

    /**
     * @return array|mixed|null
     */
    public function getName()
    {
        return $this->getData('name');
    }

    /**
     * @param $name
     * @return mixed|Product
     */
    public function setName($name)
    {
        return $this->setData('name',$name);
    }
    /**
        * @return array|mixed|null
    */
    public function getDescription()
    {
        return $this->getData('description');
    }
    /**
     * @param $description
     * @return mixed|Product
     */
    public function setDescription($description)
    {
        return $this->setData('description',$description);
    }

    /**
     * @return array|mixed|null
     */
    public function getPrice()
    {
        return $this->getData('price');
    }

    /**
     * @param $price
     * @return mixed|Product
     */
    public function setPrice($price)
    {
        return $this->setData('price',$price);
    }

    /**
     * @return array|mixed|null
     */
    public function getImages()
    {
        return $this->getData('images');
    }

    /**
     * @param $productImagesArray
     * @return mixed|Product
     */
    public function setImages($productImagesArray)
    {
        return $this->setData('images',$productImagesArray);
    }


}


?>
