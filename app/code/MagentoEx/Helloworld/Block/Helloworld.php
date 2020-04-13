<?php
namespace MagentoEx\Helloworld\Block;

use Magento\Customer\Model\Customer;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory;
use Magento\Framework\View\Element\Template\Context;

class Helloworld extends \Magento\Framework\View\Element\Template
{
    protected $customer;

    protected $collectionFactory;

    public function __construct(
        Context $context,
        Customer $customer,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->customer        = $customer;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }
    public function getLoadProduct($customerId)
    {

        try {
            //code...
            return $this->customer->load($customerId);
        } catch (Exception $e) {
            //throw $th;
            echo $e->getMessage();
        }
    }

    public function getCustomerCollection()
    {
        return $this->collectionFactory->create();
    }
    public function loadById($customerId)
    {
        $target = $this->customer->load($customerId);

        try {
            return $target;
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    public function getVarDump($customer_id)
    {
        var_dump($this->customer->load($customer_id)->getData());
    }

    public function getVarDumpCollect()
    {
        $collect = $this->customer->getCollection()
            ->addAttributeToSelect("*")
            ->load();
        var_dump($collect);
        exit();
    }

    public function test()
    {
        return 'abc';
    }

    public function getCustomerCollection1()
    {
        return $this->customer->getCollection()
            ->addAttributeToSelect("*")
            ->load();
    }
}
