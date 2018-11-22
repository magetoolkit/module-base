<?php
/**
 * Created by PhpStorm.
 * User: eduardkarnaukh
 * Date: 21/11/2018
 * Time: 23:50
 */

namespace Magetoolkit\Base\Block\Adminhtml\System\Config;


class Info extends \Magento\Config\Block\System\Config\Form\Fieldset
{
    private $storeManager;
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Backend\Block\Context $context,
        \Magento\Backend\Model\Auth\Session $authSession,
        \Magento\Framework\View\Helper\Js $jsHelper,
        array $data = []
    )
    {
        $this->storeManager = $storeManager;
        parent::__construct($context, $authSession, $jsHelper, $data);
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return '<iframe id="magetoolkit" width="100%" src="http://magento-last.loc/info/index.html?id=' . $this->storeManager->getStore()->getBaseUrl() .'" ></iframe>';
    }
}
