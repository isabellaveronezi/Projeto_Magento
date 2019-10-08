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
                    ->setStores([9])
                    ->setContent(/** @lang text */
                        '
                                   <div class="title">
                                   <h1 class="content-head__title"><strong>Fifa The Best: pela sexta vez, Messi é eleito
                                    melhor jogador do mundo</strong></h1></div>
                                    <div class="medium-centered subtitle">
                                    <h2 class="content-head__subtitle">
                                    <strong>Argentino supera Van Dijk e Cristiano Ronaldo e volta a conquistar premiação
                                     após quatro anos</strong></h2>
                                    <p>Pela sexta vez, o mundo está aos pés de Lionel Messi. 
                                    O craque do Barcelona superou Virgil van Dijk, do Liverpool, e Cristiano Ronaldo, 
                                    da Juventus, e conquistou o prêmio “Fifa The Best” de melhor jogador do mundo da 
                                    temporada 2018/19. O camisa 10 argentino agora é o maior vencedor da premiação no 
                                    futebol masculino, com seis troféus, uma a mais que CR7. Ele iguala Marta, 
                                    que também tem seis conquistas no feminino.</p></div>
                                    <p>{{block class="Magento\Framework\View\Element\Template" 
                                    template="WebJump_Page::sport.phtml"}}</p>')
                    ->save();

            } catch (\Exception $exception) {
                $this->loggerInterface->critical($exception->getMessage());


            $setup->endSetup();
                }
        }
    }
}