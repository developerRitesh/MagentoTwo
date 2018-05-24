<?php
 
 
namespace MagentoTwo\MagentoModule\Model;
	 
use Magento\Framework\Model\AbstractModel;
	 
class Data extends AbstractModel
{	
    protected function _construct()
    {
        $this->_init('MagentoTwo\MagentoModule\Model\ResourceModel\Data');
    }
}