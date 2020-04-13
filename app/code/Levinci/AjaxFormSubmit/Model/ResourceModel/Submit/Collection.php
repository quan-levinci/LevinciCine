<?php
namespace Levinci\AjaxFormSubmit\Model\ResourceModel\Submit;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Levinci\AjaxFormSubmit\Model\Submit', 'Levinci\AjaxFormSubmit\Model\ResourceModel\Submit');
    }

}