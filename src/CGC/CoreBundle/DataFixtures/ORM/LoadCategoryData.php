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

use CGC\CoreBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    function getOrder()
    {
        return 0;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        
        $category = new Category();
        $category->setName('Rolamento');
        $this->addReference($category->getName(), $category);
        $manager->persist($category);
        
        $category = new Category();
        $category->setName('Mancal');
        $this->addReference($category->getName(), $category);
        $manager->persist($category);
        
        $category = new Category();
        $category->setName('Rolamento de Esferas');
        $this->addReference($category->getName(), $category);
        $manager->persist($category);
        
        $category = new Category();
        $category->setName('Rolamento de Agulhas');
        $this->addReference($category->getName(), $category);
        $manager->persist($category);
        
        $category = new Category();
        $category->setName('Rolamento de Rolos');
        $this->addReference($category->getName(), $category);
        $manager->persist($category);
        
        $manager->flush();
    }
}
