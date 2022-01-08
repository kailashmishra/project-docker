<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace UdeyTech\Rocket\Block;

use Magento\Catalog\Model\Category;
use Magento\Customer\Model\Context;
use Magento\Catalog\Api\CategoryRepositoryInterface;

/**
 * Catalog Category
 *
 */
class CategoryCollection extends \Magento\Framework\View\Element\Template
{
    /**
     * @var CategoryRepositoryInterface $categoryRepository
     */
    protected $categoryRepository;

    /**
     * @var Category
     */
    protected $_categoryInstance;

    /**
     * Current category key
     *
     * @var string
     */
    protected $_currentCategoryKey;

    /**
     * Array of level position counters
     *
     * @var array
     */
    protected $_itemLevelPositions = [];

    /**
     * Catalog category
     *
     * @var \Magento\Catalog\Helper\Category
     */
    protected $_catalogCategory;

    /**
     * @var \Magento\Framework\Registry
     */
    protected $_registry;

    /**
     * Customer session
     *
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    /**
     * @var \Magento\Catalog\Model\Indexer\Category\Flat\State
     */
    protected $flatState;

    /**
     * @var \UdeyTech\Rocket\Helper\Data
     */
    protected $_dataHelper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Catalog\Model\CategoryFactory $categoryFactory
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param \Magento\Catalog\Helper\Category $catalogCategory
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Catalog\Model\Indexer\Category\Flat\State $flatState
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Framework\App\Http\Context $httpContext,
        \Magento\Catalog\Helper\Category $catalogCategory,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\Indexer\Category\Flat\State $flatState,
        CategoryRepositoryInterface $categoryRepository,
        \UdeyTech\Rocket\Helper\Data $dataHelper,
        array $data = []
    ) {
        $this->httpContext = $httpContext;
        $this->_catalogCategory = $catalogCategory;
        $this->_registry = $registry;
        $this->flatState = $flatState;
        $this->_categoryInstance = $categoryFactory->create();
        $this->categoryRepository = $categoryRepository;
        $this->_dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }


    /**
     * Get category
     *
     * @return Category
     */
    public function getStoreCategories($sorted = false, $asCollection = false, $toLoad = true)
    {
        return $this->_catalogCategory->getStoreCategories($sorted , $asCollection, $toLoad);
    }

    /**
     * Return categories helper
     */   
    public function getCategoryHelper()
    {
        return $this->_catalogCategory;
    }

    /**
     * Retrieves the system config value of category slider
     */
    public function canCategorySliderShow()
    {
      return $this->_dataHelper->getConfigValueCategorySlider();
    }
    

}
