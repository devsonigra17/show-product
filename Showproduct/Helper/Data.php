<?php

    namespace Dev\Showproduct\Helper;

    use Magento\Store\Model\ScopeInterface;
    use Magento\Framework\App\Helper\AbstractHelper;

    class Data extends AbstractHelper
    {
        const XML_CONFIG_PATH = 'dev_showproduct/storefront/sku_name';
        public $_storeManager;
        public function getConfig()
        {
            $configValue = $this->scopeConfig->getValue(self::XML_CONFIG_PATH,ScopeInterface::SCOPE_STORE); // For Store
            $configArray = explode(",",$configValue);
            return $configArray;
        }
    }