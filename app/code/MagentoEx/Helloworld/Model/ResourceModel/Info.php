<?php
namespace MagentoEx\Helloworld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Context;

class Info extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{


    protected function _construct()
    {
        $this->_init('customer_info', 'id');
    }

}
