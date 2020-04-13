<?php
namespace MagentoEx\Helloworld\Model;
class Info extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init('MagentoEx\Helloworld\Model\ResourceModel\Info');
    }

}