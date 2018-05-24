<?php

namespace MagentoTwo\MagentoModule\Controller\ControllerTwo; 
use Magento\Framework\Controller\ResultFactory;

class AddTableData extends \Magento\Framework\App\Action\Action
{
    
    public function execute()
    {
       $name = $this->getRequest()->getPostValue("name");
       $age = $this->getRequest()->getPostValue("age");
       $address = $this->getRequest()->getPostValue("address");
       
       $item = $this->_objectManager->create("MagentoTwo\MagentoModule\Model\Data");
       $item->setName($name);
       $item->setAge($age);
       $item->setAddress($address);
       $item->save();
       
       $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
       $redirect->setUrl($this->_redirect->getRefererUrl());
       
       return $redirect; 

    }
}
