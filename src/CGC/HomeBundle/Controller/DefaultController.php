<?php

namespace CGC\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        
        $contents = $this->getDoctrine()->getManager()->getRepository('CGCCoreBundle:Content')->findAll();
        $contentsMap = array();

        foreach ($contents as $content) {
            $contentsMap[$content->getKeyName()] = $content->getContent();
        }
        
        $brands = $this->getDoctrine()->getManager()->getRepository('CGCCoreBundle:Brand')->findAll();
        
        return array('content' => $contentsMap, 'brands' => $brands);
    }
}
