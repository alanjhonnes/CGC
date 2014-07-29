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
        $content->setSection('CGC');
        $content->setKeyName('titulo_site');
        $content->setContent('CGC Rolamentos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('CGC');
        $content->setKeyName('descricao_site');
        $content->setContent('Venda de Rolamentos e Mancais, diversas marcas.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('CGC');
        $content->setKeyName('keywords_site');
        $content->setContent('rolamento, rolamentos, mancal, mancais, são paulo, sao paulo, rolamento de esfera, rolamento de agulha, rolamento de rolo');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Menu');
        $content->setKeyName('menu_1');
        $content->setContent('CGC');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Menu');
        $content->setKeyName('menu_2');
        $content->setContent('Rolamentos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Menu');
        $content->setKeyName('menu_3');
        $content->setContent('Mancais');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Menu');
        $content->setKeyName('menu_4');
        $content->setContent('Contato');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 1');
        $content->setKeyName('secao_1_titulo');
        $content->setContent('Titulo chamada');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 1');
        $content->setKeyName('secao_1_conteudo');
        $content->setContent('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis.</p>
                        <div>
                            <span class="glyphicon glyphicon-ok"></span> Rolamentos
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-ok"></span> Mancais
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-ok"></span> Buchas
                        </div>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 1');
        $content->setKeyName('secao_1_marcas');
        $content->setContent('Marcas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 1');
        $content->setKeyName('imagem_principal_1');
        $content->setContent('/img/main-image.jpg');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 1');
        $content->setKeyName('imagem_principal_2');
        $content->setContent('/img/main-image-2.jpg');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 1');
        $content->setKeyName('secao_1_marcas');
        $content->setContent('Marcas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('secao_2_titulo');
        $content->setContent('Rolamentos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_imagem_1');
        $content->setContent('<img class="img-responsive" src="/img/esfera.jpg">');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_imagem_2');
        $content->setContent('<img class="img-responsive" src="/img/agulha.jpg">');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_imagem_3');
        $content->setContent('<img class="img-responsive" src="/img/rolo.jpg">');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_nome_1');
        $content->setContent('Esferas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_nome_2');
        $content->setContent('Agulhas');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_nome_3');
        $content->setContent('Rolos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_texto_1');
        $content->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis. In nec iaculis erat. Fusce convallis metus sed auctor pretium. Duis consequat pulvinar nunc ut pharetra. Suspendisse malesuada arcu at vestibulum vestibulum. Duis hendrerit blandit pretium. Vestibulum ac erat sapien.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_texto_2');
        $content->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis. In nec iaculis erat. Fusce convallis metus sed auctor pretium. Duis consequat pulvinar nunc ut pharetra. Suspendisse malesuada arcu at vestibulum vestibulum. Duis hendrerit blandit pretium. Vestibulum ac erat sapien.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 2');
        $content->setKeyName('rolamento_texto_3');
        $content->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis. In nec iaculis erat. Fusce convallis metus sed auctor pretium. Duis consequat pulvinar nunc ut pharetra. Suspendisse malesuada arcu at vestibulum vestibulum. Duis hendrerit blandit pretium. Vestibulum ac erat sapien.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 3');
        $content->setKeyName('secao_3_titulo');
        $content->setContent('Mancais');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 3');
        $content->setKeyName('mancal_imagem_1');
        $content->setContent('<img class="img-responsive" src="/img/mancal-1.jpg">');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 3');
        $content->setKeyName('mancal_imagem_2');
        $content->setContent('<img class="img-responsive" src="/img/mancal-2.jpg">');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 3');
        $content->setKeyName('mancal_imagem_3');
        $content->setContent('<img class="img-responsive" src="/img/mancal-3.jpg">');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Seção 3');
        $content->setKeyName('mancal_texto');
        $content->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis. In nec iaculis erat. Fusce convallis metus sed auctor pretium. Duis consequat pulvinar nunc ut pharetra. Suspendisse malesuada arcu at vestibulum vestibulum. Duis hendrerit blandit pretium. Vestibulum ac erat sapien.');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('btn_orcamento');
        $content->setContent('Solicite aqui seu orçamento');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_titulo');
        $content->setContent('CGC Rolamentos');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_dados');
        $content->setContent('Rua Freire da Silva 203 - 01523-020<br>
                            Cambuci - São Paulo - SP<br>
                            Tel: (11) 3203-0934<br>');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('contato_email');
        $content->setContent('cgcmultipecas@hotmail.com');
        $manager->persist($content);
        
        $content = new Content();
        $content->setSection('Contato');
        $content->setKeyName('formulario_titulo');
        $content->setContent('Orçamento');
        $manager->persist($content);
        
        $manager->flush();
    }
}
