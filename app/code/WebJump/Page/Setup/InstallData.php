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
                ->setStores([8])
                ->setContent(/** @lang text */
                    '
                 <h1><strong>PS5 ganha nome oficial e tem detalhes de lançamento confirmados pela Sony</strong></h1>
                 <p>O lançamento do&nbsp;<a href="https://www.techtudo.com.br/tudo-sobre/ps5.html">PS5</a>
                 &nbsp;ganhou mais detalhes nesta terça-feira (8), com matéria exclusiva da revista Wired em parceria
                 com a&nbsp;<a href="https://www.techtudo.com.br/tudo-sobre/sony.html">Sony</a>. A fabricante 
                 confirmou o nome PlayStation 5 (ou PS5), seguindo o padrão de títulos estabelecido desde o primeiro
                 modelo do videogame. O lançamento do console está confirmado para final de 2020, ainda sem data mais
                 específica, mas a previsão é que o videogame chegue ao mercado próximo ao Natal para aproveitar as 
                 vendas festivas.</p>
                 <p>A Sony confirmou à Wired a veracidade do kit de desenvolvimento do PS5 
                 (versão inicial do console) que vazou na 
                 Internet na última semana. O kit de desenvolvimento é distribuído exclusivamente a estúdios que 
                 produzem os jogos, 
                 para que os títulos sejam feitos antes do lançamento do aparelho. A versão vazada do PS5 mostra 
                 um aparelho em formato “V”, que é o algarismo romano para “cinco”, 
                 remetendo à edição do PlayStation.</p>
                 <p>{{block class="Magento\Framework\View\Element\Template" template="WebJump_Page::image.phtml"}}</p>')
                ->save();
        } catch (\Exception $exception) {
            $this->loggerInterface->critical($exception->getMessage());
        }

        $setup->endSetup();
    }
}