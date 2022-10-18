<?php

namespace Rathan\Display\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Rathan\Display\Model\ResourceModel\View\CollectionFactory as ViewCollectionFactory;

class Show extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_viewCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        ViewCollectionFactory $viewCollectionFactory,
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
    public function getHelloWorldTxt()
    {
        return "Display data from database";
    }
    public function getCollection()
    {
        /** @var ViewCollection $viewCollection */
        $viewCollection = $this->_viewCollectionFactory ->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }
}