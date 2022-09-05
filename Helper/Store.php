<?php
namespace Aims\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\UrlInterface;

class Store extends AbstractHelper {

    protected $_storeManager;
    protected $_urlInterface;

    public function __construct(Context $context, StoreManagerInterface $storeManager, UrlInterface $urlInterface) {
        parent::__construct($context);
        $this->_storeManager = $storeManager;
        $this->_urlInterface = $urlInterface;
    }

    public function getId() {
        return $this->_storeManager->getStore()->getId();
    }

    public function getBaseUrl() {
        return $this->_storeManager->getStore()->getBaseUrl();
    }

}
