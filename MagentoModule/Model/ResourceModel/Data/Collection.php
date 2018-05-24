<?php
 
 
namespace MagentoTwo\MagentoModule\Model\ResourceModel\Data;
 
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
 
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
		    'MagentoTwo\MagentoModule\Model\Data',
		    'MagentoTwo\MagentoModule\Model\ResourceModel\Data'
		);
    }
}