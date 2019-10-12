<?php
/**
 * Created by PhpStorm.
 * User: webjump-nb034
 * Date: 07/10/19
 * Time: 20:38
 */

namespace WebJump\Page\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Cms\Model\PageFactory as Page;
use Psr\Log\LoggerInterface as Logger;

class InstallData implements InstallDataInterface
{

    /** @var Page $pageFactory */

    protected $pageFactory;

    /**
     * @var Logger $loggerInterface
     */
    private $loggerInterface;

    /**
     * InstallData constructor.
     * @param Page $pageFactory
     * @param Logger $logger
     */
    public function __construct(Page $pageFactory, Logger $logger)
    {
     $this->pageFactory = $pageFactory;
     $this->loggerInterface = $logger;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        try {
            $page = $this->pageFactory->create();
            $page->setTitle('Notícias')
                ->setIdentifier('noticia')
                ->setIsActive(true)
                ->setPageLayout('1column')
                ->setStores([2])
                ->setContent('{{block class="Magento\Framework\View\Element\Template" 
                             template="WebJump_Page::image.phtml"}}')
                ->save();
        } catch (\Exception $exception) {
            $this->loggerInterface->critical($exception->getMessage());
        }

        $setup->endSetup();
    }
}