<?php

namespace Levinci\AjaxFormSubmit\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Levinci\AjaxFormSubmit\Model\Submit;
use Magento\Framework\Controller\Result\JsonFactory;

class Form extends Action
{
    /** @var PageFactory $resultPageFactory */
    protected $submit;
    protected $resultJsonFactory;

    /**
     * Result constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, Submit $submit, JsonFactory $resultJsonFactory)
    {
        $this->submit = $submit;
        $this->resultJsonFactory=$resultJsonFactory;
        parent::__construct($context);
    }

    /**
     * The controller action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
        $post = (array)$this->getRequest()->getPost();
        $response = ['sucess' => 'true'];
        $fail = ['sucess' => 'false'];
        try {
           if($post["first_name"]!=null & $post["last_name"]!=null & $post["email"]!=null){
          $data = [
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email']
          ];
          $result = $this->submit;
          $result->addData($data)->save();
          $resultJson->setData($response);
        }
        } catch (Exception $e) {
          $resultJson->setData($fail);
        }

        return $resultJson;
    }
}