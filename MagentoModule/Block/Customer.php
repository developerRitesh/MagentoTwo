<?php
namespace Mageplaza\HelloWorld\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_customer';
		$this->_blockGroup = 'MagentoTwo_MagentoModule';
		$this->_headerText = __('Customer');
		$this->_addButtonLabel = __('Add New Customer');
		parent::_construct();
	}
}