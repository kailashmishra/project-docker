<?php
namespace UdeyTech\Rocket\Helper;

use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface MIS171051
     */
    protected $scopeConfig;
 
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }
    
    
    public function getConfigValueCategorySlider() {
        return $this->scopeConfig->getValue("theme_setting/general/category_slider",ScopeInterface::SCOPE_STORE);
    }
}