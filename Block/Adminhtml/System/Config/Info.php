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
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return '<iframe id="magetoolkit" width="100%" src="https://www.magetoolkit.com/info/index.html" ></iframe>';
    }
}
