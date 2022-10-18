<?php
namespace Rathan\AddContent\Block;
 
class Content extends \Magento\Framework\View\Element\Template
{
    public $scopeConfig;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig=$scopeConfig;
        parent::__construct($context);
    }
    public function getText()
    {
        $text = $this->scopeConfig->getValue('secretdata/general/display_text' ,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $enable = $this->scopeConfig->getValue('secretdata/general/enable',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        if($enable==1){
            return $text;
        }else{
            return " ";
        }

      
    }
   
    public function getContentTxt()
    {
        return "Hurry";
              
    }
}