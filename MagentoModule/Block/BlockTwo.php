<?php
namespace MagentoTwo\MagentoModule\Block;

class BlockTwo extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function loadData()
    {   
    	$query = "here we will fetch our data to load in our view";
        return $query;
    }
}