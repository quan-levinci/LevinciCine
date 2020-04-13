<?php
namespace Levinci\AjaxFormSubmit\Model;

use Magento\Framework\Model\AbstractModel;

class Submit extends AbstractModel
{

    protected function _construct()
    {
        $this->_init('Levinci\AjaxFormSubmit\Model\ResourceModel\Submit');
    }

}