<?php
namespace Vendor\CustomLogin\Controller\Account;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RedirectFactory;

class LoginDisabled extends Action
{
    protected $resultRedirectFactory;

    public function __construct(Context $context, RedirectFactory $resultRedirectFactory)
    {
        parent::__construct($context);
        $this->resultRedirectFactory = $resultRedirectFactory;
    }

    public function execute()
    {
        // Redirect away (or return 404)
        return $this->resultRedirectFactory->create()->setPath('/');
    }
}
