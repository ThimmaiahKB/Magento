<?php
namespace Rathan\Customerdata\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Rathan\Customerdata\Api\Data\CustomerInterface;
use Magento\Framework\Api\SearchCriteriaInterface;


interface CustomerRepositoryInterface
{
   
    public function save(CustomerInterface $customer);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(CustomerInterface $id);

    public function deleteById($id);

    
    // public function getById($id);

   
}