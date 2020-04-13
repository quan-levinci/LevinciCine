<?php
namespace MagentoEx\Helloworld\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;



class Dumbtext extends \Magento\Framework\App\Action\Action
{
  protected $_pageFactory;



  public function __construct(
    Context $context,
    PageFactory $pageFactory

    )
  {
    $this->_pageFactory = $pageFactory;

    return parent::__construct($context);
  }

 public function execute()
  {
    return $this->_pageFactory->create();
  }
}