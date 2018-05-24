<?php
namespace MagentoTwo\MagentoModule\Controller\Adminhtml\Customer;
 
class Listing extends \Magento\Backend\App\Action
{
    /**
     * Hello test controller page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        echo __('Hello Webkul Team.');
    }
 
    /**
     * Check Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MagentoTwo_MagentoModule::customer');
    }
}