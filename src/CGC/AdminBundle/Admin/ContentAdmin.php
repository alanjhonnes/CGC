<?php

namespace CGC\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ContentAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('key_name')
            ->add('content')
            ->add('section')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('key_name', 'text', array('label' => 'Chave'))
            ->add('content', 'text', array('label' => 'Conteúdo'))
            ->add('section', 'text', array('label' => 'Seção'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('key_name', 'text', array('label' => 'Chave', 'attr' => array('readonly' => 'readonly')))
            ->add('section', 'text', array('label' => 'Seção', 'attr' => array('readonly' => 'readonly')))
            ->add('content', 'ckeditor', array('label' => 'Conteúdo'));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('section', 'text', array('label' => 'Seção'))
            ->add('key_name', 'text', array('label' => 'Chave'))
            ->add('content', 'text', array('label' => 'Conteúdo'))
        ;
    }
}
