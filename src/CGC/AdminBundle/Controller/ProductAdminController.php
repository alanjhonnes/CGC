<?php

namespace CGC\AdminBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductAdminController extends CRUDController
{
    public function showPageAction($id){
        
        $product = $this->getDoctrine()->getRepository('CGCCoreBundle:Product')->find($id);
        
        return new RedirectResponse($this->generateUrl('product_show', array('slug' => $product->getSlug())));
        
    }
}
