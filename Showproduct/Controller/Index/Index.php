<?php

    namespace Dev\Showproduct\Controller\Index;

    // use \Psr\Log\LoggerInterface;

    class Index extends \Magento\Framework\App\Action\Action
    {
        protected $resultPageFactory;
        // protected $_customLogger;

        public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
        // \Dev\Showproduct\Logger\Logger $customLogger

        )
        {
            $this->resultPageFactory = $resultPageFactory;
            // $this->_customLogger = $customLogger;
            return parent::__construct($context);
        }

        public function execute()
        {
            $resultPage = $this->resultPageFactory->create();
            $resultPage->getConfig()->getTitle()->prepend(__('Product View'));
            // $this->_customLogger->info('Message goes here');
            return $resultPage;
        }
    }

