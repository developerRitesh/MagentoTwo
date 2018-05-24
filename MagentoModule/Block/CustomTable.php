<?php

namespace MagentoTwo\MagentoModule\Block;

use Magento\Framework\View\Element\Template\Context;
use MagentoTwo\MagentoModule\Model\Data;

class CustomTable extends \Magento\Framework\View\Element\Template
{
	public function __construct(Context $context, Data $model)
	{
        $this->model = $model;
		parent::__construct($context);
                
	}

	public function chechModel(){
		return "model is being called atleast";
	}

    public function getTableCollectionData()
    {
        $helloCollection = $this->model->getCollection();
        return $helloCollection;
    }
}