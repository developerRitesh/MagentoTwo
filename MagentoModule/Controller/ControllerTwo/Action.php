<?php

// here we give name of the controller in namespace. We have created two folder controllerone and controllertwo , these folder will be termed as controller and all the class file with in that folder will be actions 

namespace MagentoTwo\MagentoModule\Controller\ControllerTwo; 


class Action extends \Magento\Framework\App\Action\Action
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
