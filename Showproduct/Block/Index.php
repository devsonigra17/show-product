<?php

    namespace Dev\Showproduct\Block;

    class Index extends \Magento\Framework\View\Element\Template
    {
        protected $_productRepository;
        protected $_productRepositoryInterface;
        protected $_currency;
        protected $messageManager;
        protected $_customLogger;

        public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepositoryInterface,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        // \Magento\Framework\Message\ManagerInterface $messageManager,
        \Dev\Showproduct\Logger\Logger $customLogger,
        array $data = []
        )
        {
            $this->_productRepository = $productRepository;
            $this->_productRepositoryInterface = $productRepositoryInterface;
            $this->_customLogger = $customLogger;
            // $this->messageManager = $messageManager;
            parent::__construct($context, $data);
        }

        public function getProductBySku($sku)
        {
            return $this->_productRepository->get($sku);
        }

        public function getLoggerData()
        {
            $params = [
                [
                    'value' => 'dev',
                    'label' => 'Dev'
                ],
                [
                    'value' => 'sonigra',
                    'label' => 'Sonigra'
                ] 
            ];
            $this->_customLogger->info('Message goes here');
            $this->_customLogger->info('API Params', $params); 
            return $this->_customLogger;
        }
        // public function getUrl($sku)
        // {
        //     $productUrl = $this->productRepository->get($sku);
        // }
    }
?> 