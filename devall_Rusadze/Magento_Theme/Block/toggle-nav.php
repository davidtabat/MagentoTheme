<?php
namespace Magento_Theme\Block;
use Magento\Framework\View\Element\Template;

class ToggleNav extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = array())
    {
        $this->setData('contacts',array());
    }
}
?>