<?php
// vendor/etv/test/Etv/TestBundle/Admin/UserAdmin.php

namespace Etv\TestBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text', array('label' => 'User name'))
            //->add('firstname', 'entity', array('class' => 'Etv\TestBundle\Admin\Entity\User'))
           ->add('firstname', 'text', array('label' => 'First name'))
           ->add('lastname', 'text', array('label' => 'Last name'))
           //->add('lastname', 'text', array('label' => 'Last name'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('firstname')
            ->add('lastname')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('firstname')
            ->add('lastname')
            ->add('created_at','datetime')
            ->add('modify_at','datetime');
    }
}