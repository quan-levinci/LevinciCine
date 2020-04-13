<?php

namespace Levinci\AjaxFormSubmit\Cron;

use Magento\Backend\Block\Template\Context;
use Magento\CatalogInventory\Model\Stock\StockItemRepository;

class Test
{
    protected $stockItemRepository;
    public function __construct(
        Context $context,
        StockItemRepository $stockItemRepository,
        array $data = []
    )
    {
        $this->stockItemRepository=$stockItemRepository;
        parent::__construct($context, $data);
    }

    public function execute()
    {
        var_dump($this->stockItemRepository);
        exit();

    }
}