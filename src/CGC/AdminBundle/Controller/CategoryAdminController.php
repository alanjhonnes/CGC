<?php

namespace CGC\AdminBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryAdminController extends CRUDController
{
    public function showPageAction($id){
        
        $category = $this->getDoctrine()->getRepository('CGCCoreBundle:Category')->find($id);
        
        return new RedirectResponse($this->generateUrl('category_show', array('slug' => $category->getSlug())));
        
    }
}
