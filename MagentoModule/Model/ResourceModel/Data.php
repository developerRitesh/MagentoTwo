<?php
     
namespace MagentoTwo\MagentoModule\Model\ResourceModel;
 
 
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
     
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('custom_table', 'id');
    }
}

//here , in resource model we provide the name of the table that we want to use for our module 