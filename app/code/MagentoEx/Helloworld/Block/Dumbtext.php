<?php
namespace MagentoEx\Helloworld\Block;

use MagentoEx\Helloworld\Model\InfoFactory;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;

class Dumbtext extends Template
{
    protected $info;

    public function __construct(
        Context $context,
        InfoFactory $info,
        array $data = []
    ) {
        $this->info = $info;
        parent::__construct($context, $data);
    }

    public function getInfoCollection()
    {
        return $this->info->create()->getCollection();
    }

    public function getDumbText()
    {
        echo "abc";
    }
}
