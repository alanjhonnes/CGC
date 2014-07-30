<?php

namespace CGC\AdminBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BrandAdminController extends CRUDController
{
    public function showPageAction($id){
        
        $brand = $this->getDoctrine()->getRepository('CGCCoreBundle:Brand')->find($id);
        
        return new RedirectResponse($this->generateUrl('brand_show', array('slug' => $brand->getSlug())));
        
    }
}
