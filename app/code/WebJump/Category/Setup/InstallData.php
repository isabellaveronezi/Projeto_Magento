<?php

namespace WebJump\Category\Setup;

use Magento\Catalog\Helper\DefaultCategory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Catalog\Model\CategoryFactory as Category;
use Magento\Catalog\Api\CategoryRepositoryInterface as Repository;
/**
 * Class InstallData
 * @package WebJump\Category\Setup
 */

class InstallData implements InstallDataInterface
{
    /** @var Category */
    private $categoryFactory;
    /** @var Repository */
    private $repository;
    /**
     * @var DefaultCategory
     */
    private $defaultCategoryHelper;
    /**
     * InstallData constructor.
     *
     * @param Category $category
     * @param Repository $repository
     */
    public function __construct(Category $category, Repository $repository, DefaultCategory $defaultCategoryHelper)
    {
        $this->categoryFactory = $category;
        $this->repository = $repository;
        $this->defaultCategoryHelper = $defaultCategoryHelper;
    }
    /**
     * Upgrade function
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        /** @var Category $category */
        $data = $this->createCategory();
        foreach ($data as $d) {
            $validator = $this->categoryFactory->create();
            if (!$validator->loadByAttribute('url_key', $d['url_key'])) {
                $category = $this->categoryFactory->create();
                $category->setData($d);
                $this->save($category);
            }
        }
        $setup->endSetup();
    }
    /**
     * @return array
     */
    private function createCategory()
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->loadByAttribute('entity_id', $parentId);
        $categories = array();

        $categories[] = [
            'name' => 'PLAYSTATION',
            'url_key' => 'playstation',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId()
        ];

        $categories[] = [
            'name' => 'XBOX',
            'url_key' => 'xbox',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId()
        ];

        $categories[] = [
            'name' => 'NINTENDO',
            'url_key' => 'nitendo',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId()
        ];

        $categories[] = [
            'name' => 'FUTEBOL',
            'url_key' => 'futebol',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId()
        ];

        $categories[] = [
            'name' => 'VÔLEI',
            'url_key' => 'volei',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId()
        ];

        $categories[] = [
            'name' => 'BASQUETE',
            'url_key' => 'basquete',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId(),

        ];

        return $categories;
    }
    /**
     * @param \Magento\Catalog\Api\Data\CategoryInterface $category
     * @return void
     */
    private function save($category)
    {
        try {
            $this->repository->save($category);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }
}
