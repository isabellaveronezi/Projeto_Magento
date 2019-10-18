<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb034
 * Date: 11/10/19
 * Time: 23:15
 */

namespace WebJump\Attribute\Setup;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * @var \Magento\Eav\Setup\EavSetupFactory
     */
    private $eavSetupFactory;
    /**
     * @param \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
     */
    public function __construct(\Magento\Eav\Setup\EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory */
        $eavSetupFactory = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'developer',
            $this->getAttributeData('Desenvolvedor(a)', 74)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'distributor',
            $this->getAttributeData('Distribuidor', 75)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'gender',
            $this->getAttributeData('Gênero', 76)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'material',
            $this->getAttributeData('Material', 78)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'warranty',
            $this->getAttributeData('Garantia', 79)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'title',
            $this->getAttributeData('Título', 82)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'origin',
            $this->getAttributeData('Origem', 83)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'size',
            $this->getAttributeData('Tamanho', 84)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'number',
            $this->getAttributeData('Número', 85)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'brand',
            $this->getAttributeData('Marca', 86)
        );
        $eavSetupFactory->addAttribute(
            Product::ENTITY,
            'color',
            $this->getAttributeData('Cor', 87)
        );
    }
    /**
     * Get simple attribute data.
     */
    protected function getAttributeData($label, $sortOrder)
    {
        $productTypes = join(',', [Type::TYPE_SIMPLE, Type::TYPE_VIRTUAL]);
        $attributeData = [
            'type' => 'text',
            'label' => __($label),
            'input' => 'text',
            'sort_order' => $sortOrder,
            'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
            'user_defined' => true,
            'required' => false,
            'used_in_product_listing' => true,
            'apply_to' => $productTypes,
            'group' => 'Product Details',
            'unique' => false,
            'visible_on_front' => true,
            'searchable' => false,
            'filterable' => true,
            'comparable' => false,
            'visible' => true,
            'class' => 'validate-number validate-zero-or-greater',
        ];
        return $attributeData;
    }
}