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

use CGC\CoreBundle\Entity\Brand;

class LoadBrandData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
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
        
        $brand = new Brand();
        $brand->setName('FAG');
        $brand->setLogo($this->getReference(strtolower($brand->getName()) . '-logo'));
        $this->addReference($brand->getName() . '-brand', $brand);
        $brand->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis.');
        $manager->persist($brand);
        
        $brand = new Brand();
        $brand->setName('INA');
        $brand->setLogo($this->getReference(strtolower($brand->getName()) . '-logo'));
        $this->addReference($brand->getName() . '-brand', $brand);
        $brand->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis a enim ac tristique. Aenean tristique vitae tellus eget mattis.');
        $manager->persist($brand);
        
        $manager->flush();
    }
}
