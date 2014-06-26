<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Bundle\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use CGC\CoreBundle\Entity\Content;

class LoadContentData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 2;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $content = new Content();
        $content->setSection('Quem somos');
        $content->setKeyName('quem_somos_titulo');
        $content->setContent('Somos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Quem somos');
        $content->setKeyName('quem_somos_titulo_2');
        $content->setContent('uma consultoria especializada em Representação Comercial eTrade Marketing.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Quem somos');
        $content->setKeyName('quem_somos_conteudo');
        $content->setContent('<p>Oferecemos soluções personalizadas para levar nossos clientes a novos mercados  e aumentar as vendas de seus produtos com ações focadas no ponto de venda.</p>
            <p>Com estrutura moderna e equipes qualificadas, trabalhamos para que distribuição, exposição e venda dos produtos sejam feitos com excelência.</p>
<p>Assim, buscamos nos posicionar como uma solução efetiva para aumento das vendas no varejo, com qualidade e inovação.</p>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_titulo');
        $content->setContent('Fazemos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_titulo_2');
        $content->setContent('nosso trabalho para que você se dedique ao que sabe fazer melhor: seu produto.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_item_1');
        $content->setContent('Sua empresa');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_item_dna');
        $content->setContent('DNA');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_item_3');
        $content->setContent('Rede Varejista');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_item_5');
        $content->setContent('Lojas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_conteudo_1_titulo');
        $content->setContent('Representação Comercial');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_conteudo_2_titulo');
        $content->setContent('Trade Marketing');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_conteudo_3_titulo');
        $content->setContent('Resultados');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_conteudo_1_descricao');
        $content->setContent('Novos mercados para seu produto.Nossa expertise e contato com grandes redes de varejo permitem colocar seus produtos na gôndola.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_conteudo_2_descricao');
        $content->setContent('Seu produto cara a cara com o consumidor. Com ações no ponto de venda, viabilizamos a venda de produtos e conquista de clientes. <br/>Da exposição adequada e material promocional, ao treinamento de atendentes específico para seu produto.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('O que fazemos');
        $content->setKeyName('fazemos_conteudo_3_descricao');
        $content->setContent('Expansão para seus negócios. Nossas ações permitem uma rica experiência de marca e contato direto com o seu produto. Assim, expandimos seu mercado, suas vendas e lucro, enquanto conquistamos seu público-alvo.');
        $manager->persist($content);
        
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_titulo');
        $content->setContent('Serviços');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_titulo_2');
        $content->setContent('<p>que promovem a sinergia entre clientes, redes de varejo e profissionais contratados, abrangendo todos os níveis estratégicos da Representação Comercial e Trade Marketing.<br>
Clique em <img src="/public_html/bundles/dnavarejohome/css/images/plus.png" alt="" width="25"> para saber mais.
</p>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_1_titulo');
        $content->setContent('Recrutamento & Seleção');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_2_titulo');
        $content->setContent('Treinamento de Vendas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_3_titulo');
        $content->setContent('Supervisor');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_4_titulo');
        $content->setContent('Recursos Humanos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_5_titulo');
        $content->setContent('Atendente Vendedora & Degustadora');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_1_conteudo');
        $content->setContent('<ul>
                            <li>Processo de Admissão.</li>
                            <li>Folha de pagamento e benefícios.</li>
                            <li>
                                Treinamento e qualificação:
                                <ul>
                                    <li>Atendentes Vendedoras.</li>
                                    <li>Degustadoras.</li>
                                    <li>Demonstradoras de Produto.</li>
                                    <li>Vendedoras.</li>
                                </ul>
                            </li>
                        </ul>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_2_conteudo');
        $content->setContent('<p>
                            Mapeamento de necessidades a partir do perfil do cargo, para criar treinamentos específicos. 
                        </p>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_3_conteudo');
        $content->setContent('<p>Profissional com perfil de liderança e conhecimentos específicos do produto.</p>

<p>Treinado para ser o guardião do sortimento e supervisionar as atendentes vendedoras.</p>

<p>Rotina com roteiro programado para visitação nas lojas.</p>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_4_conteudo');
        $content->setContent('<ul>
                            <li>Emissão de documentos.</li>
                            <li>Controle de visitas e assiduidade.</li>
                            <li>Roteiro para supervisão das lojas.</li>
                            <li>Exames médicos.</li>
                            <li>Controle, Ficha de EPI e uniformes.</li>
                        </ul>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Serviços');
        $content->setKeyName('servicos_item_5_conteudo');
        $content->setContent('<ul>
                            <li>Abordagem e atendimento.</li>
                            <li>Apresentação e vendas. </li>
                            <li>Benefícios &amp; Nutrição.</li>
                            <li>Dicas de preparo e receitas.</li>
                            <li>Degustação no Ponto de Venda.</li>
                            <li>Monitoramento e Boa Exposição.</li>
                        </ul>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Recrutamento & Seleção');
        $content->setKeyName('recrutamento_titulo');
        $content->setContent('Recrutamento & Seleção');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Recrutamento & Seleção');
        $content->setKeyName('recrutamento_conteudo');
        $content->setContent('<p>Após estudo sobre a empresa, produto e posicionamento de marca, definimos o perfil profissional ideal.</p>

<p>Assim, atuamos durante o processo de seleção do candidato para uma escolha adequada.</p>

<p>Em seguida, fornecemos o treinamento específico para o produto, além dos processos de Recursos Humanos.</p>

<p>Finalmente, monitoramos e avaliamos os profissionais, garantindo a excelência de sua atuação.</p>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Treinamento de Vendas');
        $content->setKeyName('treinamento_titulo');
        $content->setContent('Treinamento de Vendas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Treinamento de Vendas');
        $content->setKeyName('treinamento_conteudo');
        $content->setContent('<p>A partir da ficha técnica do seu produto, suas caracteríscas e histórico da sua empresa, elaboramos um material específico para o treinamento da força de vendas.</p>

<p>Após o treinamento, por meio de nossos métodos de avaliação, nos certificamos que os profissionais capacitados exerçam os serviços com excelência nos pontos de venda, contribuindo para a construção e posicionamento de marca e a conquista de novos clientes.</p>');
        $manager->persist($content);
        
        
        $content = new Content();
        $content->setSection('Clientes');
        $content->setKeyName('clientes_titulo');
        $content->setContent('Clientes');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Clientes');
        $content->setKeyName('clientes_titulo_2');
        $content->setContent('que inspiram cases de sucesso.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Clientes');
        $content->setKeyName('clientes_conteudo');
        $content->setContent('<p>Seja empresas de produtos alimentícios a grandes redes de varejo, a DNA está sempre presente: da abertura de novos mercados a campanhas que colocam seus produtos em contato direto com o consumidor. </p>
                            <p>
                                Clique em <img src="/public_html/bundles/dnavarejohome/css/images/plus.png" alt="" width="25"> para saber mais sobre cada um de nossos trabalhos.
                            </p>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Clientes');
        $content->setKeyName('clientes_item_1');
        $content->setContent('Seu produto');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Clientes');
        $content->setKeyName('clientes_item_2');
        $content->setContent('Rede Varejista');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Clientes');
        $content->setKeyName('clientes_item_3');
        $content->setContent('Loja');
        $manager->persist($content);
        
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_titulo');
        $content->setContent('Contato');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_titulo_2');
        $content->setContent('que começa uma história de sucesso.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_conteudo');
        $content->setContent('A DNA Varejo tem a solução perfeita para sua empresa.
Ligue e agende uma reunião.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_endereco');
        $content->setContent('Endereço:<br>
                                <br>
                                Rua Rodolfo Troppmair, 33 <br>
                                Jardim Paulista, São Paulo – SP <br>
                                CEP 04001-010<br>
                                <br>
                                Fone<br>
                                11  981 990 745');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_formulario');
        $content->setContent('Se preferir, preencha os campos abaixo e envie uma mensagem.');
        $manager->persist($content);
        
        
        $manager->flush();
    }
}
