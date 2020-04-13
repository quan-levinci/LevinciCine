<?php
namespace MagentoEx\Helloworld\Block;

class Yourcustomer extends \Magento\Framework\View\Element\Template
{

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }


    public function getDumbText()
    {
        echo "abc";
    }
}
