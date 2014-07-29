<?php

namespace CGC\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;



/**
 * Description of ClientAdmin
 *
 * @author user
 */
class ProductAdmin extends Admin {
    
    protected function configureRoutes(\Sonata\AdminBundle\Route\RouteCollection $collection) {
        $collection->add('showPage', $this->getRouterIdParameter().'/showPage');
    }
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'Nome'))
            
            ->add('category', 'sonata_type_model_list', array('label' => 'Categoria'))
            ->add('brand', 'sonata_type_model_list', array('label' => 'Marca'))
            ->add('image', 'sonata_type_model_list', array('label' => 'Imagem'))
            ->add('description', 'ckeditor', array('label' => 'Descrição'))
        ;
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label'=>'Nome'))
            ->add('description', null, array('label'=>'Descrição'))
            ->add('category', null, array('label'=>'Categoria'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array('label'=>'Nome'))
            ->add('description', null, array('label'=>'Descrição'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'ShowPage' => array(
                        'template' => 'CGCAdminBundle:Product:list__action_showPage.html.twig'
                    )
                )
            ))
        ;
    }
}
