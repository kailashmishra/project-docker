<?php
/**
 * Copyright © UdeyTech Pvt. Ltd All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace UdeyTech\Rocket\Controller\Index;

use Magento\Framework\App\Action\HttpOptionsActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpOptionsActionInterface
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param PageFactory $resultPageFactory
     */
    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Execute view action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}

