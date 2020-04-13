<?php

namespace MagentoEx\Helloworld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use MagentoEx\Helloworld\Model\Info;
use Magento\Framework\Controller\ResultFactory;

class Form extends Action
{
    /** @var PageFactory $resultPageFactory */
    protected $_postFactory;
    protected $_resultFactory;

    /**
     * Result constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, Info $postFactory, ResultFactory $resultFactory)
    {
        $this->_resultFactory = $resultFactory;
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    /**
     * The controller action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
      try {
        $post = (array)$this->getRequest()->getPost();
        if(!empty($post)){
          $data = [
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email']
          ];
          $result = $this->_postFactory;
          $result->addData($data)->save();
        }

        $this->messageManager->addSuccessMessage('Submit done !');
      } catch (Exception $e) {
        $this->logger->critical('Error message', ['exception' => $e]);
      }

        $resultRedirect = $this->_resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl('/helloworld/index/index');

        return $resultRedirect;

    }
}