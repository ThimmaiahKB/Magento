<?php
namespace Rathan\Restapi\Model;

use Magento\TestFramework\Exception\NoSuchActionException;
use Rathan\Restapi\Api\ConfigurableProductRepositoryInterface;
use Rathan\Restapi\Api\ProductRepositoryInterface;
use Rathan\Restapi\Api\Data\ProductInterfaceFactory;
use Rathan\Restapi\Helper\ProductHelper;
use Magento\Framework\Exception\NoSuchEntityException;

class ProductRepository implements ProductRepositoryInterface
{
    private $productInterfaceFactory;
    private $productHelper;
    private $productRepository;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        productInterfaceFactory $productInterfaceFactory,
        productHelper $productHelper
    )
    {
        $this->productInterfaceFactory = $productInterfaceFactory;
        $this->productHelper = $productHelper;
        $this->productRepository = $productRepository;
    }
    public function getProductById($id)
    {
        $productInterface = $this->productInterfaceFactory->create();

        try{
            $product = $this->productRepository->getById($id);
            $productInterface->setId($product->getId());
            $productInterface->setSku($product->getSku());
            $productInterface->setName($product->getName());
            $productInterface->setDescription($product->getDescription() ? $product->getDescription(): "");
            $productInterface->setPrice($this->productHelper->formatPrice($product->getPrice()));
            $productInterface->setImages($this->productHelper->getProductImagesArray($product));
            return $productInterface;
        }catch (NoSuchActionException $e){
            throw NoSuchEntityException::singleField("id",$id);
        }
    }
}


