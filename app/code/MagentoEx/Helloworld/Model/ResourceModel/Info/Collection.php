<?php
namespace MagentoEx\Helloworld\Model\ResourceModel\Info;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('MagentoEx\Helloworld\Model\Info', 'MagentoEx\Helloworld\Model\ResourceModel\Info');
    }

}