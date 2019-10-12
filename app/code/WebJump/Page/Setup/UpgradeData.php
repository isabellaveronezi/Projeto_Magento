<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb034
 * Date: 08/10/19
 * Time: 16:14
 */

namespace WebJump\Page\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Cms\Model\PageFactory as Page;
use Psr\Log\LoggerInterface as Logger;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var Page $pageFactory
     */
    protected $pageFactory;

    /**
     * @var Logger $loggerInterface
     */
    private $loggerInterface;

    /**
     * UpgradeData constructor.
     * @param Page $pageFactory
     * @param Logger $logger
     */
    public function __construct(
        Page $pageFactory, Logger $logger
    ) {
        $this->pageFactory = $pageFactory;
        $this->loggerInterface = $logger;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.0', '<')) {
            try {
                $page = $this->pageFactory->create();
                $page->setTitle('Informações')
                    ->setIdentifier('informacao')
                    ->setIsActive(true)
                    ->setPageLayout('1column')
                    ->setStores([3])
                    ->setContent('{{block class="Magento\Framework\View\Element\Template" 
                                   template="WebJump_Page::sport.phtml"}}')
                    ->save();

            } catch (\Exception $exception) {
                $this->loggerInterface->critical($exception->getMessage());


            $setup->endSetup();
                }
        }
    }
}