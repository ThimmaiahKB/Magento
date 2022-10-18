<?php
    namespace Rathan\Restapi\Api;

    use Magento\Framework\Exception\NoSuchEntityException;

    interface ProductRepositoryInterface
    {
        /**
         * @param int $id
         * @return Rathan\Restapi\Api\Data\ProductInterface
         */
        public function getProductById(int $id);
    }

?>

