<?php
namespace Levinci\AjaxFormSubmit\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\CatalogInventory\Model\Stock\StockItemRepository;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class Sayhello extends Command
{
    protected $stockItemRepository;

    public function __construct(
        CollectionFactory $stockItemRepository
    )
    {
        $this->stockItemRepository=$stockItemRepository;
        parent::__construct();
    }

   protected function configure()
   {
       $this->setName('example:sayhello');
       $this->setDescription('Demo command line');

       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $output1 = $this->stockItemRepository->create();
       $output1->addAttributeToSelect('*');
       $output1->setPageSize(3);
       var_dump($output);
   }
}