<?php

namespace MagentoTwo\MagentoModule\Controller\ControllerTwo; 

class TableData extends \Magento\Framework\App\Action\Action
{
    
    protected $_resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context  $context,
        \Magento\Framework\View\Result\PageFactory  $resultPageFactory
    
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_resultPageFactory->create();

    }
}
